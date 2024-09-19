<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'phone',
        'isActive',
    ];
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
