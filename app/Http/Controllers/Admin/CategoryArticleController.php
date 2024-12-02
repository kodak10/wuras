<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryArticleController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('categories.index', compact('categories'));
    // }

    // /**
    //  * Afficher le formulaire de création de catégorie.
    //  */
    // public function create()
    // {
    //     return view('categories.create');
    // }

    /**
     * Enregistrer une nouvelle catégorie.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name_categorie' => 'required|string|max:255|unique:categories,name',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name_categorie.required' => 'Le nom de la catégorie est obligatoire.',
            'name_categorie.unique' => 'Cette catégorie existe déjà.',
            'thumbnail.required' => 'L\'image de la catégorie est obligatoire.',
            'thumbnail.image' => 'Le fichier doit être une image.',
            'thumbnail.mimes' => 'Seules les extensions JPEG, PNG, et JPG sont autorisées.',
            'thumbnail.max' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',
        ]);

        // Gestion de l'image
        $imagePath = null;
        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('images/categories', 'public');
        }

        // Enregistrement de la catégorie
        Category::create([
            'name' => $validatedData['name_categorie'],
            'thumbnail' => $imagePath,
        ]);


        return redirect()->route('admin.articles.create')->with('success', 'Catégorie ajoutée avec succès !');
    }

    /**
     * Afficher une catégorie spécifique.
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Afficher le formulaire de modification de la catégorie.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Mettre à jour une catégorie.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($category->image) {
                \Storage::disk('public')->delete($category->image);
            }
            $category->image = $request->file('image')->store('categories', 'public');
        }

        // Mise à jour des données
        $category->update([
            'name' => $validatedData['name'],
            'image' => $category->image,
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès !');
    }

    /**
     * Supprimer une catégorie.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if ($category->image) {
            \Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès !');
    }
}
