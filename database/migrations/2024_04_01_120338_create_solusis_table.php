<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('solusis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_solusi')->unique();
            $table->unsignedBigInteger('id_kerusakan');
            $table->string('nama_solusi');
            $table->timestamps();

            $table->foreign('id_kerusakan')->references('id')->on('kerusakans')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('solusis');
    }
};
