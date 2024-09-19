<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'specilisation',
        'isPublished',
        'isActive',
    ];
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
