<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllq3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllq3s', function (Blueprint $table) {
            $table->id('LQ3ID');
            $table->char('LQ3I',1);
            $table->string('LQ3II',20);
            $table->string('LQ3III',150);
            $table->string('LQ3IV',25);
            $table->string('LQ3V',1);
            $table->decimal('LQ3VI',15);
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
        Schema::dropIfExists('tbllq3s');
    }
}
