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
        Schema::create('ngajis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('santri_id')->unsigned();
            $table->string('nama_santri');
            $table->string('jenis_ngaji');
            $table->string('halaman');
            $table->string('tanggal');
            $table->string('status');
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
        //
    }
};
