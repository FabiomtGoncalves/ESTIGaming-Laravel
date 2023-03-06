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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("price");
            $table->longText("description");
            $table->string("platform");
            $table->string("genre");
            $table->string("image");
            $table->string("trailer");
            $table->string("background");
            $table->string("sale")->nullable();
            $table->date("release_date");
            $table->string("developer");
            $table->string("rating");
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
