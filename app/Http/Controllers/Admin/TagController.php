<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données
        $validated = $request->validate([
            'tag_name' => 'required|string|max:255|unique:tags', 
            'tag_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ], [
            'tag_name.required' => 'Le nom du tag est requis.',
            'tag_name.unique' => 'Ce tag existe déjà.',
            'tag_name.string' => 'Le nom du tag doit être une chaîne de caractères.',
            'tag_name.max' => 'Le nom du tag ne peut pas dépasser 255 caractères.',
            'tag_thumbnail.image' => 'Le fichier doit être une image.',
            'tag_thumbnail.mimes' => 'Seules les extensions JPEG, PNG, et JPG sont autorisées.',
            'tag_thumbnail.max' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',
        ]);

        try {
             // Gestion de l'image
            $imagePath = null;
            if ($request->hasFile('tag_thumbnail')) {
                $imagePath = $request->file('tag_thumbnail')->store('images/tags', 'public');
            }

            // Créer le tag
            $tag = new Tag();
            $tag->tag_name = $validated['tag_name'];
            $tag->tag_thumbnail = $validated['tag_thumbnail'];
            $tag->save();

            return redirect()->route('tags.create')->with('success', 'Tag créé avec succès!');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }
}
