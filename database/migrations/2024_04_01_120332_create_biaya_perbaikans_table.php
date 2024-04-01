<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('biaya_perbaikans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_biaya')->unique();
            $table->unsignedBigInteger('id_kerusakan');
            $table->string('nama_kerusakan');
            $table->integer('biaya');
            $table->timestamps();

            $table->foreign('id_kerusakan')->references('id')->on('kerusakans')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('biaya_perbaikans');
    }
};
