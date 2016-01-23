<?php

use Illuminate\Database\Seeder;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<100;$i++){
            DB::table('product_tag')->insert(
                ['product_id' => mt_rand(1,99),
                'tag_id' => mt_rand(1,199)]
            );
        }

    }
}
