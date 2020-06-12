<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbsolusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbsolusis', function (Blueprint $table) {
            $table->id();
            $table->string("kdsolusi", 50);
            $table->string("solusi", 50);
            $table->string("kddiagnosa", 50);
            $table->string("nmdiagnosa", 50);
            $table->text("keterangan");
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
        Schema::dropIfExists('tbsolusis');
    }
}
