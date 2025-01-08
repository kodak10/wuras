<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;



class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();


        //$order = Order::with('orderDetails')->findOrFail($id);
        $commandes = Order::with('orderDetails')->get();

//        $commandes = Order::orderBy('created_at', 'desc')  // Trie les articles par la date de création, du plus récent au plus ancien
        //->get();  // Limite à 10 articles par page

       

        return view('backend.pages.commandes.index', compact('commandes', 'lowStockProducts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $categories = Category::with('articles.tags')->get();
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        // Récupérer la commande avec son ID, y compris ses détails
        $commande = Order::with(['orderDetails.article', 'user'])->findOrFail($id);
        //$order = Order::with(['orderDetails.article', 'user'])->findOrFail($orderId);


        // Retourner la vue avec les informations de la commande
        return view('backend.pages.commandes.edit', compact('commande', 'categories', 'lowStockProducts'));
    }

    

    /**
     * Update the specified resource in storage.
     */
  

    public function update(Request $request, $id)
    {
        // dd($request->all());  // Affiche toutes les données reçues

        $Order = Order::findOrFail($id);

        // Validation des données du formulaire
        $validated = $request->validate([
            'status' => 'required|string|max:255',
            'admin_id' => 'required|string|max:255',

        ]);
        $Order->update([
            'status' => $request->status,
            'admin_id' => $request->admin_id,

        ]);      

        return redirect()->route('admin.commandes.index')->with('success', 'Commandes mise à jour avec succès!');
    }

   


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
