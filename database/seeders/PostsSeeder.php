<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use HasFactory;

use App\Models\Post;
use App\Models\User;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users->each(function ($user) {
            Post::factory()->count(3)->create([
                'usuari_id' => $user->id
            ]);
        });
    }
}
