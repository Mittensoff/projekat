<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $toTruncate=['shipping','coupon','private_message','conversation','shopping_cart','wishlist','order',
            'product_tag','tag','product_image','product','sub_category','category','user_credit_card','user_info',
            'user'];

        foreach($toTruncate as $table){
            DB::table($table)->truncate();
        }

        $this->call(UserTableSeeder::class);
        $this->command->info('1');
        $this->call(UserInfoTableSeeder::class);
        $this->command->info('2');
        $this->call(UserCreditCardTableSeeder::class);
        $this->command->info('3');
        $this->call(CategoryTableSeeder::class);
        $this->command->info('4');
        $this->call(SubCategoryTableSeeder::class);
        $this->command->info('5');
        $this->call(ProductTableSeeder::class);
        $this->command->info('6');
        $this->call(ProductImageTableSeeder::class);
        $this->command->info('7');
        $this->call(TagTableSeeder::class);
        $this->command->info('8');
        $this->call(ProductTagTableSeeder::class);
        $this->command->info('9');
        $this->call(OrderTableSeeder::class);
        $this->command->info('10');
        $this->call(WishlistTableSeeder::class);
        $this->command->info('11');
        $this->call(ShoppingCartTableSeeder::class);
        $this->command->info('12');
        $this->call(ConversationTableSeeder::class);
        $this->command->info('13');
        $this->call(PrivateMessageTableSeeder::class);
        $this->command->info('14');
        $this->call(CouponTableSeeder::class);
        $this->command->info('15');
        $this->call(ShippingTableSeeder::class);
        $this->command->info('16');


        Model::reguard();
    }
}
