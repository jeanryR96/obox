<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblop1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblop1s', function (Blueprint $table) {
            $table->id('OP1ID');
            $table->char('OP1I',1);
            $table->string('OP1II',3);
            $table->date('OP1III',8);
            $table->decimal('OP1IV',15);
            $table->decimal('OP1V',15);
            $table->decimal('OP1VI',15);
            $table->decimal('OP1VII',15);
            $table->string('OP1FLI')->nullable();
            $table->string('OP1FLII')->nullable();
            $table->string('OP1FLIII')->nullable();
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
        Schema::dropIfExists('tblop1s');
    }
}
