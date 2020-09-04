<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new Role();
        $administrator->name = 'Admin';
        $administrator->slug = 'admin';
        $administrator->save();

        $acceptor = new Role();
        $acceptor->name = 'Acceptor';
        $acceptor->slug = 'acceptor';
        $acceptor->save();

        $serviceman = new Role();
        $serviceman->name = 'Serviceman';
        $serviceman->slug = 'serviceman';
        $serviceman->save();
    }
}
