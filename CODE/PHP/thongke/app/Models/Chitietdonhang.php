<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $fillable = ['MaDH', 'MaHang', 'SoLuong'];

    public function donhang() {
        return $this->belongsTo(DonHang::class, 'MaDH', 'MaDH');
    }

    public function mathang() {
        return $this->belongsTo(MatHang::class, 'MaHang', 'MaHang');
    }

}

