<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('backend.pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('backend.pages.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);
        return redirect()->route('admin.role.create')->with('success', 'Rôle ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();

        // Récupérer le rôle à éditer
        $role = Role::findOrFail($id);
        
        // Récupérer toutes les permissions disponibles
        $permissions = Permission::all();

        return view('backend.pages.roles.edit', compact('role', 'permissions','lowStockProducts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'array|nullable',
        ]);

        // Trouver le rôle et mettre à jour son nom
        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);

        // Synchroniser les permissions sélectionnées
        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Rôle mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
