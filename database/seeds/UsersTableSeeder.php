<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        User::create(array(
            'name'     => 'Administrator',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ));

        factory(User::class, 10)->create();
    }
}
