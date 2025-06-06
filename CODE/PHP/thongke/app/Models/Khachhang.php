<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;

    protected $fillable = ['TenKH', 'DienThoai'];

    public function DonHang() {
        return $this->hasMany(DonHang::class, 'MaKH', 'MaKH');
    }

}
