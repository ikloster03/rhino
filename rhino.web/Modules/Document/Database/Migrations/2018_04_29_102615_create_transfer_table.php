<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->nullable()->comment= "";
            $table->tinyInteger('type')->nullable()->comment= "0 - как официальное письмо, 1 - как приложение, 2 - с запиской, 3 - в рабочем порядке, 4 - по резолюции";
            $table->string('letter_number')->nullable()->comment= "";
            $table->integer('resolution_id')->nullable()->comment= "";
            $table->integer('company_send_id')->nullable()->comment= "";
            $table->integer('company_get_id')->nullable()->comment= "";
            $table->integer('person_send_id')->nullable()->comment= "";
            $table->integer('person_get_id')->nullable()->comment= "";
            $table->date('date_send')->nullable()->comment= "";
            $table->date('date_get')->nullable()->comment= "";
            $table->date('sign_date')->nullable()->comment= "";
            $table->string('note')->nullable()->comment= "";
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
        Schema::dropIfExists('transfer');
    }
}
