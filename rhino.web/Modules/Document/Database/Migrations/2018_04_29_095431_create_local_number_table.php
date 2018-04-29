<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_number', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->nullable()->comment= "";
            $table->date('date')->nullable()->comment= "";
            $table->integer('entry_id')->nullable()->comment= "";
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
        Schema::dropIfExists('local_number');
    }
}
