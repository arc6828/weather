<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weathers', function (Blueprint $table) {
            $table->string('profiles2')->nullable();
            $table->string('profiles3')->nullable();
            $table->string('profiles4')->nullable();
            $table->string('profiles5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weathers', function (Blueprint $table) {
            //
        });
    }
}
