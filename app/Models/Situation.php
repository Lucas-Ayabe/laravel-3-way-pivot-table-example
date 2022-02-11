<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(Student::class, 'attendences');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'attendences');
    }
}
