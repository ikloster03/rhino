<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->nullable()->comment= "";
            $table->integer('status_id')->nullable()->comment= "";
            $table->string('note')->nullable()->comment= "";
            $table->date('date')->nullable()->comment= "";
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
        Schema::dropIfExists('status_history');
    }
}
