<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $year = date('Y');
        $title = 'Master1'; // Example title

        return view('students.index', compact('students', 'year', 'title'));
    }
}

