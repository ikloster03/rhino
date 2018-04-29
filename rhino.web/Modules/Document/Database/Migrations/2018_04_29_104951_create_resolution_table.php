<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->nullable()->comment= "";
            $table->string('description')->nullable()->comment= "текст резолюции";
            $table->tinyInteger('priority')->nullable()->comment= "";
            $table->date('sign_date')->nullable()->comment= "";
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
        Schema::dropIfExists('resolution');
    }
}
