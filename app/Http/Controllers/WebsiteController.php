<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 'published')->get();

        $categories = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->take(11)->get();

        $tags = Tag::get();

        $article_ordinateurs = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Ordinateurs')->get();

        $ecrans = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Moniteurs et écrans')->get();

        $imprimantesEtScanners = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Imprimantes et scanners')->get();

        $sourisEtClaviers = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Souris et claviers')->get();

        $disquesDurs = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Disques Durs et Stockage')->get();

        $cablesAdaptateurs = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Câbles et adaptateurs')->get();

        $batteriesChargeurs = Category::with(['articles' => function ($query) {
            $query->where('status', 'published');
        }])->where('name', 'Batteries et chargeurs')->get();

        return view('frontend.pages.index', compact('categories', 'articles', 'tags', 'article_ordinateurs', 'ecrans', 'imprimantesEtScanners', 'sourisEtClaviers', 'disquesDurs', 'cablesAdaptateurs', 'batteriesChargeurs'));
    }

    public function shop(Request $request)
    {
        $tags = Tag::get();

        // Appliquer le filtre 'status = published' aux articles de chaque catégorie
        $categories = Category::with(['articles' => function ($query) {
            $query->where('status', 'published'); // Filtre les articles publiés
        }, 'articles.tags'])->get();

        // Récupération des plages de prix et de la catégorie sélectionnée
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');
        $categoryId = $request->get('category'); // ID de la catégorie sélectionnée

        // Application des filtres
        $query = Article::where('status', 'published'); // Filtre les articles publiés

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($categoryId) {
            $query->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('categories.id', $categoryId); // Filtre par la catégorie sélectionnée
            });
        }

        // Pagination des articles filtrés
        $categories_shops = $query->paginate(12);

        return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops', 'categoryId'));
    }

    public function show($slug)
    {
        $categories = Category::with('articles.tags')->get();

        $article = Article::with('categories', 'tags', 'images')->where('slug', $slug)->firstOrFail();

        if ($article->categories->isEmpty()) {
            return view('shop.article', compact('article'))->with('message', 'Aucune catégorie associée à cet article.');
        }

        return view('frontend.pages.articles_details', compact('article', 'categories'));
    }


}
