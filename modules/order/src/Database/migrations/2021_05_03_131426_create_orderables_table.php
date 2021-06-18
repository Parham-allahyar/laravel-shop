<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderablesTable extends Migration
{

    public function up()
    {

        Schema::create('orderables', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->integer('orderables_id')->unsigned();
            $table->string('orderables_type');
            $table->timestamps();

        });
    }



    public function down()
    {
        Schema::dropIfExists('orderables');
    }
}
