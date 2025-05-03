<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    use HasFactory;
    protected $fillable = ['ten_khach_hang', 'email', 'so_dien_thoai'];

    public function DonHang(){
        return $this->hasMany(Donhang::class);
    }
}
