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
        Schema::create('app_downloads', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('playmarket');
            $table->string('appstore');
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
        Schema::dropIfExists('app_downloads');
    }
};
