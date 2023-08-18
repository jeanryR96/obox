<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblop3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblop3s', function (Blueprint $table) {
            $table->id('OP3ID');
            $table->char('OP3I',1);
            $table->string('OP3II',1);
            $table->date('OP3III',8);
            $table->string('OP3IV',6);
            $table->string('OP3V',6);
            $table->string('OP3VI',6);
            $table->decimal('OP3VII',6);
            $table->decimal('OP3VIII',6);
            $table->decimal('OP3IX',6);
            $table->string('OP3FLI')->nullable();
            $table->string('OP3FLII')->nullable();
            $table->string('OP3FLIII')->nullable();
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
        Schema::dropIfExists('tblop3s');
    }
}
