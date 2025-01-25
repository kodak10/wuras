<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Ventes;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les ventes avec leurs détails
        // $ventes = Ventes::with('orderDetails.product')->get(); // Assurez-vous que 'orderDetails' et 'product' sont définis dans le modèle Sale
        $ventes = Ventes::all();
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.ventes.index', compact('ventes', 'lowStockProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Article::all();
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.ventes.create', compact('products', 'lowStockProducts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'cart' => 'required|array',
            'total' => 'required|numeric',
        ]);
    
        foreach ($data['cart'] as $item) {
            // Sauvegarder chaque article vendu
            Ventes::create([
                'article_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['total'],
            ]);

            // Déduire la quantité de stock pour chaque article vendu
            $product = Article::find($item['id']); // Trouver l'article en utilisant son ID
            if ($product) {
                // Vérifier si la quantité vendue est disponible en stock
                if ($product->quantity >= $item['quantity']) {
                    $product->quantity -= $item['quantite']; // Déduire la quantité vendue
                    $product->save(); // Sauvegarder les modifications
                } else {
                    return response()->json(['error' => 'Stock insuffisant pour l\'article ' . $product->name], 400);
                }
            }
            }
    
        return response()->json(['message' => 'Vente enregistrée avec succès!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}