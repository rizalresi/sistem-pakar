<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbdiagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbdiagnosas', function (Blueprint $table) {
            $table->id();
            $table->string("kddiagnosa", 50);
            $table->string("nmdiagnosa", 50);
            $table->string("kdgejala", 50);
            $table->string("nmgejala", 50);
            $table->string("kdkerusakan", 50);
            $table->string("nmkerusakan", 50);
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
        Schema::dropIfExists('tbdiagnosas');
    }
}
