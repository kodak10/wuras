<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = ['articles', 'categories', 'tags','commandes', 'stock', 'codeBarres','permissions', 'roles'];
        $actions = ['index', 'create', 'edit', 'delete'];
    
        foreach ($menus as $menu) {
            foreach ($actions as $action) {
                Permission::create(['name' => "$menu.$action"]);
            }
        }
    }
}
