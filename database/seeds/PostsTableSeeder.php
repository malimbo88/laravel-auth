<?php

use Illuminate\Database\Seeder;

// Use Faker class
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
        for ($i=0; $i < 10 ; $i++) {
          $new_post = new Post();
          $new_post->user_id = 1;
          $new_post->title = $faker->sentence();
          $new_post->image_path = $faker->imageUrl();
          $new_post->content = $faker->text(500);

          // Save data
          $new_post->save();
        }
    }
}
