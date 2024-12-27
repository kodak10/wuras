<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use RealRashid\SweetAlert\Facades\Alert;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les articles ayant une promotion active
        $articles = Article::whereHas('promotions', function ($query) {
            $query->where('start_date', '<=', now())
                ->where('end_date', '>=', now());
        })->with(['categories', 'tags', 'promotions'])->get();

        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

    if ($lowStockProducts->isNotEmpty()) {
        // Créer un message contenant les noms des produits en faible stock
        $productNames = $lowStockProducts->pluck('name')->implode(', ');

        // Afficher un message d'alerte avec les noms des produits
        Alert::warning('Attention', 'Les produits suivants sont en faible stock: ' . $productNames);
    }

        return view('backend.pages.marketing.index', compact('articles', 'lowStockProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

    if ($lowStockProducts->isNotEmpty()) {
        // Créer un message contenant les noms des produits en faible stock
        $productNames = $lowStockProducts->pluck('name')->implode(', ');

        // Afficher un message d'alerte avec les noms des produits
        Alert::warning('Attention', 'Les produits suivants sont en faible stock: ' . $productNames);
    }

        return view('backend.pages.marketing.create', compact('lowStockProducts'));
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
