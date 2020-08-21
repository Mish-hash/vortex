<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role'=> 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'phone' => null,
            'phone_verified_at' => now(),
            'password' => '123456789', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
