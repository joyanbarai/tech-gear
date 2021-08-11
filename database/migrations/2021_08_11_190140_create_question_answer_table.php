<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answer', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('question')->nullable();
            $table->string('answer')->nullable();
            $table->string('table_name')->nullable();
            $table->integer('pid')->nullable();
            $table->string('qdate')->nullable();
            $table->string('qtime')->nullable();
            $table->string('adate')->nullable();
            $table->string('atime')->nullable();
            $table->string('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_answer');
    }
}
