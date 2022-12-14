<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsDemoSeeder::class);

        if(!User::where('email','johnwelsh19@gmail.com')->first()) {
            $user = User::factory()->create([
                'firstName' => 'Kwame',
                'lastName' => 'Poku',
                'isAdmin' => true,
                'isActivated' => true,
                'isApproved' => true,
                'email' => 'johnwelsh19@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123Ghana'), // password
                'remember_token' => Str::random(10),
            ])->assignRole('super-admin');
            Profile::factory()->for($user)->create();
        }


        User::factory(15)->hasProfile()->create()->each(function ($user) {
            $role = Role::findByName('writer');
            $user->assignRole($role);
        });

        Post::factory(15)->create();

    }
}
