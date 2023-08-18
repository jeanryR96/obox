<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcr8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcr8s', function (Blueprint $table) {
            $table->id('CR8ID');
            $table->char('CR8I',1);
            $table->string('CR8II',3);
            $table->string('CR8III',150);
            $table->string('CR8IV',25);
            $table->string('CR8V',25);
            $table->string('CR8VI',25);
            $table->string('CR8VII',25);
            $table->string('CR8VIII',4);
            $table->decimal('CR8IX',15);
            $table->decimal('CR8X',15);
            $table->decimal('CR8XI',15);
            $table->decimal('CR8XII',15);
            $table->decimal('CR8XIII',15);
            $table->decimal('CR8XIV',15);
            $table->string('CR8XV',3);
            $table->string('CR8XVI',3);
            $table->string('CR8XVII',1);
            $table->string('CR8FLI')->nullable();
            $table->string('CR8FLII')->nullable();
            $table->string('CR8FLIII')->nullable();
            $table->string('CR8FLIV')->nullable();
            $table->string('CR8FLV')->nullable();
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
        Schema::dropIfExists('tblcr8s');
    }
}
