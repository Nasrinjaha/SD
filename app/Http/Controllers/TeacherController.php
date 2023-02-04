<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Session;

class TeacherController extends Controller
{
    public function TeacherDashboard(){
        //echo('abc');
        return view('teacher.teacher-dashboard');
    }
}
