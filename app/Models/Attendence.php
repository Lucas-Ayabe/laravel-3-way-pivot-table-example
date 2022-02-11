<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

    public static function createFromFk(int $student, int $course, int $situation)
    {
        $course = Course::where('id', $course)->first();
        $course
            ->situations()
            ->attach($situation, ['student_id' => $student]);
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'attendences');
    }

    public function situation()
    {
        return $this->belongsToMany(Situation::class, 'attendences');
    }

    public function student()
    {
        return $this->belongsToMany(Student::class, 'attendences');
    }
}
