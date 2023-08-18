<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblop2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblop2s', function (Blueprint $table) {
            $table->id('OP2ID');
            $table->char('OP2I',1);
            $table->string('OP2II',20);
            $table->string('OP2III',6);
            $table->string('OP2IV',4);
            $table->string('OP2V',25);
            $table->string('OP2VI',1);
            $table->decimal('OP2VII',15);
            $table->decimal('OP2VIII',15);
            $table->decimal('OP2IX',15);
            $table->decimal('OP2X',15);
            $table->string('OP2FLI')->nullable();
            $table->string('OP2FLII')->nullable();
            $table->string('OP2FLIII')->nullable();
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
        Schema::dropIfExists('tblop2s');
    }
}
