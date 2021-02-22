<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //non voglio inserire dati random ma dati già creati, quindi faccio array
        $tags = [
            'PHP',
            'Laravel',
            'JavaScript',
            'HTML',
            'CSS',
        ];

        //inserisco i dati nella nuova istanza
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag);
            $newTag->save();
        }
    }
}
