<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'view archived user']);
        Permission::create(['name' => 'create archived user']);
        Permission::create(['name' => 'update archived user']);
        Permission::create(['name' => 'delete archived user']);

        Permission::create(['name' => 'view setting']);
        Permission::create(['name' => 'create setting']);
        Permission::create(['name' => 'update setting']);
        Permission::create(['name' => 'delete setting']);

        Permission::create(['name' => 'view contact']);
        Permission::create(['name' => 'create contact']);
        Permission::create(['name' => 'update contact']);
        Permission::create(['name' => 'delete contact']);

        Permission::create(['name' => 'view service']);
        Permission::create(['name' => 'create service']);
        Permission::create(['name' => 'update service']);
        Permission::create(['name' => 'delete service']);

        Permission::create(['name' => 'view blog category']);
        Permission::create(['name' => 'create blog category']);
        Permission::create(['name' => 'update blog category']);
        Permission::create(['name' => 'delete blog category']);

        Permission::create(['name' => 'view blog']);
        Permission::create(['name' => 'create blog']);
        Permission::create(['name' => 'update blog']);
        Permission::create(['name' => 'delete blog']);

        Permission::create(['name' => 'view project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'update project']);
        Permission::create(['name' => 'delete project']);

        Permission::create(['name' => 'view testimonial']);
        Permission::create(['name' => 'create testimonial']);
        Permission::create(['name' => 'update testimonial']);
        Permission::create(['name' => 'delete testimonial']);

        Permission::create(['name' => 'view pricing']);
        Permission::create(['name' => 'create pricing']);
        Permission::create(['name' => 'update pricing']);
        Permission::create(['name' => 'delete pricing']);

        Permission::create(['name' => 'view skill']);
        Permission::create(['name' => 'create skill']);
        Permission::create(['name' => 'update skill']);
        Permission::create(['name' => 'delete skill']);

        Permission::create(['name' => 'view counter']);
        Permission::create(['name' => 'create counter']);
        Permission::create(['name' => 'update counter']);
        Permission::create(['name' => 'delete counter']);

        Permission::create(['name' => 'view education']);
        Permission::create(['name' => 'create education']);
        Permission::create(['name' => 'update education']);
        Permission::create(['name' => 'delete education']);

        Permission::create(['name' => 'view experience']);
        Permission::create(['name' => 'create experience']);
        Permission::create(['name' => 'update experience']);
        Permission::create(['name' => 'delete experience']);

        Permission::create(['name' => 'view supported company']);
        Permission::create(['name' => 'create supported company']);
        Permission::create(['name' => 'update supported company']);
        Permission::create(['name' => 'delete supported company']);


        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin']); //as super-admin
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // give all permissions to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);

        // give permissions to admin role.
        $adminRole->givePermissionTo(['view role']);
        $adminRole->givePermissionTo(['view permission']);
        $adminRole->givePermissionTo(['create user', 'view user', 'update user']);


        // Create User and assign Role to it.

        $superAdminUser = User::firstOrCreate([
                    'email' => 'superadmin@gmail.com',
                ], [
                    'name' => 'Super Admin',
                    'email' => 'superadmin@gmail.com',
                    'username' => 'superadmin',
                    'password' => Hash::make ('superadmin@gmail.com'),
                    'email_verified_at' => now(),
                ]);

        $superAdminUser->assignRole($superAdminRole);

        $superAdminProfile = $superAdminUser->profile()->firstOrCreate([
            'user_id' => $superAdminUser->id,
        ], [
            'user_id' => $superAdminUser->id,
            'first_name' => $superAdminUser->name,
            'designation_id' => 17,
            'bio' => 'Tech enthusiast and full-stack developer passionate about crafting clean, efficient code. Lover of Laravel, WordPress, and building smart web solutions.',
            'facebook_url' => 'https://www.facebook.com/',
            'linkedin_url' => 'https://www.linkedin.com/',
            'skype_url' => 'https://www.skype.com/',
            'instagram_url' => 'https://www.instagram.com/',
            'github_url' => 'https://www.github.com/',
        ]);

        $adminUser = User::firstOrCreate([
                            'email' => 'admin@gmail.com'
                        ], [
                            'name' => 'Admin',
                            'username' => 'admin',
                            'email' => 'admin@gmail.com',
                            'password' => Hash::make ('admin@gmail.com'),
                            'email_verified_at' => now(),
                        ]);

        $adminUser->assignRole($adminRole);

        $adminUserProfile = $adminUser->profile()->firstOrCreate([
            'user_id' => $adminUser->id,
        ], [
            'user_id' => $adminUser->id,
            'first_name' => $adminUser->name,
        ]);
    }
}
