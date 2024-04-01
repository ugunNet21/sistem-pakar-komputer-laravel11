<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hasil');
            $table->string('tindakan')->nullable();
            $table->timestamps();

            $table->foreign('id_hasil')->references('id')->on('hasils')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
