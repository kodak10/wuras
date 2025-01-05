<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Support\Str;
use App\Mail\VerificationCode;

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

        $article_imprimantesScanners = Article::where('status', 'published') // Articles publiés
    ->whereHas('categories', function ($query) {
        $query->where('name', 'Imprimantes et scanners'); // Vérifie que la catégorie est "Imprimantes et scanners"
    })
    ->with(['categories']) // Charge la relation categories
    ->orderBy('created_at', 'desc') // Trie par date de création
    ->take(12) // Limite à 12 articles
    ->get() // Récupère les articles
    ->chunk(2); // Regroupe les articles par 2



        
        // $article_imprimantesScanners = Article::where('status', 'published') // Articles publiés
        // ->whereHas('tags', function ($query) {
        //     $query->where('tag_name', 'Ordinateur Portable'); // Vérifie que le tag est "Ordinateur portable"
        // })
        // ->with(['categories', 'tags']) // Charge les relations categories et tags
        // ->orderBy('created_at', 'desc') // Trie les articles par date de création
        // ->get()
        // ->chunk(2);


        // $articlesGrouped = Article::where('status', 'published')
                        
        //                         ->with(['categories', 'tags']) // Charge les relations categories et tags

        //                   //->take(11)
        //                   ->get()
        //                   ->chunk(2);

                          $articlesGroupedPortable = Article::where('status', 'published') // Articles publiés
    ->whereHas('tags', function ($query) {
        $query->where('tag_name', 'Ordinateur Portable'); // Vérifie que le tag est "Ordinateur portable"
    })
    ->with(['categories', 'tags']) // Charge les relations categories et tags
    ->orderBy('created_at', 'desc') // Trie par date de création
    ->take(12)
    ->get()
    ->chunk(2); // Regroupe les articles par 2


    $articlesGroupedBureau = Article::where('status', 'published') // Articles publiés
    ->whereHas('tags', function ($query) {
        $query->where('tag_name', 'Ordinateur Bureau'); // Vérifie que le tag est "Ordinateur portable"
    })
    ->with(['categories', 'tags']) // Charge les relations categories et tags
    ->orderBy('created_at', 'desc') // Trie par date de création
    ->take(12)
    ->get()
    ->chunk(2); // Regroupe les articles par 2


    $articlesGroupedComplet = Article::where('status', 'published') // Articles publiés
    ->whereHas('tags', function ($query) {
        $query->where('tag_name', 'Ordinateur Complet'); // Vérifie que le tag est "Ordinateur portable"
    })
    ->with(['categories', 'tags']) // Charge les relations categories et tags
    ->orderBy('created_at', 'desc') // Trie par date de création
    ->take(12)
    ->get()
    ->chunk(2); // Regroupe les articles par 2

    $ecrans = Article::where('status', 'published') // Articles publiés
    ->whereHas('categories', function ($query) {
        $query->where('name', 'Moniteurs et écrans'); // Vérifie que la catégorie est "Imprimantes et scanners"
    })
    ->with(['categories', 'tags']) // Charge les relations categories et tags
    ->orderBy('created_at', 'desc') // Trie par date de création
    ->take(12)
    ->get()
    ->chunk(2); // Regroupe les articles par 2




        

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

        $ordinateursPromotion = Category::with(['articles' => function ($query) {
            $query->where('status', 'published')
                  ->where('is_promotion', true); 
        }])
        ->where('name', 'Ordinateurs') 
        ->get();

        $articlePromotion = Category::with(['articles' => function ($query) {
            $query->where('status', 'published')
                  ->where('is_promotion', true); 
        }])
        ->get();
        
        // dd($ordinateursPromotion);


        return view('frontend.pages.index', compact('articlePromotion','categories', 'articles', 'tags', 'ecrans', 'imprimantesEtScanners', 'sourisEtClaviers', 'disquesDurs', 'cablesAdaptateurs', 'batteriesChargeurs', 'articlesGroupedPortable', 'articlesGroupedBureau', 'articlesGroupedComplet', 'article_imprimantesScanners', 'ordinateursPromotion'));
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
        $categoryName = $request->get('category'); // ID de la catégorie sélectionnée
        $search = $request->get('search');


        // Application des filtres
        $query = Article::where('status', 'published'); // Filtre les articles publiés

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($categoryName) {
            $query->whereHas('categories', function ($q) use ($categoryName) {
                $q->where('categories.name', $categoryName); // Filtre par la catégorie sélectionnée
            });
        }

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
        }

        // Pagination des articles filtrés
        $categories_shops = $query->paginate(12);

        return view('frontend.pages.shop', compact('categories', 'tags', 'categories_shops', 'categoryName'));
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

    public function login(){
        return view('frontend.pages.loginRegister');
    }

    public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|unique:users,phone',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => bcrypt($request->password),
    ]);

    // Générer un code de validation
    $verificationCode = Str::random(6); // Génère un code aléatoire à 6 caractères

    // Stocker le code de vérification dans la base de données ou en session
    $user->verification_code = $verificationCode;
    $user->save();

    // Envoyer le code par email
    Mail::to($user->email)->send(new VerificationCode($verificationCode));

    return response()->json(['message' => 'Inscription réussie. Un code de validation a été envoyé à votre email.']);
}

public function verify(Request $request)
{
    $request->validate([
        'verification_code' => 'required|numeric',
    ]);

    $user = User::where('email', $request->email)
                ->where('verification_code', $request->verification_code)
                ->first();

    if ($user) {
        // Le code est valide
        $user->email_verified_at = now();
        $user->save();

        return response()->json(['message' => 'Votre compte a été vérifié avec succès.']);
    }

    return response()->json(['message' => 'Code de vérification invalide.'], 400);
}

public function cart(){
    $categories = Category::with('articles.tags')->get();

     // Récupérer le panier depuis la session
     $cart = Session::get('cart', []);

     // Calculer le total
     $total = 0;
     foreach ($cart as $item) {
         $total += $item['price'] * $item['quantite'];
     }

    return view('frontend.pages.panier', compact('categories', 'cart', 'total'));
}

public function getCartCount()
{
    // Récupérer le panier de la session
    $cart = session()->get('cart', []);

    // Compter le nombre total d'éléments dans le panier
    $cartCount = 0;
    foreach ($cart as $product) {
        $cartCount += $product['quantite'];
    }

    // Retourner le nombre d'éléments au format JSON
    return response()->json([
        'cartCount' => $cartCount
    ]);
}



// Example of adding items to session
public function addToCart(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:articles,id', // Valide si le produit existe dans la base de données
    ]);
    
    $product = Article::find($request->product_id);

    // Si le produit n'existe pas, retourner une erreur JSON
    if (!$product) {
        return response()->json(['error' => 'Produit non trouvé.'], 404);
    }

    // Vérifier si le produit existe déjà dans le panier
    $cart = session()->get('cart', []);
    
    // Si le produit est déjà dans le panier, incrémenter la quantité
    if(isset($cart[$request->product_id])) {
        $cart[$request->product_id]['quantite']++;
    } else {
        // Ajouter le produit dans le panier si ce n'est pas déjà fait
        $cart[$request->product_id] = [
            'id' => $product->id, 
            'name' => $product->name,
            'price' => $product->price,
            'quantite' => 1,
            'couverture' => $product->couverture,
            'slug' => $product->slug,
            'promotion_type' => $product->promotion_type,
            'promotion_value' => $product->promotion_value,


        ];
    }

    // Sauvegarder le panier dans la session
    session()->put('cart', $cart);

    // Retourner une réponse de succès si tout s'est bien passé
    return response()->json(['success' => 'Produit ajouté au panier !']);
}

// public function addToCart(Request $request)
// {
//     $request->validate([
//         'product_id' => 'required|exists:products,id', // Valide si le produit existe dans la base de données
//     ]);
//     // Assuming you're getting the product data from the request
//     $product = Article::find($request->product_id);

//     // Check if the cart already exists in the session
//     $cart = session()->get('cart', []);

//     // If the product is already in the cart, update the quantity
//     if(isset($cart[$request->product_id])) {
//         $cart[$request->product_id]['quantity']++;
//     } else {
//         // If the product is not in the cart, add it
//         $cart[$request->product_id] = [
//             'name' => $product->name,
//             'price' => $product->price,
//             'quantity' => 1,
//             'image' => $product->image
//         ];
//     }

//     // Save the updated cart to the session
//     session()->put('cart', $cart);

//     return redirect()->route('cart.show');
// }


public function updateCart(Request $request)
{
    $cart = session()->get('cart', []);
    
    // Mettre à jour les quantités dans le panier
    foreach ($request->cart as $product_id => $quantity) {
        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantite'] = $quantity; // Mise à jour de la quantité
        }
    }

    // Sauvegarder le panier mis à jour dans la session
    session()->put('cart', $cart);

    // Recalculer le total
    $total = 0;
    foreach ($cart as $details) {
        $total += $details['price'] * $details['quantite']; // Calcul du total
    }

    // Retourner le nouveau total au client
    return response()->json([
        'success' => true,
        'total' => number_format($total, 2) . ' FCFA'
    ]);
}


    public function removeFromCart($product_id)
    {
        // Retirer l'article du panier dans la session
        $cart = session()->get('cart', []);

        if(isset($cart[$product_id])) {
            unset($cart[$product_id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Article supprimé du panier');
    }

    public function clearCart()
    {
        // Vider le panier
        Session::forget('cart');

        return redirect()->route('panier');
    }



}
