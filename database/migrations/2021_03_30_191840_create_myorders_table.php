<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myorders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->text('customer_name');
            $table->text('myproduct_name');
            $table->text('price');
            $table->text('orderstatus');
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
        Schema::dropIfExists('myorders');

    }
}
