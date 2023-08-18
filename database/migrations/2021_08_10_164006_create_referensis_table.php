<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referensis', function (Blueprint $table) {
            $table->id('refid');
            $table->unsignedInteger('refsndid');
            $table->string('refsandi',10);
            $table->string('refdesc');
            $table->timestamps();
            $table->foreign('refsndid')->references('sndid')->on('sandis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referensis');
    }
}
