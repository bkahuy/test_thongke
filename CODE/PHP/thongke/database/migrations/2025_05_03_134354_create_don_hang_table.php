<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id('MaDH');
            $table->date('NgayLap');
            $table->unsignedBigInteger('MaKH');
            $table->foreign('MaKH')->references('MaKH')->on('khach_hang');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};
