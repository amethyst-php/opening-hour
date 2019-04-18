<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.opening-hour.data.opening-hour.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->text('schedule')->nullable();
            $table->text('exceptions')->nullable();
            $table->string('target_type')->nullable();
            $table->integer('target_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.opening-hour.data.opening-hour.table'));
    }
}
