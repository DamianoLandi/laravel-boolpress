<?php

use Illuminate\Database\Seeder;


use App\Models\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($n=0; $n < 20; $n++){
            $post = new Post();

            $post->title = $faker->text(20);
            $post->content = $faker->text(50);
            $post->image = $faker->text(20);


            $post->save();
        };
    }
}
