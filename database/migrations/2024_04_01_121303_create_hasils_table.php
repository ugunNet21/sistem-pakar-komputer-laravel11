<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gejala');
            $table->unsignedBigInteger('id_kerusakan');
            $table->timestamps();

            $table->foreign('id_gejala')->references('id')->on('gejalas')->onDelete('cascade');
            $table->foreign('id_kerusakan')->references('id')->on('kerusakans')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('hasils');
    }
};
