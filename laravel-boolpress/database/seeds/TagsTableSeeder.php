<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_names=['W', 'X', 'Y', 'Z'];

        foreach($tag_names as $name){
            $tag = new Tag();
            $tag->name = $name;
            $tag->save();
        }
    }
}
