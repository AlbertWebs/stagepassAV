<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191)->nullable();
            $table->string('slung')->nullable();
            $table->integer('orders')->nullable();
            $table->text('content')->nullable();
            $table->string('audience')->nullable();
            $table->string('venue')->nullable();
            $table->tinyInteger('video')->nullable()->default(0);
            $table->string('image_one', 191)->nullable();
            $table->string('image_two', 191)->nullable();
            $table->string('image_three', 191)->nullable();
            $table->string('image_four', 191)->nullable();
            $table->string('image_five', 191)->nullable();
            $table->string('image_six')->nullable();
            $table->string('image_seven')->nullable();
            $table->string('image_eight')->nullable();
            $table->string('image_nine')->nullable();
            $table->string('image_ten')->nullable();
            $table->string('service', 191)->nullable();
            $table->string('client', 191)->nullable();
            $table->string('link', 191)->nullable();
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
        Schema::dropIfExists('portfolio');
    }
}
