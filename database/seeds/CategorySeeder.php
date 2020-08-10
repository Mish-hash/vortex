<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => Str::random(10),
            'slug' => Str::random(10).'@gmail.com',
            'img_url' => Str::random(10),
        ]);
    }
}
