<?php

use App\Models\Category;
use App\Models\Movie;
use App\Models\Post;
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
        factory(Category::class,15)->create();
        factory(Movie::class,10)->create();
        // $this->call(UserSeeder::class);
    }
}
