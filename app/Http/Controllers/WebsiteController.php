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
        $article_ordinateurs = Category::with('articles.tags')->where('name', 'Ordinateur') ->get();
        $article_fournitures = Category::with('articles.tags')->where('name', 'Fourniture de bureau') ->get();
        $article_smartphones = Category::with('articles.tags')->where('name', 'Fourniture de bureau') ->get();


        return view('frontend.pages.index', compact('categories', 'articles', 'tags', 'article_ordinateurs', 'article_fournitures', 'article_smartphones'));
    }

    public function shop()
    {
        $tags = Tag::get();
        $categories = Category::with('articles.tags')->get();
        $articles = Article::where('status', 'published')->paginate(12);
        //$categories_shops = Category::with('articles')->paginate(12);
        //$categories_shops = Article::with('categories.product_image')->where('status', 'published')->paginate(12);
        $categories_shops = Article::with('categories.articles.images')->where('status', 'published')->paginate(12);

        return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops', 'articles'));
    }

}
