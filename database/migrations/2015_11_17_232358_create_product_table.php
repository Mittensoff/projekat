<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //vlasnik proizvoda
            $table->integer('sub_category_id')->unsigned();

            $table->string('shipping_id_array');
            $table->string('name');
            $table->string('short_description');
            $table->text('description');
            $table->text('prev_description')->nullable();
            $table->integer('in_stock');
            $table->decimal('price',8,2); // max: 999 999,99
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();

            //max 6 slika (1 prioritetna)
            $table->string('main_image_path')->nullable();
            $table->string('main_image_name')->nullable();

            $table->string('image_path1')->nullable();
            $table->string('image_name1')->nullable();

            $table->string('image_path2')->nullable();
            $table->string('image_name2')->nullable();

            $table->string('image_path3')->nullable();
            $table->string('image_name3')->nullable();

            $table->string('image_path4')->nullable();
            $table->string('image_name4')->nullable();

            $table->string('image_path5')->nullable();
            $table->string('image_name5')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_category')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');

    }
}
