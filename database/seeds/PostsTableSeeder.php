<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<5; $i++) {
            //creo istanza
            $newPost = new Post();

            //valorizzo istanza
            $newPost->title = $faker->sentence(8);
            $newPost->slug = Str::slug($newPost->title);  //genero un url modificato con il testo che trovo nel titolo
            $newPost->subtitle = $faker->sentence(5);
            $newPost->text = $faker->text(1000);
            $newPost->author = $faker->name(10);
            $newPost->img_path = $faker->imageUrl(100, 100, 'nature');
            $newPost->publication_date = $faker->dateTime();

            //salvo
            $newPost->save();

        }
    }
}
