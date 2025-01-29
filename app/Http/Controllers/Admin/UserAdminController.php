<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserAdminController extends Controller
{
    public function index()
    {

        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();
        $store_id = Auth::user()->store_id;
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', '!=', 'user'); // Récupère les utilisateurs dont le rôle n'est pas 'user'
        })
        ->where('store_id', $store_id)
        ->get();
        
        return view('backend.pages.users.index', compact('users', 'lowStockProducts'));
    }

    public function create()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.users.create', compact('lowStockProducts'));
    }

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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'store_id' => $request->store_id,
        ]);

         // Assigner le rôle à l'utilisateur
        $user->assignRole($request->role);

        return redirect()->route('admin.utilisateurs.create')->with('success', 'Utilisateur créé avec succès.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        return view('backend.pages.users.edit', compact('user', 'lowStockProducts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required', // Validation du rôle
        ]);
    
        // Trouver l'utilisateur par ID
        $user = User::findOrFail($id);
    
        // Mettre à jour les autres informations de l'utilisateur
        $user->update([
            'name' => $request->name,
        ]);
    
        // Réassigner le rôle à l'utilisateur
        $user->syncRoles($request->role); // Utilise syncRoles pour remplacer l'ancien rôle
    
        // Rediriger avec un message de succès
        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    public function assignRoleBlade() {

        $store_id = Auth::user()->store_id;
        $user = User::where('store_id', $store_id)->get();
        $roles = Role::all();
        return view('backend.pages.assign_role.create', compact('user', 'roles'));
    }

    public function assignRole(Request $request, User $user)
    {
        // Synchroniser les rôles sélectionnés
        $user->syncRoles($request->roles);
        
        return redirect()->back()->with('success', 'Rôles mis à jour avec succès.');
    }
}
