<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NienKhoa extends Model
{
    use HasFactory;

    protected $table = 'nienkhoa';
    protected $primaryKey = 'MaNK';

    protected $fillable = [
        'TenNK',
        'TGbatdau',
        'TGketthuc',
    ];
}