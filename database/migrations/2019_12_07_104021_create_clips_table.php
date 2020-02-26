<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('curator_id');
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('tracking_id')->unique();
            $table->string('slug');
            $table->string('game')->nullable();
            $table->string('title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('url')->unique();
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('views')->nullable();
            $table->timestamp('approved_at')->nullable();            
            $table->timestamps();

            $table->foreign('curator_id')->references('id')->on('curators');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clips');
    }
}
