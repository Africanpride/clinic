<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */

    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        if(!Role::count() > 0) {

            Permission::create(['name' => 'edit articles']);
            Permission::create(['name' => 'delete articles']);
            Permission::create(['name' => 'publish articles']);
            Permission::create(['name' => 'unpublish articles']);

            // create roles and assign existing permissions
            $role1 = Role::create(['name' => 'writer']);
            $role1->givePermissionTo('edit articles');
            $role1->givePermissionTo('delete articles');

            $role2 = Role::create(['name' => 'admin']);
            $role2->givePermissionTo('publish articles');
            $role2->givePermissionTo('unpublish articles');

            $role3 = Role::create(['name' => 'super-admin']);
        }




        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example User',
        //     'email' => 'test@example.com',
        // ]);
        // $user->assignRole($role1);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Admin User',
        //     'email' => 'admin@example.com',
        // ]);
        // $user->assignRole($role2);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Super-Admin User',
        //     'email' => 'superadmin@example.com',
        // ]);
        // $user->assignRole($role3);
    }
}
