<?php

use App\tblscholars;
use Illuminate\Database\Seeder;

class tblscholarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        factory(tblscholars::class, $count)->create();
    }
}
