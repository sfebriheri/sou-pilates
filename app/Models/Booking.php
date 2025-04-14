<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'class_id',
        'date',
        'time',
        'message',
        'status',
    ];
    
    public function pilatesClass()
    {
        return $this->belongsTo(PilatesClass::class, 'class_id');
    }
}
