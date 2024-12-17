<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bomon extends Model
{
    use HasFactory;

    protected $table = 'bomon'; // Bảng tương ứng
    protected $primaryKey = 'MaBM'; // Khóa chính
    public $timestamps = false ; // Không sử dụng timestamps

    protected $fillable = ['TenBM'];
}
