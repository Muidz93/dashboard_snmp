<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irds', function (Blueprint $table) {
            $table->string('sn');
            $table->string('merk');
            $table->string('type');
            $table->string('owner');
            $table->string('control');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            // Cara menambah kolom tanpa hapus data di terminal :
            // php artisan make:migration add_channel_columns_to_irds_table --table=irds
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('irds');
    }
}
