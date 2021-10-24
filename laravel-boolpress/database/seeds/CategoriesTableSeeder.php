<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['A', 'B', 'C', 'D'];

        foreach ($names as $name){
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
    }
}
