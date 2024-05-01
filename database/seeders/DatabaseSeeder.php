<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test New User',
            'email' => 'test4@example.com',
        ]);

        Category::factory()->times(5)->create([
            'name' => 'Test Category',
        ]);

        Post::factory()->create([
            'title' => 'Test Post',
            'text' => 'Something something very long text with a lot of things that happened  and so on, some ore text maybe.',
            'category_id' => Category::factory()->create([
                'name' => 'Post Category1',
            ])->id,
        ]);
        Post::factory()->create([
            'title' => 'Test Post2',
            'text' => 'Something something very long text with a lot of things that happened  and so on, some ore text maybe.',
            'category_id' => Category::factory()->create([
                'name' => 'Post Category2',
            ])->id,
        ]);
        Post::factory()->create([
            'title' => 'Test Post3',
            'text' => 'Something something very long text with a lot of things that happened  and so on, some ore text maybe.',
            'category_id' => Category::factory()->create([
                'name' => 'Post Category3',
            ])->id,
        ]);
    }
}
