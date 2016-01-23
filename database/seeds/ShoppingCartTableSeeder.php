<?php

use Illuminate\Database\Seeder;

class ShoppingCartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product_ids=DB::table('product')->select('id')->get();
        //svaki user ima po jedan shopping cart, u svakom cart-u 1 do 5 proizvoda
        for($i=0;$i<=count(DB::table('user')->select('id')->get());$i++){
            for($j=0;$j<=rand(1,5);$j++){
                DB::table('shopping_cart')->insert([
                    'user_id'=> $i,
                    'color' => array_rand(['red', 'blue','black']),
                    'size' =>array_rand(['S','M','L']),
                    'product_id'=>array_rand($product_ids)
                ]);
            }
        }

    }
}
