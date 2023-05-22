<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'hoten', 'soluongve', 'diachi', 'sodienthoai', 'ngaysudung', 've_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'customer';

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 've_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
