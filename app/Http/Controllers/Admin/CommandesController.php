<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Category;
use App\Notifications\ItemAvailableNotification;



class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        //$order = Order::with('orderDetails')->findOrFail($id);
        $commandes = Order::with('orderDetails')->orderBy('created_at', 'desc')->get();
       

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

        // dd($request->all());

        $articleIds = $request->input('article_id'); // Un tableau d'IDs d'articles
        $quantites = $request->input('quantite'); // Un tableau des quantités
    
       // Vérifier que les deux sont des tableaux avant d'appeler count()
        if (!is_array($articleIds) || !is_array($quantites)) {
            return back()->withErrors(['message' => 'Les données envoyées ne sont pas valides.']);
        }

        // Assurez-vous que la longueur des deux tableaux est la même
        if(count($articleIds) != count($quantites)) {
            return back()->withErrors(['message' => 'Le nombre d\'articles et de quantités ne correspond pas.']);
        }
       // Traitez chaque article et mettez à jour sa quantité
        foreach ($articleIds as $index => $articleId) {
            // Trouver l'article correspondant
            $article = Article::find($articleId);

            // Vérifiez si l'article existe avant d'essayer de le mettre à jour
            // if ($article) {
            //     // Mettez à jour la quantité de l'article (en fonction de la logique de votre application)
            //     $newQuantite = $article->quantite - $quantites[$index]; // Ou toute autre logique pour mettre à jour la quantité
            //     $article->quantite = max($newQuantite, 0); // Assurez-vous que la quantité ne devienne pas négative
            //     // dd($article->quantite);
            //     $article->save(); // Sauvegardez l'article
            // } else {
            //     return back()->withErrors(['message' => 'Article introuvable.']);
            // }
            if ($article) {
                // Calcul de la nouvelle quantité
                $newQuantite = $article->quantite - $quantites[$index];
                
                // Vérifier si la nouvelle quantité serait négative
                if ($newQuantite < 0) {
                    return back()->withErrors(['message' => 'La quantité de l\'article ' . $article->name . ' ne peut pas être négative. Pensez à <a href="' . route('admin.edit.stock.article', ['id' => $article->id]) . '">approvisionner le stock ici</a>.']);
                }
            
                // Mettez à jour la quantité de l'article
                $article->quantite = $newQuantite;
                $article->save(); // Sauvegardez l'article
            } else {
                return back()->withErrors(['message' => 'Article introuvable.']);
            }
            
        }

        $Order->update([
            'status' => $request->status,
            'admin_id' => $request->admin_id,

        ]);      

        // Envoyer la notification à l'utilisateur si la commande est disponible
        if ($request->status === 'available') {
            $Order->user->notify(new ItemAvailableNotification($Order));
        }

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
