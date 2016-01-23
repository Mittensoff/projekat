<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => 'user_'. str_random(8),
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'user_type' => 'user'

    ];
});

$factory->define(App\User_info::class, function (Faker\Generator $faker) {
    return [
        'user_id'=> array_rand(array_filter(DB::table('user')->select('id')->get())),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'city'=> $faker->city,
        'zip_code'=> str_random(4),
        'tel_num1'=> str_random(10),

    ];
});


$factory->define(App\User_credit_card::class, function (Faker\Generator $faker) {
    return [
        'user_id'=> array_rand(array_filter(DB::table('user')->select('id')->get())),
        'card_holder'=> $faker->firstName .' ' . $faker->lastName,
        'card_number'=> $faker->creditCardNumber,
        'card_company' => $faker->creditCardType

    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
       'name'=> 'Category__ ' . str_random(5)

    ];
});

$factory->define(App\Sub_category::class, function (Faker\Generator $faker) {
    return [
        'category_id'=> array_rand(array_filter(DB::table('category')->select('id')->get())),
        'name'=> 'Sub_category__' . str_random(5)

    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [

        'user_id'=> array_rand(DB::table('user')->select('id')->get()),
        'sub_category_id' => array_rand(array_filter(DB::table('sub_category')->select('id')->get())),
        //shipping id fix
        'shipping_id_array' => rand(1,10).rand(1,10). rand(1,10),
        'name' => 'product_name' . str_random(4),
        'short_description' => $faker->sentence,
        'description'=>$faker->text,
        'prev_description'=> $faker->text,
        'in_stock' => rand(0,10),
        'type' => 'type'.str_random(3),
        'price'=> rand(100,100000)/100,
        'color'=> $faker->colorName,
        'length' => rand(1,100),
        'width' => rand(1,100),
        'height' => rand(1,100),
        'weight'=> rand(1,10000), //gram
        'main_image_path' => $faker->imageUrl(350,250,'technics'),
        'main_image_name' =>  'slika',
        'image_path1'=> $faker->imageUrl(300,200,'technics'),
        'image_name1'=> 'slika1',
        'image_path2'=> $faker->imageUrl(300,200,'technics'),
        'image_name3'=> 'slika2',
        'image_path3'=> $faker->imageUrl(300,200,'technics'),
        'image_name3'=> 'slika3',
        'image_path4'=> $faker->imageUrl(300,200,'technics'),
        'image_name4'=> 'slika4',
        'image_path5'=> $faker->imageUrl(300,200,'technics'),
        'image_name5'=> 'slika5'
        ];

});

$factory->define(App\Product_image::class, function (Faker\Generator $faker) {
    return [
        'product_id'=> array_rand(array_filter(DB::table('product')->select('id')->get())),
        'image_path' => $faker->imageUrl(300,250,'technics'),
        'image_name' =>  'slika_'.str_random(4),


    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name'=> $faker->word,
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [

        'user_info_id'=>array_rand(array_filter((DB::table('user_info')->select('id')->get()))),
        'product_id'=>array_rand(array_filter(DB::table('product')->select('id')->get())),
        'payment_status' => array_rand(['payment processing', 'payment succesful', 'payment unsuccesful']),
        'shipment_status'=>array_rand(['shipped','preparation','finished']),
        'tracking_number'=> 'EE'.mt_rand(1000,9999).mt_rand(1000,9999).'XX',
        'quantity'=> rand(1,30),
        'color' => array_rand(['red', 'blue','black']), //hexadecimalni zamijeniti
        'size' =>array_rand(['S','M','L']),

        //review
        'comment'=> $faker->sentence,
        'shipment_rating'=> rand(0,50)/10,
        'product_rating'=> rand(0,50)/10,
        'seller_rating'=> rand(0,50)/10,
        'anon'=>rand(0,1),


    ];
});

$factory->define(App\Wishlist::class, function (Faker\Generator $faker) {
    return [
        'user_id'=>array_rand(array_filter(DB::table('user')->select('id')->get())),
        'product_id'=>array_rand(DB::table('product')->select('id')->get()),//vlasnik i proizvod

    ];
});

/*$factory->define(App\Shopping_cart::class, function (Faker\Generator $faker) {
    return [
        'user_id'=>array_rand(DB::table('user')->select('id')->get()),
        'product_id'=>array_rand(DB::table('product')->select('id')->get()),//vlasnik i proizvod
        'color' => array_rand(['red', 'blue','black']),
        'size' =>array_rand(['S','M','L'])

    ];
});*/


$factory->define(App\Conversation::class, function (Faker\Generator $faker) {
    return [
        'sender_id'=>array_rand(array_filter(DB::table('user')->select('id')->get())),
        'receiver_id'=>array_rand(array_filter(DB::table('user')->select('id')->get())),

    ];
});

$factory->define(App\Private_message::class, function (Faker\Generator $faker) {
    return [
    'conversation_id'=> array_rand(array_filter(DB::table('conversation')->select('id')->get())),
    'message'=>$faker->text,
    'read'=>rand(0,1),
    ];
});


$factory->define(App\Coupon::class, function (Faker\Generator $faker) {
    return [
        'decrease'=>rand(0,100),
        'coupon_holder_id'=>array_rand(array_filter(DB::table('user')->select('id')->get())),

    ];
});

$factory->define(App\Shipping::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->word,
        'shipping_price'=>rand(1,100000)/100,
    ];
});



