<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sepedas', function (Blueprint $table) {
            $table->id('id_sepeda');
            $table->string('model');
            $table->integer('harga');
            $table->unsignedBigInteger('peminjam');

            $table->foreign('peminjam')->references('id_user')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepedas');
    }
};
