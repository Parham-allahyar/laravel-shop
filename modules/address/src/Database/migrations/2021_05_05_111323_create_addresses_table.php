<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city',30);
            $table->string('province',30);
            $table->string('street',30);
            $table->string('alley',20);
            $table->string('plaque',5);
            $table->string('zip_code',10);
            $table->string('description')->nullable();
            $table->integer('addressable_id');
            $table->string("addressable_type");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
