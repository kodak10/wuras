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

        $roles = Role::all();
        $permissions = Permission::all();

        $groupedPermissions = $permissions->groupBy(function ($permission) {
            return explode('.', $permission->name)[0]; // Group by menu name
        });

        return view('backend.pages.permissions.index', compact('roles', 'groupedPermissions', 'lowStockProducts'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'permissions' => 'array'
        ]);
        
        $role = Role::findById($request->role_id);

        // Synchronize permissions for the role
        $role->syncPermissions($request->permissions);

        return redirect()->route('admin.permissions.index')->with('success', 'Permissions updated successfully');


    }

    public function getPermissions($roleId)
    {
        // Trouver le rôle par ID avec ses permissions
        $role = Role::findById($roleId);

        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        // Récupérer les permissions du rôle
        // $permissions = $role->permissions()->pluck('name')->toArray();

        // return response()->json($permissions);
        return response()->json($role->permissions);

    }

}
