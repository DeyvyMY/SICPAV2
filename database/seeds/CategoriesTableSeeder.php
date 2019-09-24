<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table("Categories")->insert([
            'name' => Str::random(10)."category",
            'description' => Str::random(20),
        ]);*/
        factory(App\Categories::class, 10)->create()->each(function($categories){
            $categories->save();
        });


    }
}
