<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number')->unique();
            $table->integer('user_id')->unsigned()->index();
            $table->string('brand');
            $table->string('link')->nullable();
            $table->string('model');
            $table->integer('size');
            $table->decimal('price')->nullable();
            $table->enum('status', ['still looking', 'quote sent', 'accepted', 'declined'])->default('still looking');
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
        Schema::drop('orders');
    }
}
