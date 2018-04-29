<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('doc_type')->nullable()->comment= "1 - документ, 2 - письмо";
            $table->integer('copy_id')->nullable()->comment= "id вхождения созданного экземпляра";
            $table->integer('exemplar_id')->nullable()->comment= "id вхождения созданного экземпляра";
            $table->integer('person_id')->nullable()->comment="сотрудник работающий с документом";
            $table->integer('company_id')->nullable()->comment="сотрудник работающий с документом";
            $table->integer('company_got_id')->nullable()->comment="";
            $table->integer('person_got_id')->nullable()->comment="";
            $table->integer('letter_id')->nullable()->comment="ссылка на информаию о письме";
            $table->integer('document_id')->nullable()->comment="ссылка на информацию о документе";
            $table->integer('person_printed_id')->nullable()->comment="";
            $table->integer('company_printed_id')->nullable()->comment="";
            $table->integer('person_signed_id')->nullable()->comment="";
            $table->integer('income_number_id')->nullable()->comment="";
            $table->integer('local_number_id')->nullable()->comment="";
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
        Schema::dropIfExists('entry');
    }
}
