<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Role::create([
            'role' => 'Admin',
        ]);

        Role::create([
            'role' => 'User',
        ]);

        Role::create([
            'role' => 'Client',
        ]);

        Model::reguard();
    }
}
