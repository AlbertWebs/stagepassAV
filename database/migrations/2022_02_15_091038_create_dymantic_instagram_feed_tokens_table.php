<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDymanticInstagramFeedTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dymantic_instagram_feed_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profile_id');
            $table->string('access_code');
            $table->string('username');
            $table->string('user_id');
            $table->string('user_fullname');
            $table->string('user_profile_picture');
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
        Schema::dropIfExists('dymantic_instagram_feed_tokens');
    }
}
