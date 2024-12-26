<?php

namespace App\Http\Controllers;
use App\Models\Order; // Modèle de commande
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;


class OrderController extends Controller
{

    public function index()
    {
        $categories = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->take(11)->get();
        return view('frontend.pages.checkout', compact('categories'));
    }

    public function store(Request $request)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour passer une commande.');
        }

        // Récupérer les informations du panier
        $cartItems = session('cart', []);
        $total = session('total', 0);

        // Crée une nouvelle commande pour l'utilisateur connecté
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'En attente', // Statut initial de la commande
            'shipping_address' => 'test',//$request->shipping_address, // Adresse de livraison
            'shipping_method' => 'wave'//$request->shipping_method, // Méthode de livraison
        ]);

        // Ajouter les produits de la commande à une table de commande_details
        foreach ($cartItems as $product_id => $details) {
            $order->orderDetails()->create([
                'article_id' => $product_id,
                'quantity' => $details['quantite'],
                'price' => $details['price'],
                'subtotal' => $details['price'] * $details['quantite'],
            ]);
        }

        // Vider le panier
        session()->forget('cart');
        session()->forget('total');

        // Rediriger l'utilisateur avec un message de succès
        return redirect()->back()->with('success', 'Commande passée avec succès!');
        
    }

    public function show($id)
    {
        $categories = Category::with('articles.tags')->get();

        // Récupérer la commande avec son ID, y compris ses détails
        $order = Order::with('orderDetails')->findOrFail($id);

        // Retourner la vue avec les informations de la commande
        return view('frontend.pages.account.orders-details', compact('order', 'categories'));
    }
}



