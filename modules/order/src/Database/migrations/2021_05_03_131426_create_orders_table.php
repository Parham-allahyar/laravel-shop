<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->enum('status' , ['unpaid' , 'paid' , 'preparation' , 'posted' , 'received' , 'canceled']);
            $table->integer('creatable_id')->unsigned();
            $table->string('creatable_type');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
