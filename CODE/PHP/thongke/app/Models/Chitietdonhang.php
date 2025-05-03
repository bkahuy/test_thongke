<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $fillable = ['don_hang_id', 'mat_hang_id', 'so_luong'];

    public function donhang() {
        return $this->belongsTo(Donhang::class);
    }

    public function mathang() {
        return $this->belongsTo(Mathang::class);
    }
}

