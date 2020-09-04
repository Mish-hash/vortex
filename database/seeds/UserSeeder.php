<?php

use App\Role;
use App\User;
use App\Permission;
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
       /*  DB::table('users')->insert([
            'name' => 'Admin',
            'role'=> 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'phone' => null,
            'phone_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token' => Str::random(10),
        ]); */

        $admin = Role::where('slug','admin')->first();
        $acceptor = Role::where('slug', 'acceptor')->first();
        $serviceMan = Role::where('slug', 'serviceman')->first();

        $administrator = Permission::where('slug','root')->first();
        $acceptance = Permission::where('slug','acceptance')->first();
        $repair = Permission::where('slug','repair')->first();
        
        $user1 = new User();
        $user1->name = 'Admin';
        $user1->role = 'staff';
        $user1->email = 'admin@example.com';
        $user1->email_verified_at = now();
        $user1->phone = null;
        $user1->phone_verified_at = now();
        $user1->password = bcrypt('123456789');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($administrator);

        $user2 = new User();
        $user2->name = 'Jhon Deo';
        $user2->role = 'staff';
        $user2->email = 'jhon@deo.com';
        $user2->email_verified_at = now();
        $user2->phone = null;
        $user2->phone_verified_at = now();
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($acceptor);
        $user2->permissions()->attach($acceptance);
        
        $user3 = new User();
        $user3->name = 'Mike Thomas';
        $user3->role = 'staff';
        $user3->email = 'mike@thomas.com';
        $user3->email_verified_at = now();
        $user3->phone = null;
        $user3->phone_verified_at = now();
        $user3->password = bcrypt('secret');
        $user3->save();
        $user3->roles()->attach($serviceMan);
        $user3->permissions()->attach($repair);
    }
}
