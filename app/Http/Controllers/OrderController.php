<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

use App\Models\Order;
use App\Models\OrderDetail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class OrderController extends Controller
{


    public function index()
    {
$user = Auth::user();

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour passer une commande.');
        }
        
        $categories = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->take(11)->get();
        return view('frontend.pages.checkout', compact('categories', 'user'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour passer une commande.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'pays' => 'required|string',
            'phone01' => 'required|string',
            'phone02' => 'nullable|string',
            'email' => 'required|email',
            'order_notes' => 'nullable|string',
            'store_id' => 'required',
        ], [
            'name.required' => 'Le champ "Nom et Prénoms" est obligatoire.',
            'name.string' => 'Le champ "Nom et Prénoms" doit être une chaîne de caractères.',
            'name.max' => 'Le champ "Nom et Prénoms" ne doit pas dépasser 255 caractères.',
        
            'pays.required' => 'Le pays est obligatoire.',
            'pays.string' => 'Le pays doit être une chaîne de caractères valide.',
        
            'phone01.required' => 'Le champ "Téléphone 01" est obligatoire.',
            'phone01.string' => 'Le numéro de téléphone doit être valide.',
        
            'phone02.string' => 'Le champ "Téléphone 02" doit être valide.',
        
            'email.required' => 'Le champ "Email" est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
        
            'order_notes.string' => 'Les notes de commande doivent être sous forme de texte.',
        
            'store_id.required' => 'Le champ "store_id" est obligatoire.',
        ]);
        
        
        $cartItems = session('cart', []);
        $subtotal = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantite']);
        
        // Créer la commande
        $order = Order::create([
            ...$validatedData,
            'total_price' => $subtotal,
            'user_id' => Auth::user()->id,  
            'order_number' => 'WURAS-' . strtoupper(Str::random(8)),  // Génère un numéro de commande aléatoire
            'status' => 'pending',  
            //'store_id' => 

        ]);
        
        // Ajouter les détails des articles
        foreach ($cartItems as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'article_id' => $item['id'],
                'quantity' => $item['quantite'],
                'unit_price' => $item['price'],
                'subtotal' => $item['price'] * $item['quantite'],
                    
            ]);
        }

        // Chercher l'email de l'utilisateur lié à la commande
        $user = User::find($order->user_id); // Trouver l'utilisateur par son ID
        $userEmail = $user->email; // Récupérer l'email de l'utilisateur

        // Envoyer l'email au client
        Mail::to($userEmail)->send(new OrderConfirmationMail($order, $cartItems));
        
        // Vider le panier après commande
        session()->forget('cart');
        
        return redirect()->route('order.success', ['orderId' => $order->id])->with('success', 'Commande enregistrée avec succès !');
    
    }

    public function success($orderId)
    {
        // Charger les catégories avec les articles et tags associés
        $categories = Category::with('articles.tags')->get();
    
        // Récupérer la commande et les informations nécessaires
        $order = Order::with(['orderDetails.article', 'user',])->findOrFail($orderId);
    
        // Retourner la vue avec les données
        return view('frontend.pages.order-success', compact('categories', 'order')); 
    }
    

    public function show($id)
    {
        $categories = Category::with('articles.tags')->get();

        // Récupérer la commande avec son ID, y compris ses détails
        $order = Order::with('orderDetails')->findOrFail($id);

        // Retourner la vue avec les informations de la commande
        return view('frontend.pages.account.order-details2', compact('order', 'categories'));
    }

    public function showReceipt($orderId)
    {
        // Récupérer la commande, les détails et les informations nécessaires
        $order = Order::with(['orderDetails.article', 'user',])->findOrFail($orderId);

        return view('frontend.receipt', compact('order'));
    }

    public function generateReceiptPDF($orderId)
    {
        $categories = Category::with('articles.tags')->get();

        $order = Order::with(['orderDetails.article', 'user',])->findOrFail($orderId);

        $pdf = PDF::loadView('frontend.pages.account.order-details', compact('order', 'categories'));
        return $pdf->download('receipt-' . $order->id . '.pdf');
    }

    public function downloadReceipt($orderId)
    {
        $categories = Category::with('articles.tags')->get();

        // $order = Order::with(['orderDetails.article.user'])->findOrFail($orderId);
        $order = Order::with(['orderDetails.article', 'user'])->findOrFail($orderId);

        // Générer le PDF avec les données de la commande
        $pdf = PDF::loadView('frontend.pages.account.order-details', compact('order', 'categories'));

        // Retourner le PDF pour téléchargement
        return $pdf->download('receipt_' . $orderId . '.pdf');
    }

}



