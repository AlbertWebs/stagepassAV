<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoterequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quoterequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('lname')->nullable();
            $table->string('content', 191)->nullable();
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
        Schema::dropIfExists('quoterequests');
    }
}
