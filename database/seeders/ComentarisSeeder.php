<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use HasFactory;

use App\Models\Comentari;
use App\Models\Post;

class ComentarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $posts->each(function ($post) {
            Comentari::factory()->count(1)->create([
               'post_id' => $post->id
            ]);
        });
    }
}
