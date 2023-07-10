<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'         => 'Test Posting',
                'description'   => 'Ini test posting yang pertama..',
                'user_id'       => 1
            ]
        ];

        Post::insert($posts);
    }
}
