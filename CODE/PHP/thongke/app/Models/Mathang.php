<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mathang extends Model
{
    use HasFactory;
    protected $fillable = ['ten_mat_hang', 'loai_mat_hang_id','gia'];

    public function chitietdonhang() {
        return $this->hasMany(Chitietdonhang::class);
    }
    public function donhang() {
        return $this->hasMany(Donhang::class);
    }
    public function loaimathang() {
        return $this->belongsTo(Loaimathang::class);
    }
}
