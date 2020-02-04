<?php

use Illuminate\Database\Seeder;
use App\tblpayments;
class tblpaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        factory(tblpayments::class, $count)->create();
    }
}
