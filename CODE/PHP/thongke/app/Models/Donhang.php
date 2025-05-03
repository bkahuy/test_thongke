<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Donhang extends Model
{
    use HasFactory;
    protected $fillable = ['khach_hang_id', 'mat_hang_id', 'so_luong', 'ngay_dat'];

    public function chitietdonhang(){
        return $this->hasMany(Chitietdonhang::class);
    }
    public function khachhang(){
        return $this->belongsTo(Khachhang::class);
    }
    public function mathang(){
        return $this->belongsTo(Mathang::class);
    }

}
