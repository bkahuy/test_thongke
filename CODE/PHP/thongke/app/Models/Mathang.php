<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mathang extends Model
{
    use HasFactory;

    protected $fillable = ['TenHang', 'DonGia', 'MaLoai'];

    public function loaimathang()
    {
        return $this->belongsTo(LoaiMatHang::class, 'MaLoai', 'MaLoai');
    }

    public function chitietdonhang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'MaHang', 'MaHang');
    }
    public function donhangs()
    {
        return $this->belongsToMany(DonHang::class, 'ChiTietDonHang', 'MaHang', 'MaDH')
            ->withPivot('SoLuong');
    }


}
