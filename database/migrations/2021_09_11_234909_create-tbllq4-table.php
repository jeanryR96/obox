<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllq4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllq4s', function (Blueprint $table) {
            $table->id('LQ4ID');
            $table->char('LQ4I',1);
            $table->string('LQ4II',20);
            $table->string('LQ4III',150);
            $table->string('LQ4IV',25);
            $table->string('LQ4V',1);
            $table->decimal('LQ4VI',15);
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
        Schema::dropIfExists('tbllq4s');
    }
}
