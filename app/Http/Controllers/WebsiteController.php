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
        $categories = Category::with('articles.tags')->take(11)->get();
        $tags = Tag::get();
        $article_ordinateurs = Category::with('articles.tags')->where('name', 'Ordinateurs')->get();
        $ecrans = Category::with('articles.tags')->where('name', 'Moniteurs et écrans')->get();
        $imprimantesEtScanners = Category::with('articles.tags')->where('name', 'Imprimantes et scanners')->get();
        

        $sourisEtClaviers = Category::with('articles.tags')->where('name', 'Souris et claviers')->get();
        $disquesDurs = Category::with('articles.tags')->where('name', 'Disques durs et stockage externe')->get();
        $cablesAdaptateurs = Category::with('articles.tags')->where('name', 'Câbles et adaptateurs')->get();
        $batteriesChargeurs = Category::with('articles.tags')->where('name', 'Batteries et chargeurs')->get();

        return view('frontend.pages.index', compact('categories', 'articles', 'tags', 'article_ordinateurs', 'ecrans', 'imprimantesEtScanners', 'sourisEtClaviers', 'disquesDurs', 'cablesAdaptateurs', 'batteriesChargeurs'));
    }

    // public function shop()
    // {
    //     $tags = Tag::get();
    //     $categories = Category::with('articles.tags')->get();
    //     $articles = Article::where('status', 'published')->paginate(12);
    //     //$categories_shops = Category::with('articles')->paginate(12);
    //     //$categories_shops = Article::with('categories.product_image')->where('status', 'published')->paginate(12);
    //     $categories_shops = Article::with('categories.articles.images')->where('status', 'published')->paginate(12);

    //     return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops', 'articles'));
    // }

    // public function shop(Request $request)
    // {
    //     $tags = Tag::get();
    //     $categories = Category::with('articles.tags')->get();

    //     $query = Article::with('categories.articles.images')->where('status', 'published');

    //     // Filtrage par catégorie
    //     if ($request->has('category') && $request->category) {
    //         $query->whereHas('categories', function ($q) use ($request) {
    //             $q->where('name', $request->category);
    //         });
    //     }

    //     // Filtrage par prix
    //     if ($request->has('min_price') && $request->has('max_price')) {
    //         $query->whereBetween('price', [$request->min_price, $request->max_price]);
    //     }

    //     $categories_shops = $query->paginate(12);

    //     return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops'));
    // }

//     public function shop(Request $request)
// {
//     $tags = Tag::get();
//     $categories = Category::with('articles.tags')->get();

//     // Récupération des plages de prix
//     $minPrice = $request->get('min_price');
//     $maxPrice = $request->get('max_price');

//     // Application du filtre
//     $query = Article::where('status', 'published');

//     if ($minPrice) {
//         $query->where('price', '>=', $minPrice);
//     }

//     if ($maxPrice) {
//         $query->where('price', '<=', $maxPrice);
//     }

//     $categories_shops = $query->paginate(12);

//     return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops'));
// }

public function shop(Request $request)
{
    $tags = Tag::get();
    $categories = Category::with('articles.tags')->get();

    // Récupération des plages de prix et de la catégorie sélectionnée
    $minPrice = $request->get('min_price');
    $maxPrice = $request->get('max_price');
    $categoryId = $request->get('category'); // ID de la catégorie sélectionnée

    // Application des filtres
    $query = Article::where('status', 'published');

if ($minPrice) {
    $query->where('price', '>=', $minPrice);
}

if ($maxPrice) {
    $query->where('price', '<=', $maxPrice);
}

if ($categoryId) {
    $query->whereHas('categories', function ($q) use ($categoryId) {
        $q->where('categories.id', $categoryId); // Spécifier 'categories.id'
    });
}

$categories_shops = $query->paginate(12);


    return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops', 'categoryId'));
}




    public function show($slug)
    {
    $categories = Category::with('articles.tags')->get();

    $article = Article::with('categories', 'tags', 'images')->where('slug', $slug)->firstOrFail();

    // Vérifiez si des catégories existent
    if ($article->categories->isEmpty()) {
        // Vous pouvez gérer cette situation ou afficher un message dans la vue
        return view('shop.article', compact('article'))->with('message', 'Aucune catégorie associée à cet article.');
    }


        //$article = Article::with('categories.articles.images')->findOrFail($slug); 
        return view('frontend.pages.articles_details', compact('article', 'categories'));
    }


}
