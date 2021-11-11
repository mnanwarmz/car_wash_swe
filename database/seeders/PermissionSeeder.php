<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);

        Permission::create(['name' => 'create-vehicle']);
        Permission::create(['name' => 'edit-vehicle']);
        Permission::create(['name' => 'delete-vehicle']);

        Permission::create(['name' => 'create-vehicle-type']);
        Permission::create(['name' => 'edit-vehicle-type']);
        Permission::create(['name' => 'delete-vehicle-type']);

        Permission::create(['name' => 'create-appointment']);
        Permission::create(['name' => 'edit-appointment']);
        Permission::create(['name' => 'delete-appointment']);

        Permission::create(['name' => 'create-location']);
        Permission::create(['name' => 'edit-location']);
        Permission::create(['name' => 'delete-location']);

        $superadmin = Role::create(['name' => 'superadmin']);
        $superadmin->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(['create-user', 'edit-user', 'delete-user', 'create-vehicle', 'edit-vehicle', 'delete-vehicle', 'create-vehicle-type', 'edit-vehicle-type', 'delete-vehicle-type', 'create-appointment', 'edit-appointment', 'delete-appointment', 'create-location', 'edit-location', 'delete-location']);
    }
}
