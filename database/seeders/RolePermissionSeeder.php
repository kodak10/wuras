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
 
         // Création des rôles
         $adminRole = Role::create(['name' => 'admin']);
         $managerRole = Role::create(['name' => 'manager']);
         $employeeRole = Role::create(['name' => 'employee']);
 
         // Création des permissions
         $permissions = [
             'manage users',  // Gérer les utilisateurs
             'manage roles',  // Gérer les rôles
             'manage orders', // Gérer les commandes
             'view reports',  // Voir les rapports
             'manage stores',  // Gérer les magasins
             'manage articles' // Gérer les articles
         ];
 
         foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
         }
 
         // Attribution des permissions aux rôles
         $adminRole->givePermissionTo(Permission::all()); // L'admin a toutes les permissions
         $managerRole->givePermissionTo(['manage orders', 'view reports', 'manage articles']);
         $employeeRole->givePermissionTo(['view reports']);
 
         // Création des utilisateurs de test
         $admin = User::create([
             'name' => 'Admin User',
             'email' => 'admin@example.com',
             'password' => bcrypt('password')
         ]);
         $admin->assignRole('admin');
 
         $manager = User::create([
             'name' => 'Manager User',
             'email' => 'manager@example.com',
             'password' => bcrypt('password')
         ]);
         $manager->assignRole('manager');
 
         $employee = User::create([
             'name' => 'Employee User',
             'email' => 'employee@example.com',
             'password' => bcrypt('password')
         ]);
         $employee->assignRole('employee');
 
         $this->command->info('Rôles, permissions et utilisateurs créés avec succès !');
    }
}
