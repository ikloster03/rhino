<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgency', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->nullable()->comment= "";
            $table->date('deadline')->nullable()->comment= "";
            $table->tinyInteger('type')->nullable()->comment= "";
            $table->string('comment')->nullable()->comment= "";
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
        Schema::dropIfExists('urgency');
    }
}
