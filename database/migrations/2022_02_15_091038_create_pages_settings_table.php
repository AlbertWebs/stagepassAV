<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_name', 191)->nullable();
            $table->integer('sidebar')->default(0);
            $table->integer('sidebar_right')->default(0);
            $table->integer('slider')->default(0);
            $table->integer('menu')->default(0);
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
        Schema::dropIfExists('pages_settings');
    }
}
