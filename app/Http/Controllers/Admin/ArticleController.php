<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Article;

use App\Models\Category;
use App\Models\Image;
use App\Models\ProductImage;
use App\Models\Promotion;
use App\Models\Tag;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ArticleController extends Controller
{

    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();


        $articles = Article::with(['categories', 'tags'])
        ->orderBy('created_at', 'desc')  // Trie les articles par la date de création, du plus récent au plus ancien
        ->get();  // Limite à 10 articles par page

       

        return view('backend.pages.products.index', compact('articles', 'lowStockProducts'));
    }


    public function create()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $demos = Article::with('images')->get(); // Récupère l'article avec ses images

        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('tag_name', 'asc')->get();

        $article = new Article(); 

        return view('backend.pages.products.create', compact('categories', 'tags', 'article', 'demos', 'lowStockProducts'));
    }


    public function store(Request $request)
{
    // dd($request);
    $validated = $request->validate([
        'name' => 'required|unique:articles|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'is_promotion' => 'nullable|boolean',  // Si la promotion est activée ou non
        'promotion_type' => 'nullable|in:none,percentage,fixed',  // Types de promotion possibles
        'promotion_value' => 'nullable|numeric|min:0',  // La valeur de la promotion
        'promotion_start' => 'nullable|date|before_or_equal:promotion_end',  // Date de début, doit être avant ou égale à la date de fin
        'promotion_end' => 'nullable|date|after_or_equal:promotion_start',  // Date de fin, doit être après ou égale à la date de début

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

        'promotion_type.in' => 'Le type de promotion doit être "none", "percentage" ou "fixed".',
        'promotion_value.numeric' => 'La valeur de la promotion doit être un nombre.',
        'promotion_value.min' => 'La valeur de la promotion doit être positive.',
        'promotion_start.date' => 'La date de début de la promotion doit être une date valide.',
        'promotion_start.before_or_equal' => 'La date de début doit être antérieure ou égale à la date de fin.',
        'promotion_end.date' => 'La date de fin de la promotion doit être une date valide.',
        'promotion_end.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
   
    ]);


    try {
        // Créer un nouvel article
        $article = new Article();
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->price = $request->input('price');
        $article->quantite = $request->input('quantite');
        $article->limit_quantite = $request->input('limit_quantite');

        $article->status = $request->input('status');

        $article->is_promotion = $request->input('is_promotion', false); // Valeur par défaut false si non fourni
        $article->promotion_type = $request->input('promotion_type');
        $article->promotion_value = $request->input('promotion_value', 0); // Valeur par défaut 0 si non fourni
        $article->promotion_start = $request->input('promotion_start');
        $article->promotion_end = $request->input('promotion_end');

        $article->slug = Str::slug($article->name, '-');

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

        return redirect()->route('admin.articles.create')->with('success', 'Article mis à jour avec succès!');

    } catch (\Exception $e) {
        return response()->json(['error' => 'Une erreur est survenue : ' . $e->getMessage()], 500);
    }
}

// public function destroy($id)
// {
//     // Trouver l'article par son ID
//     $article = Article::findOrFail($id);

//     // Supprimer l'article
//     $article->delete();
    

//     // Rediriger avec un message de succès
//     return redirect()->route('admin.articles.index')->with('success', 'L\'article a été supprimé avec succès.');
// }

public function edit($id)
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        // Récupérer l'article à modifier
        $article = Article::with('categories','tags', 'images')->findOrFail($id);
        $categories = Category::all(); // Récupérer toutes les catégories
        $tags = Tag::all(); // Récupérer tous les tags disponibles

        $images = ProductImage::where('article_id', $id)->get();

        // Passer les données à la vue
        return view('backend.pages.products.edit', compact('article', 'categories', 'tags', 'images', 'lowStockProducts'));
    }

    // Mettre à jour un article
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // Validation des données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'status' => 'required|in:published,draft,inactive', 
            // 'quantite' => 'required|integer|min:1',
            // 'limit_quantite' => 'required|integer|min:1',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id', // Validation des catégories
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id', // Validation des tags
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image

            'is_promotion' => 'boolean', // Promotion activée ou non
            'promotion_type' => 'nullable|in:percentage,fixed', // Type de remise
            'promotion_value' => 'nullable|numeric|min:0', // Valeur de la remise
            'promotion_start' => 'nullable|date|after_or_equal:today', // Date de début de promotion
            'promotion_end' => 'nullable|date|after:promotion_start', // Date de fin de promotion
        ], [
            'name.required' => 'Le nom de l\'article est requis.',
            'name.unique' => 'Un article avec ce nom existe déjà.',
            'name.string' => 'Le nom de l\'article doit être une chaîne de caractères.',
            'name.max' => 'Le nom de l\'article ne peut pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'price.required' => 'Le prix est requis.',
            'price.numeric' => 'Le prix doit être un nombre.',
    
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
    
            'promotion_type.in' => 'Le type de promotion doit être "none", "percentage" ou "fixed".',
            'promotion_value.numeric' => 'La valeur de la promotion doit être un nombre.',
            'promotion_value.min' => 'La valeur de la promotion doit être positive.',
            'promotion_start.date' => 'La date de début de la promotion doit être une date valide.',
            'promotion_start.before_or_equal' => 'La date de début doit être antérieure ou égale à la date de fin.',
            'promotion_end.date' => 'La date de fin de la promotion doit être une date valide.',
            'promotion_end.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
       
    
        ]);
        
        $isPromotion = $request->has('is_promotion') ? 1 : 0;


        // Mettre à jour les données de l'article
        $article->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'price' => $request->price,
            // 'quantite' => $request->quantite,
            // 'limit_quantite' => $request->limit_quantite,
            'status' => $request->status,
            'is_promotion' => 1, // Gestion de la promotion
            'promotion_type' => $request->promotion_type,
            'promotion_value' => $request->promotion_value,
            'promotion_start' => $request->promotion_start,
            'promotion_end' => $request->promotion_end,

        ]);


        // dd($validated);

        // Mise à jour des données de l'article
        

        // Si une nouvelle image est téléchargée
        if ($request->hasFile('couverture')) {
            // Vérifiez si une image de couverture existe déjà et la supprimer si nécessaire
            if ($article->couverture && Storage::exists('public/' . $article->couverture)) {
                Storage::delete('public/' . $article->couverture);
            }
        
            // Générer un nom unique pour la nouvelle image de couverture
            $imageName = uniqid() . '.' . $request->file('couverture')->getClientOriginalExtension();
        
            // Télécharger la nouvelle image et enregistrer son chemin
            $imagePath = $request->file('couverture')->storeAs('images/articles', $imageName, 'public');
        
            // Mettre à jour l'attribut de l'article avec le nouveau chemin
            $article->couverture = 'images/articles/' . $imageName;
            // dd($article->couverture);
        }

        // Gestion des autres images supplémentaires
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Générer un nom unique pour chaque image
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                // Stocker l'image
                $imagePath = $image->storeAs('images/articles', $imageName, 'public');
                
                // Enregistrer l'image dans la table pivot 'product_image'
                DB::table('product_image')->insert([
                    'article_id' => $article->id,
                    'image_path' => 'storage/images/articles/' . $imageName,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        

        // Mettre à jour les catégories associées
        $article->categories()->sync($request->categories);

        // Mettre à jour les tags associés
        $article->tags()->sync($request->tags); // Synchroniser les tags

        // Enregistrer l'article mis à jour
        $article->save();

        // Retourner à la liste des articles avec un message de succès
        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour avec succès!');
    }

    public function destroyImage($id)
    {

        // Trouver l'image par son ID
        $image = ProductImage::findOrFail($id);
    
        dd($image);

        // Supprimer l'image du stockage
        if (file_exists(public_path($image->image_path))) {
            unlink(public_path($image->image_path)); // Supprimer l'image du répertoire
        }
    
        // Supprimer l'image de la base de données
        $image->delete();
    
        // Rediriger vers la page précédente avec un message de succès
        return back()->with('success', 'Image supprimée avec succès.');
    }
    


    public function promotion($id)
    {
        // // Récupérer l'article
        // $article = Article::find($id);
    
        // if (!$article) {
        //     return redirect()->back()->with('error', 'Article introuvable.');
        // }
    
        // // Marquer l'article comme en promotion ou gérer la logique de promotion
        // $article->is_promotion = !$article->is_promotion; // Basculer le statut promotion
        // $article->save();
    
        // return redirect()->back()->with('success', "L'article {$article->name} a été mis à jour pour la promotion.");
    
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        // Récupérer l'article à modifier
        $article = Article::with('categories','tags', 'images')->findOrFail($id); // Utilisez 'with' pour charger les catégories associées si nécessaire


        // Passer les données à la vue
        return view('backend.pages.products.promotion', compact('article', 'lowStockProducts'));
    
    }

    public function togglePromotion(Request $request, $articleId)
    {
        $article = Article::findOrFail($articleId);
        $promotionId = $request->input('promotion_id'); // ID de la promotion

        if (!$promotionId) {
            return redirect()->back()->with('error', 'Veuillez sélectionner une promotion.');
        }

        $promotion = Promotion::findOrFail($promotionId);

        if ($article->promotions()->where('promotion_id', $promotionId)->exists()) {
            // Retirer la promotion
            $article->promotions()->detach($promotionId);
            $message = "La promotion a été retirée de l'article.";
        } else {
            // Assigner la promotion
            $article->promotions()->attach($promotionId);
            $message = "La promotion a été ajoutée à l'article.";
        }

        return redirect()->back()->with('success', $message);
    }

    

}
