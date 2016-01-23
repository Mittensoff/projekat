<?php

use Illuminate\Database\Seeder;

class UserCreditCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User_credit_card::class,100)->create();
    }
}
