<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDorilarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorilars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('bemor_dori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tashxis_id');
            $table->unsignedBigInteger('dori_id');
            $table->timestamps();

            $table->unique(['tashxis_id', 'dori_id']);

            $table->foreign('tashxis_id')->references('id')->on('tashxislars')->onDelete('cascade');
            $table->foreign('dori_id')->references('id')->on('dorilars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dorilars');
    }
}
