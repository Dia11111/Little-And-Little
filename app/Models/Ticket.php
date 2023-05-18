<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tenve', 'slug_ve', 'mota', 'soluong', 'tinhtrang', 'kickhoat', 'giave'
    ];
    protected $primaryKey = 'id';
    protected $table = 'ticket';

    public function customer() {
        return $this->hasMany(Customer::class);
    }
}