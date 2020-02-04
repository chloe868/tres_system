<?php

use Illuminate\Database\Seeder;

class tblpaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblpayments')->insert(
            array(
                array('payid' => '1','month' => 'January', 'year' => '2020',  'amount' => '500', 'dateofpayment' => '2020-1-2'),
            )
        );
    }
}
