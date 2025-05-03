<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Donhang extends Model
{
    use HasFactory;

    protected $fillable = ['MaKH', 'MaHang', 'SoLuong', 'NgayLap'];

    public function chitietdonhang() {
        return $this->hasMany(ChiTietDonHang::class, 'MaDH', 'MaDH');
    }

    public function khachhang() {
        return $this->belongsTo(KhachHang::class, 'MaKH', 'MaKH');
    }

    public function mathang() {
        return $this->belongsTo(MatHang::class, 'MaHang', 'MaHang');
    }


}
