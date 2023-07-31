<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('news_img');
            $table->string('news_title');
            $table->string('bemor_img');
            $table->string('news_bemor');
            $table->string('bemorlar_soni');
            $table->string('tuzalgan_img');
            $table->string('news_tuzalgan');
            $table->string('tuzalganlar_soni');
            $table->string('vafot_img');
            $table->string('news_vafot');
            $table->string('vafot_soni');
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
        Schema::dropIfExists('infos');
    }
};
