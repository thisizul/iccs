<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitrahmasuks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->longtext('nama');
            $table->integer('jumlahjiwa');
            $table->integer('jumlahberas')->nullable();
            $table->integer('jumlahuang')->nullable();
            $table->integer('setberas')->nullable();
            $table->integer('setuang')->nullable();
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
        Schema::dropIfExists('fitrahmasuks');
    }
};
