<?php

use Illuminate\Database\Seeder;

class ScholarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholars')->insert(
            array(
                array('first_name' => 'Jorgielyn','middle_name' => 'Librando', 'last_name' => 'Iran','batch' => '2020' , 'phone_number' => '09460306015' ,  'email' => 'irangabriellef14@gmail.com'),
            )
        );
    }
}
