<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaimathang extends Model
{
    use HasFactory;
    protected $fillable = ['ten_loai'];

    public function mathang()
    {
        return $this->belongsTo(Mathang::class);
    }
}
