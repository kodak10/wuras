<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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

    public function StockArticle()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();


       
        $articles = Article::where('quantite', '<=', DB::raw('limit_quantite'))->orderBy('quantite', 'asc')->get();

       

        return view('backend.pages.stocks.index', compact('articles', 'lowStockProducts'));
    } 

    public function EditStockArticle ($id)
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        // Récupérer l'article à modifier
        $article = Article::with('categories','tags', 'images')->findOrFail($id);
        $categories = Category::all(); // Récupérer toutes les catégories


        // Passer les données à la vue
        return view('backend.pages.stocks.edit', compact('article', 'categories', 'lowStockProducts'));
    }


    public function Stockupdate(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // Validation des données du formulaire
        $validated = $request->validate([
            'quantite' => 'required|integer|min:1',
        ]);
        
        // Mettre à jour les données de l'article
        $article->update([
            'quantite' => $request->quantite,
            'limit_quantite' => $request->limit_quantite,

        ]);

        // Retourner à la liste des articles avec un message de succès
        return redirect()->route('admin.stock.index')->with('success', 'Stock mis à jour avec succès!');
    }
}
