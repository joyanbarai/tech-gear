<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scs', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Table_Name')->nullable();
            $table->unsignedInteger('Product_Id')->nullable();
            $table->string('Picture')->nullable();
            $table->string('Type')->nullable();
            $table->string('Info', 10000)->nullable();
            $table->string('Deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scs');
    }
}
