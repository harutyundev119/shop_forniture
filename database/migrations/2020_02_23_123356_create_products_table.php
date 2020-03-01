<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->binary('data');
            $table->string('name',250);
            $table->string('price',250);
            $table->string('imgname',250);
            $table->string('title',250);
            $table->string('text',250);
            $table->string('status',250);
            $table->string('description',250);
            $table->string('category',250);
            $table->string('text2',250);
            $table->string('text3',250);
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
        Schema::dropIfExists('products');
    }
}
