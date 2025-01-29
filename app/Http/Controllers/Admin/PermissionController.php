<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $lowStockProducts = Article::whereRaw('quantite <= limit_quantite')->get();
        $permissions = Permission::all();

        return view('backend.pages.permissions.index', compact('permissions','lowStockProducts'));
    }

    public function create()
    {
        return view('backend.pages.permissions.create');
    }

    public function store(Request $request)
    {
        Permission::create(['name' => $request->name]);
        return redirect()->route('permissions.index')->with('success', 'Permission ajoutée avec succès');
    }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'role_id' => 'required|exists:roles,id',
    //         'permissions' => 'array'
    //     ]);
        
    //     $role = Role::findById($request->role_id);

    //     // Synchronize permissions for the role
    //     $role->syncPermissions($request->permissions);

    //     return redirect()->route('admin.permissions.index')->with('success', 'Permissions updated successfully');


    // }

    // public function getPermissions($roleId)
    // {
    //     $role = Role::findById($roleId);

    //     if (!$role) {
    //         return response()->json(['error' => 'Role not found'], 404);
    //     }

    //     return response()->json($role->permissions);
    // }

}
