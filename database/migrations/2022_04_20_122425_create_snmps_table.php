<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snmps', function (Blueprint $table) {
            $table->id();
            $table->string('ip_control');
            $table->double('ts_bitrate');
            $table->double('video_bitrate');
            $table->string('status_sat');
            $table->string('status_ip');
            $table->double('margin');
            $table->string('service');
            $table->string('kualitas');
            $table->string('status_video');
            $table->string('PID_audio');
            $table->string('PID_audio2');
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
        Schema::dropIfExists('snmps');
    }
}
