<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllq6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllq6s', function (Blueprint $table) {
            $table->id('LQ6ID');
            $table->char('LQ6I',1);
            $table->date('LQ6II',8);
            $table->decimal('LQ6III',15);
            $table->decimal('LQ6IV',15);
            $table->decimal('LQ6V',15);
            $table->decimal('LQ6VI',15);
            $table->decimal('LQ6VII',15);
            $table->decimal('LQ6VIII',15);
            $table->decimal('LQ6IX',15);
            $table->decimal('LQ6X',15);
            $table->decimal('LQ6XI',15);
            $table->decimal('LQ6XII',15);
            $table->decimal('LQ6XIII',15);
            $table->string('LQ6XIV',6);
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
        Schema::dropIfExists('tbllq6s');
    }
}
