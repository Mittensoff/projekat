<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_info_id')->unsigned(); //buyer
            $table->integer('product_id')->unsigned();
            //$table->string('shipping_id')->unsigned();

            $table->string('payment_status');
            $table->string('shipment_status');
            $table->string('tracking_number');

            /* Post/EMS numbers have the format EE123456789XX -- EE tip trackinga, XX zemlja kojoj se upucuje posiljka*/

            $table->integer('quantity');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();

            $table->text('comment');
            $table->boolean('anon');

            $table->decimal('shipment_rating',2,1);
            $table->decimal('product_rating',2,1);
            $table->decimal('seller_rating',2,1);

            $table->foreign('user_info_id')->references('id')->on('user_info');
            $table->foreign('product_id')->references('id')->on('product');
            //$table->foreign('shipping_id')->references('id')->on('shipping');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
