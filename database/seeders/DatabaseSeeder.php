<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cat;
use App\Models\Comment;
use App\Models\State;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tags = Tag::factory(10)->create();
        $cats = Cat::factory(15)->create();

        $tags_id = $tags->pluck('id');

        $cats->each(function ($cat) use ($tags_id) {
            $cat->tags()->attach($tags_id->random(3));
            Comment::factory(3)->create([
                'cat_id' => $cat->id
            ]);
            State::factory(1)->create([
                'cat_id' => $cat->id
            ]);
        });

    }
}
