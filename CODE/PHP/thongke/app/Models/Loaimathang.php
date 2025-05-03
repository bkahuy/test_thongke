<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaimathang extends Model
{
    use HasFactory;

    protected $fillable = ['TenLoai'];

    public function mathang()
    {
        return $this->hasMany(MatHang::class, 'MaLoai', 'MaLoai');
    }

}
