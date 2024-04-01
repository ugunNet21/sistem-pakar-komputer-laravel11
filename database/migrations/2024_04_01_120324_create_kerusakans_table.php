<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('kerusakans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kerusakan')->unique();
            $table->string('nama_kerusakan');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kerusakans');
    }
};
