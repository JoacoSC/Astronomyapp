<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* $table->unsignedBigInteger('id_teacher')->nullable();
            $table->foreign('id_teacher')->references('id')->on('teachers');
            $table->unsignedBigInteger('id_temario')->nullable();
            $table->foreign('id_temario')->references('id')->on('temario'); */

            

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
        Schema::dropIfExists('class');
    }
}
