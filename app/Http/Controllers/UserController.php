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
            'phone' => 'required|phone:CI|unique:users,phone,' . $user->id, // "CI" pour Côte d'Ivoire
            'cur_password' => 'nullable|current_password', // Vérifier si l'ancien mot de passe est correct
            'new_password' => 'nullable|string|min:8|confirmed', // Vérifier si le mot de passe est valide
        ]);

        // Mise à jour des informations
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];

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

    public function updateAddress(Request $request)
    {
        $request->validate([
            'commune' => 'required|string',
            'lieu_livraison' => 'required|string',
            'phone01' => 'nullable|string',
            'phone02' => 'nullable|string',
        ]);
        
        $user = Auth::user();
        
        if ($user->address) {
            $user->address->update([
                'commune' => $request->commune,
                'lieu_livraison' => $request->lieu_livraison, // Correction de l'espace en trop
                'phone01' => $request->phone01,
                'phone02' => $request->phone01,
                'email' => Auth::user()->email,
            ]);
        } else {
            $user->address()->create([
                'commune' => $request->commune,
                'lieu_livraison' => $request->lieu_livraison,
                'phone01' => $request->phone01,
                'phone02' => $request->phone02,
                'user_id' => $user->id, // Correction Auth::id() reste correct, mais plus clair avec $user->id
                'email' => Auth::user()->email,
            ]);
        }
        

        return redirect()->back()->with('success', 'Les informations ont été mises à jour avec succès.');

    }

}
