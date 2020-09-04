<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        factory(App\Category::class, 4)->create();
        factory(App\Product::class, 40)->create();
        factory(App\User::class, 25)->create();
        factory(App\Review::class, 100)->create();
        factory(App\Post::class, 50)->create();
        factory(App\CrosselProduct::class, 40)->create();
    }
}
