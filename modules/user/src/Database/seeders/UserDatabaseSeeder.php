<?php

namespace User\Database\seeders;

use Illuminate\Database\Seeder;
use  User\Database\Models\User;

class UserDatabaseSeeder extends Seeder
{

    public function run()
    {
        User::factory(10)->create();
    }
}
