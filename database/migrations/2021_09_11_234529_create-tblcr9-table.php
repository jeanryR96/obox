<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcr9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcr9s', function (Blueprint $table) {
            $table->id('CR9ID');
            $table->char('CR9I',1);
            $table->string('CR9II',3);
            $table->string('CR9III',150);
            $table->string('CR9IV',25);
            $table->string('CR9V',25);
            $table->string('CR9VI',15);
            $table->string('CR9VII',25);
            $table->string('CR9VIII',2);
            $table->string('CR9IX',4);
            $table->string('CR9X',6);
            $table->string('CR9XI',1);
            $table->string('CR9XII',6);
            $table->string('CR9XIII',2);
            $table->string('CR9XIV',3);
            $table->string('CR9XV',1);
            $table->date('CR9XVI',8);
            $table->string('CR9XVII',1);
            $table->string('CR9XVIII',1);
            $table->string('CR9XIX',2);
            $table->decimal('CR9XX',15);
            $table->decimal('CR9XXI',15);
            $table->string('CR9XXII',3);
            $table->decimal('CR9XXIII',15);
            $table->string('CR9FLI')->nullable();
            $table->string('CR9FLII')->nullable();
            $table->string('CR9FLIII')->nullable();
            $table->string('CR9FLIV')->nullable();
            $table->string('CR9FLV')->nullable();
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
        Schema::dropIfExists('tblcr9s');
    }
}
