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
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->unsignedBigInteger('MaDH');
            $table->unsignedBigInteger('MaHang');
            $table->integer('SoLuong');
            $table->primary(['MaDH', 'MaHang']);
            $table->foreign('MaDH')->references('MaDH')->on('don_hang');
            $table->foreign('MaHang')->references('MaHang')->on('mat_hang');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hang');
    }
};
