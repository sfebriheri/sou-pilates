<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'bio',
        'image',
        'specialties',
        'experience',
    ];
    
    public function classes()
    {
        return $this->belongsToMany(PilatesClass::class);
    }
}