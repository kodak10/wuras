<?php

namespace Database\Seeders;

use \DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Suppression des anciennes données
        //  \DB::table('model_has_roles')->truncate();
        //  \DB::table('roles')->truncate();
        //  \DB::table('permissions')->truncate();
 
         // Créer les permissions
         $permissions = [
            'view stores',
            'create stores',
            'edit stores',
            'delete stores',

            'view articles',
            'create articles',
            'edit articles',
            'delete articles',

            'view commandes',
            'create commandes',
            'edit commandes',
            'delete commandes',

            'view utilisateurs',
            'create utilisateurs',
            'edit utilisateurs',
            'delete utilisateurs',

            'view ventes',
            'create ventes',
            'edit ventes',
            'delete ventes',

            'manage roles',
            'manage users',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Créer les rôles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $employeeRole = Role::create(['name' => 'employee']);

        // Assigner les permissions aux rôles

        // Admin a toutes les permissions
        $adminRole->givePermissionTo(Permission::all());

        // Manager permissions spécifiques
        $managerRole->givePermissionTo([
            'view stores',
            'create stores',
            'edit stores',
            'delete stores',
            'view articles',
            'create articles',
            'edit articles',
            'view commandes',
            'create commandes',
            'edit commandes',
            'view ventes',
            'create ventes',
            'edit ventes',
        ]);

        // Employee permissions spécifiques
        $employeeRole->givePermissionTo([
            'view commandes',
            'view articles',
            'view ventes',
        ]);
    }
}
