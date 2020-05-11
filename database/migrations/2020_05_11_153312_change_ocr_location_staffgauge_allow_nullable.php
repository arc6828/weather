<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOcrLocationStaffgaugeAllowNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ocrs', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->string('photo')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
            $table->text('json_line')->nullable()->change();
            $table->string('lineid')->nullable()->change();
            $table->text('numbers')->nullable()->change();
            $table->string('staffgaugeid')->nullable()->change();
            $table->string('locationid')->nullable()->change();
            $table->string('msgocrid')->nullable()->change();
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->string('address')->nullable()->change();
            $table->string('latitude')->nullable()->change();
            $table->string('longitude')->nullable()->change();
            $table->string('typegroup')->nullable()->change();
            $table->string('lineid')->nullable()->change();
            $table->string('staffgaugeid')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
            $table->string('msglocid')->nullable()->change();
        });
        Schema::table('staffgauge', function (Blueprint $table) {
            $table->string('addressgauge')->nullable()->change();
            $table->string('amphoe')->nullable()->change();
            $table->string('district')->nullable()->change();
            $table->string('province')->nullable()->change();
            $table->float('latitudegauge')->nullable()->change();
            $table->float('longitudegauge')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocrs', function (Blueprint $table) {
            //
        });
    }
}
