<?php

use Illuminate\Database\Seeder;
use App\InfoPost;
use Faker\Generator as Faker;
use App\Post;

class InfoPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            //creo istanza
            $newInfoPost = new InfoPost();

            //valorizzo istanza
            $newInfoPost->post_id = $post->id;
            $newInfoPost->post_status = $faker->randomElement(['public', 'draft', 'private']);
            $newInfoPost->comment_status = $faker->randomElement(['open', 'closed', 'private']);

            //salvo
            $newInfoPost->save();
        }
    }
}
