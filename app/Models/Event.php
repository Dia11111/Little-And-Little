<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tensukien', 'slug_sukien', 'chitietsukien', 'image', 'tinhtrang', 'kichhoat', 'giave', 'ngaybatdau', 'ngayketthuc', 'diadiem'
    ];
    protected $primaryKey = 'id';
    protected $table = 'event';
}
