<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('title1')->nullable();
            $table->string('desc1')->nullable();
            $table->string('image2')->nullable();
            $table->string('title2')->nullable();
            $table->string('desc2')->nullable();
            $table->string('image3')->nullable();
            $table->string('title3')->nullable();
            $table->string('desc3')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
