<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $products = Article::all();
        $magasins = Store::all();

        // Vérifier les produits en-dessous du seuil
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        if ($lowStockProducts->isNotEmpty()) {
            // Créer un message contenant les noms des produits en faible stock
            $productNames = $lowStockProducts->pluck('name')->implode(', ');

            // Afficher un message d'alerte avec les noms des produits
            Alert::warning('Attention', 'Les produits suivants sont en faible stock: ' . $productNames);
        }

        $orders = DB::table('orders')
        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
        ->join('ventes', 'order_details.article_id', '=', 'ventes.article_id')  
        ->join('articles', 'order_details.article_id', '=', 'articles.id') 
        ->select(
            'orders.id as order_id',
            'orders.firstname',
            'orders.lastname',
            'orders.pays',
            'orders.phone01',
            'orders.phone02',
            'orders.email',
            'orders.total_price',
            'order_details.quantity',
            'order_details.unit_price',
            'order_details.subtotal',
            'ventes.total as vente_total',
            'ventes.discount',
            'ventes.price',
            'articles.name as article_name'
        )
        ->get();

        return view('backend.pages.index', compact('products', 'lowStockProducts', 'magasins', 'orders'));
    }

    public function StockArticle()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();


        $store_id = Auth::user()->store_id;
        $articles = Article::where('store_id', $store_id)->orderBy('quantite', 'asc')->get();

       

        return view('backend.pages.stocks.index', compact('articles', 'lowStockProducts'));
    } 

    public function EditStockArticle ($id)
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $article = Article::with('categories','tags', 'images')->findOrFail($id);
        $categories = Category::all(); 

        return view('backend.pages.stocks.edit', compact('article', 'categories', 'lowStockProducts'));
    }


    public function Stockupdate(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'quantite' => 'required|integer|min:1',
        ]);
        
        $article->update([
            'quantite' => $request->quantite,
            'limit_quantite' => $request->limit_quantite,

        ]);

        return redirect()->route('admin.stock.index')->with('success', 'Stock mis à jour avec succès!');
    }
}
