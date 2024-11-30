<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {

        // Validation des données
        $validatedData = $request->validate([
            'tag_name' => 'required|string|max:255|unique:categories,name',
            'tag_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'tag_name.required' => 'Le nom de la catégorie est obligatoire.',
            'tag_name.unique' => 'Cette catégorie existe déjà.',
            'tag_thumbnail.image' => 'Le fichier doit être une image.',
            'tag_thumbnail.mimes' => 'Seules les extensions JPEG, PNG, et JPG sont autorisées.',
            'tag_thumbnail.max' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',
        ]);

        // Gestion de l'image
        $imagePath = null;
        if ($request->hasFile('tag_thumbnail')) {
            $imagePath = $request->file('tag_thumbnail')->store('images/tags', 'public');
        }

        // Enregistrement de la catégorie
        Tag::create([
            'tag_name' => $validatedData['tag_name'],
            'tag_thumbnail' => $imagePath,
        ]);


        return redirect()->route('admin.articles.create')->with('success', 'Catégorie ajoutée avec succès !');
        
    }
}
