<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        $users = User::where('role', '!=', 'user')->get();
        return view('backend.pages.users.index', compact('users', 'lowStockProducts'));
    }

    public function create()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.users.create', compact('lowStockProducts'));
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
            'store_id' => 'required',
        ]);
// dd($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'store_id' => $request->store_id,
        ]);

        return redirect()->route('admin.utilisateurs.create')->with('success', 'Utilisateur créé avec succès.');
    }

    // Modifier un utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.users.edit', compact('user', 'lowStockProducts'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
