<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        $categories = Category::with('articles.tags')->get();
        
        $orders = Auth::user()->orders()->latest()->get();

        foreach ($orders as $order) {
            $order->total = $order->orderDetails->sum(function ($detail) {
                return $detail->price * $detail->quantity;
            });
        }


        return view('frontend.pages.account.index', compact('categories', 'orders', 'user'));
    }

    
}
