<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
       
        });
    
    Schema::create('attribute_values', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('attribute_id');
        $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        $table->string('value');
        $table->timestamps();
    });
}
    public function down()
    {
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('attributes');
    }
}



// Schema::create('attribute_values', function (Blueprint $table) {
//     $table->id();
//     $table->unsignedBigInteger('attribute_id');
//     $table->foreign('attribute_id')
//     ->references('id')
//     ->on('attributes')
//     ->onDelete('cascade');
//     $table->string('value', 100);
//     $table->timestamps();
// });


