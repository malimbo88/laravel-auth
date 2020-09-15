<?php

use Illuminate\Database\Seeder;

// Use Faker
use Faker\Generator as Faker;

// Use Post model class
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      // Create news database rows
      for ($i=0; $i < 20; $i++) {

          // New instance = database row
          $new_post = new Post();
          $new_post->user_id = 1;
          $new_post->title = $faker->sentence();
          $new_post->content = $faker->text(1000);

          // Save data
          $new_post->save();
        }
    }
}
