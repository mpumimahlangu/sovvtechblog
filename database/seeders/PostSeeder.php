<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'This is my first post',
            'content' => 'My apologies for handing this assessment late. Everything that could go wrong, did go wrong',
        ]);
    }
}
