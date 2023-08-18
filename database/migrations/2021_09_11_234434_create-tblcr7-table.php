<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcr7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcr7s', function (Blueprint $table) {
            $table->id('CR7ID');
            $table->char('CR7I',1);
            $table->string('CR7II',3);
            $table->string('CR7III',150);
            $table->string('CR7IV',20);
            $table->string('CR7V',25);
            $table->string('CR7VI',15);
            $table->string('CR7VII',25);
            $table->string('CR7VIII',4);
            $table->date('CR7IX',8);
            $table->decimal('CR7X',15);
            $table->decimal('CR7XI',15);
            $table->decimal('CR7XII',15);
            $table->decimal('CR7XIII',15);
            $table->decimal('CR7XIV',15);
            $table->decimal('CR7XV',15);
            $table->string('CR7XVI',3);
            $table->string('CR7XVII',3);
            $table->string('CR7FLI')->nullable();
            $table->string('CR7FLII')->nullable();
            $table->string('CR7FLIII')->nullable();
            $table->string('CR7FLIV')->nullable();
            $table->string('CR7FLV')->nullable();
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
        Schema::dropIfExists('tblcr7s');
    }
}
