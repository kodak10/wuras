<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Article;
use App\Models\Image;
use App\Models\Variation;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    // public function index()
    // {
    //     $products = Article::all();
    //     return view('product.index', compact('products'));
    // }


    public function create()
    {
        $demos = Article::with('images')->get(); // Récupère l'article avec ses images

        $categories = Category::all();
        $tags = Tag::all();
        $article = new Article(); 

        return view('backend.pages.products.create', compact('categories', 'tags', 'article', 'demos'));
    }


    public function store(Request $request)
{
    // dd($request);
    $validated = $request->validate([
        'name' => 'required|unique:articles|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'discount_type' => 'nullable|string',
        // 'discount_value' => 'nullable|numeric',
        'discount_value' => 'nullable|numeric|required_if:discount_type,percentage|required_if:discount_type,fixed',

        'status' => 'required|in:published,draft,inactive', 
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'couverture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        'categories' => 'required|array',  // Validation pour les catégories
        'categories.*' => 'exists:categories,id', // Vérifier que chaque catégorie existe

        'tag_name' => 'nullable|string|max:255',
        'tags' => 'nullable|array', // Assurez-vous que les tags sont envoyés sous forme de tableau
        'tags.*' => 'exists:tags,id', // Chaque tag doit exister dans la table tags
    ], [
        'name.required' => 'Le nom de l\'article est requis.',
        'name.unique' => 'Un article avec ce nom existe déjà.',
        'name.string' => 'Le nom de l\'article doit être une chaîne de caractères.',
        'name.max' => 'Le nom de l\'article ne peut pas dépasser 255 caractères.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'price.required' => 'Le prix est requis.',
        'price.numeric' => 'Le prix doit être un nombre.',
        'discount_type.string' => 'Le type de réduction doit être une chaîne de caractères.',
        'discount_value.numeric' => 'La valeur de la réduction doit être un nombre.',
        'discount_value.required_if' => 'La valeur de réduction est requise pour ce type de remise.',

        'images.*.nullable' => 'Les images sont optionnelles.',
        'images.*.image' => 'Les fichiers doivent être des images (JPEG, PNG, JPG).',
        'images.*.mimes' => 'Les images doivent être au format JPEG, PNG ou JPG.',
        'images.*.max' => 'Les images ne peuvent pas dépasser 2 Mo.',
        'couverture.nullable' => 'L\'image de couverture est optionnelle.',
        'couverture.image' => 'L\'image de couverture doit être une image (JPEG, PNG, JPG).',
        'couverture.mimes' => 'L\'image de couverture doit être au format JPEG, PNG ou JPG.',
        'couverture.max' => 'L\'image de couverture ne peut pas dépasser 2 Mo.',
        'status.required' => 'Le statut de l\'article est requis.',
        'status.in' => 'Le statut doit être l\'un des suivants : publié, brouillon ou inactif.',

        'categories.required' => 'Le catégorie de l\'article est requis.',
        'tags.required' => 'Le tags de l\'article est requis.',

    ]);

    try {
        // Créer un nouvel article
        $article = new Article();
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->price = $request->input('price');
        $article->discount_type = $request->input('discount_type');
        $article->discount_value = $request->input('discount_value');
        $article->quantite = $request->input('quantite');

        $article->status = $request->input('status');

        $article->save();

        // Attacher les catégories à l'article
        $article->categories()->attach($request->input('categories'));

         // Attacher les tags à l'article
        if ($request->has('tags')) {
            $article->tags()->attach($validated['tags']);
        }

        // Enregistrer les variations
        if ($request->has('variations')) {
            foreach ($request->input('variations') as $variation) {
                Variation::create([
                    'article_id' => $article->id,
                    'type' => $variation['type'],
                    'value' => $variation['value'],
                ]);
            }
        }

        if ($request->hasFile('couverture')) {
            $couverture = $request->file('couverture');
            $couvertureName = $article->id . '_couverture.' . $couverture->getClientOriginalExtension();

            $couverturePath = $couverture->storeAs('images/articles/couverture', $couvertureName, 'public');
            
            $article->couverture = 'images/articles/couverture/' . $couvertureName;
            $article->save();
        }        

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Générer un nom unique pour chaque image
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                
                // Utilisez storeAs pour spécifier le nom du fichier et son emplacement
                $imagePath = $image->storeAs('images/articles', $imageName, 'public');
                
                DB::table('product_image')->insert([
                    'article_id' => $article->id,
                    'image_path' => 'storage/images/articles/' . $imageName, // Enregistrez le chemin relatif dans la base de données
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } else {
            return redirect()->back()->with('error', 'Aucune image n\'a été envoyée.');
        }

        return redirect()->route('admin.articles.create')->with('success', 'Article créé avec succès!');

    } catch (\Exception $e) {
        return response()->json(['error' => 'Une erreur est survenue : ' . $e->getMessage()], 500);
    }
}



 
// affiche des images

// Pour l'image de couverture :
// Si l'image de couverture est stockée avec le chemin storage/images/articles/couverture/1_couverture.jpg, vous pouvez l'afficher dans votre vue Blade comme suit :

// <img src="{{ asset('storage/images/articles/couverture/' . $article->couverture) }}" alt="Image de couverture">
// Cela génère une URL comme http://votre-site.com/storage/images/articles/couverture/1_couverture.jpg.

// Pour les images multiples :
// Si les images multiples sont stockées dans la table pivot avec un chemin relatif comme storage/images/articles/image_1.jpg, vous pouvez également les afficher de la même manière :

// @foreach($article->images as $image)
//     <img src="{{ asset($image->image_path) }}" alt="Image de l'article">
// @endforeach

}
