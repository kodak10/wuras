<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function index()
{
    // Récupérer tous les produits
    $products = Article::all();

    // Vérifier les produits en-dessous du seuil
    //$lowStockProducts = Article::where('quantite', '<=', 'limit_quantite')->get();
    $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

    if ($lowStockProducts->isNotEmpty()) {
        // Créer un message contenant les noms des produits en faible stock
        $productNames = $lowStockProducts->pluck('name')->implode(', ');

        // Afficher un message d'alerte avec les noms des produits
        Alert::warning('Attention', 'Les produits suivants sont en faible stock: ' . $productNames);
    }


    // Passer les données à la vue
    return view('backend.pages.index', compact('products', 'lowStockProducts'));
}
}
