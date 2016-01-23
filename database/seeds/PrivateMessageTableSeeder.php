<?php

use Illuminate\Database\Seeder;

class PrivateMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Private_message::class,150)->create();
    }
}
