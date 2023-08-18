<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllq5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllq5s', function (Blueprint $table) {
            $table->id('LQ5ID');
            $table->char('LQ5I',1);
            $table->date('LQ5II',8);
            $table->decimal('LQ5III',15);
            $table->decimal('LQ5IV',15);
            $table->decimal('LQ5V',15);
            $table->decimal('LQ5VI',15);
            $table->decimal('LQ5VII',15);
            $table->decimal('LQ5VIII',15);
            $table->decimal('LQ5IX',15);
            $table->decimal('LQ5X',15);
            $table->decimal('LQ5XI',15);
            $table->decimal('LQ5XII',15);
            $table->decimal('LQ5XIII',15);
            $table->string('LQ5XIV',6);
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
        Schema::dropIfExists('tbllq5s');
    }
}
