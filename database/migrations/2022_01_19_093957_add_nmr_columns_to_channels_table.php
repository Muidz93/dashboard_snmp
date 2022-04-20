<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNmrColumnsToChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->integer('nmr')->nullable();
            $table->string('nama_chn')->nullable();
            $table->string('kualitas')->nullable();
            $table->string('downlink')->nullable();
            $table->string('source')->nullable();
            $table->string('freq')->nullable();
            $table->string('pol')->nullable();
            $table->string('sr')->nullable();
            $table->string('metro')->nullable();
            $table->string('multicast')->unique();
            $table->string('port')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('channels', function (Blueprint $table) {
            //
        });
    }
}
