<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('shipping_price',5,2);
            $table->timestamps();
        });
    }
    /*
    1) returns / credits (customer returns item(s) for refund)
    2) ship-no-bill (ship an item but don't bill for it)
    3) bill-no-ship (bill for an item but don't ship it)
    4) OPTIONAL, depending on business model: drop shipment

    Shipment_Id
    Total Size
    Total Weight
    Total Dimensions
    SCAC (FEDE|UPSS|etc.))
    Destination info (country, zip, state, city, street, etc.)


    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shipping');
    }
}
