<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StoreController extends Controller
{
    
    // public function manageOrders(Store $store)
    // {
    //     if (!Auth::user()->can('manage orders')) {
    //         abort(403, 'Unauthorized');
    //     }
        

    //     // Gérer les commandes du magasin
    // }

    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $stores = Store::all();
        return view('backend.pages.stores.index', compact('stores', 'lowStockProducts'));
    }


    public function edit($id)
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $store = Store::findOrFail($id);
        return view('backend.pages.stores.edit', compact('store', 'lowStockProducts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $store = Store::findOrFail($id);
        $store->update($request->all());

        return redirect()->route('admin.stores.index')->with('success', 'Magasin mis à jour avec succès !');
    }

    public function destroy($id)
    {
        $store = Store::findOrFail($id);
        $store->delete();

        return redirect()->route('admin.stores.index')->with('success', 'Magasin supprimé avec succès !');
    }

}
