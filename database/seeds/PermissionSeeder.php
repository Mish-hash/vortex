<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new Permission();
        $administrator->name = 'Root';
        $administrator->slug = 'root';
        $administrator->save();

        $acceptance = new Permission();
        $acceptance->name = 'Acceptance';
        $acceptance->slug = 'acceptance';
        $acceptance->save();

        $repair = new Permission();
        $repair->name = 'Repair';
        $repair->slug = 'repair';
        $repair->save();
    }
}
