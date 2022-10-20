<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'Admin',
        ]);
        $user = User::factory()->create([
            'name' => 'John Doe'
        ])->assignRole('Admin');

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
