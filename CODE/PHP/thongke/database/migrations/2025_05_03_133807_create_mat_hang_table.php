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
        Schema::create('mat_hang', function (Blueprint $table) {
            $table->id('MaHang');
            $table->string('TenHang', 100);
            $table->float('DonGia');
            $table->unsignedBigInteger('MaLoai');
            $table->foreign('MaLoai')->references('MaLoai')->on('loai_mat_hang');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mat_hang');
    }
};
