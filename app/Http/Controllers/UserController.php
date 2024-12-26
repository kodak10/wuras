<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('frontend.pages.account.index');

    }

    public function updateAccount(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'cur_password' => 'nullable|current_password', // Vérifier si l'ancien mot de passe est correct
            'new_password' => 'nullable|string|min:8|confirmed', // Vérifier si le mot de passe est valide
        ]);

        // Mise à jour des informations
        $user->name = $validatedData['name'];
        
        //$user->email = $validatedData['email'];

        // Mise à jour du mot de passe si fourni
        if ($request->filled('new_password')) {
            $user->password = Hash::make($validatedData['new_password']);
        }

        // Sauvegarder les modifications
        $user->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Les informations ont été mises à jour avec succès.');
    }
}
