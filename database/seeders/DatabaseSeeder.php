<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'slug' => 'my-family-post',
            'title' => 'My Family Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad animi ipsam nulla suscipit velit. Alias animi fugiat magnam voluptas.</p>',
            'published_at' => now()
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-work-post',
            'title' => 'My Work Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad animi ipsam nulla suscipit velit. Alias animi fugiat magnam voluptas.</p>',
            'published_at' => now()
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-personal-post',
            'title' => 'My Personal Post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad animi ipsam nulla suscipit velit. Alias animi fugiat magnam voluptas.</p>',
            'published_at' => now()
        ]);
    }
}
