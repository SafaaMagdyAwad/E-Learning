<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'star',
        'numberOfStudents',
        'duration',
        'isPopular',
        'isPublished',
        'image',
        'instructor_id',
        'category_id',
    ];
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
