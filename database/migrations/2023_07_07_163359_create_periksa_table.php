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
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_daftar_poli");
            $table->foreign("id_daftar_poli")->references("id")->on("daftar_poli")->onDelete("cascade");
            $table->dateTime("tgl_periksa");
            $table->text("catatan");
            $table->integer("biaya_periksa");
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
        Schema::dropIfExists('periksa');
    }
};
