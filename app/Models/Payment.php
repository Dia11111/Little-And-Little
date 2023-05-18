<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'sothe', 'hotenthe', 'ngayhethan', 'cvv', 'order_code', 'tongtien', 'customer_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'payment';

}
