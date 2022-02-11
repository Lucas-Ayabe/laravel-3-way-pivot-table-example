<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Course;
use App\Models\Situation;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function all(): array
    {
        return [
            'attendences' => Attendence::all(),
            'students' => Student::all(),
            'courses' => Course::all(),
            'situations' => Situation::all(),
        ];
    }

    public function store(Request $request): array
    {
        $studentId = $request->input('student');
        $courseId = $request->input('course');
        $situationId = $request->input('situation');

        Attendence::createFromFk($studentId, $courseId, $situationId);
        return ['attendence' => Attendence::all()];
    }
}
