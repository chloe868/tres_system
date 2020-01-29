<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'Administrator',
            'username' => 'Admin',
            'password' => Hash::make('admin'),
        ));
    }
}
