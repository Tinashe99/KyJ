<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id = 2;
        $post->title = "Using Laravel Seeders";
        $post->body = "Easy to use seeders. Laravel makes thinghs great by allowing a developer to use a database seeder already given to be able to invoke other seeders";
        $post->save();

        $post = new Post;
        $post->user_id = 2;
        $post->title = "Database Migrations";
        $post->body = "Migrations are like version control for your database, allowing your team to easily modify and share the application's database schema. Migrations are typically paired with Laravel's schema builder to easily build your application's database schema. If you have ever had to tell a teammate to manually add a column to their local database schema, you've faced the problem that database migrations solve.";
        $post->save();
    }
}
