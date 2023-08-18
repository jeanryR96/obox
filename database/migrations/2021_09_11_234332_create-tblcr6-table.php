<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcr6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcr6s', function (Blueprint $table) {
            $table->id('CR6ID');
            $table->char('CR6I',1);
            $table->string('CR6II',3);
            $table->string('CR6III',150);
            $table->string('CR6IV',20);
            $table->string('CR6V',25);
            $table->string('CR6VI',15);
            $table->string('CR6VII',25);
            $table->string('CR6VIII',2);
            $table->date('CR6IX',8);
            $table->date('CR6X',8);
            $table->string('CR6XI',4);
            $table->string('CR6XII',6);
            $table->string('CR6XIII',1);
            $table->decimal('CR6XIV',6);
            $table->string('CR6XV',2);
            $table->decimal('CR6XVI',15);
            $table->decimal('CR6XVII',15);
            $table->decimal('CR6XVIII',15);
            $table->string('CR6XIX',3);
            $table->decimal('CR6XX',15);
            $table->string('CR6FLI')->nullable();
            $table->string('CR6FLII')->nullable();
            $table->string('CR6FLIII')->nullable();
            $table->string('CR6FLIV')->nullable();
            $table->string('CR6FLV')->nullable();
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
        Schema::dropIfExists('tblcr6s');
    }
}
