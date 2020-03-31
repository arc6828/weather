<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffgaugeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffgauge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('addressgauge');
            $table->string('amphoe');
            $table->string('district');
            $table->string('province');
            $table->float('latitudegauge');
            $table->float('longitudegauge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffgauge');
    }
}
