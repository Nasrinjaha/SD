<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.admin-dashboard');
        //echo('abc');
    }
    public function CreateCourse(){
        return view('admin.create-course');
    }
    public function Back(){
        return redirect()->to('admin-dashboard'); //vaiya ekhane admin.admin-dashboard dile kaj kore na kno?
        //same vabe redirect back dileo?
    }

    public function StoreCourse(Request $r){
            $name = $r->name;
            $c_code  = $r->code;

            $obj = new Course();

            $obj->name = $name;
            $obj->c_code = $c_code;
            if($obj->save()){
                return redirect()->back()->with('suc_msg','Successfully inseretd');
              
            }
            else{
                return redirect()->back()->with('err_msg','Insertion Failed');
            }
    }
}
