<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Session;

class EnrollmentController extends Controller
{
    public function createStudent(){
        return view('create-student');
    }
    public function login(){
        return view('login');
    }
    public function storeStudent(request $r){
        $name    = $r->name;  
        $email   = $r->email;
        $address = $r->address;
        $contact = $r->contact;
        $pass = $r->pass1;
        $pass2 = $r->pass2;
        $dob = $r->dob;
        $gender = $r->gender;
        $maxid = Student::max('unique_id');
        if($pass==$pass2){
            $users = Student::select("*")
                ->where("email", "=", $email)
                ->first();  
            if($users){
                echo '<span style= "color:grees;">duplicate email!';
            } 
            else{
                $obj = new Student();
                $obj->unique_id =  $maxid+1;
                $obj->name = $name;
                $obj->email = $email;
                $obj->address = $address;
                $obj->contact = $contact;
                $obj->gender = $gender;
                $obj->dob = $dob;
                $obj->parents = "NULL";
                $obj->pass = $pass;
                if($obj->save()){
                    echo '<span style= "color:grees;">successfully inserted!!!';
                }
                else{
                    echo '<span style= "color:red;">ionsertion failed!!';
                }
            } 
        }
        else{
            echo '<span style= "color:red;">password doesn\'t match!!!';
        }
       
    }

    public function postLogin(Request $r){
          $email = $r->mail;
          $pass  =  $r->pass;
          $users = Student::select("*")
                    ->where("email", "=", $email)
                    ->where("pass", "=", $pass )
                    ->first();     
         if($users){
            $id = $users->s_id;
            //echo($id);
            $student = Student::find($id); 
            $name = $student->name;
            $email = $student->email;
            Session:: put('user',$name);
            Session:: put('email',$email);
            Session:: put('id',$id);
            Session:: put('Role','student');
           return redirect()->to('student-dashboard');
         }
         else{
            $users = Teacher::select("*")
                    ->where("email", "=", $email)
                    ->where("pass", "=", $pass )
                    ->first();
            if($users){
                $id = $users->t_id;
                //echo($id);
                $student = Teacher::find($id); 
                $name = $student->name;
                $email = $student->email;
                Session:: put('user',$name);
                Session:: put('email',$email);
                Session:: put('id',$id);
                Session:: put('Role','teacher');
                return redirect()->to('teacher-dashboard');
            }
            else{
                $users = Admin::select("*")
                    ->where("email", "=", $email)
                    ->where("pass", "=", $pass )
                    ->first();
                    if($users){
                        $id = $users->a_id;
                        $admin = Admin::find($id);
                        $name = $admin->name;
                        $email = $admin->email;
                        Session:: put('user',$name);
                        Session:: put('email',$email);
                        Session:: put('id',$id);
                        Session:: put('Role','admin');
                        return redirect()->to('admin-dashboard');
                    }
                    else{
                        return redirect()->back()->with('err_msg','wrong pass or email');
                    }
            }
         }
        
    }

    public function StudentDashboard(){
        return view('student.student-dashboard');
    }


    public function EditStudentpass(){  
        return view('student.updatepassword');
    }


    public function UpdateStudentpass(Request $r){
        $oldpass = $r->pass0;
        $newpass1 = $r->pass1;
        $newpass2 = $r->pass2;
        $id = Session::get('id');
        $student = Student::find($id);
        $realpass = $student->pass;
        if($oldpass==$realpass){
            if($newpass1==$newpass2){
                $student->pass = $newpass1;
                if($student->save()){
                    return redirect()->back()->with('suc_msg','successfully updated');
                }
            }
            else{
                return redirect()->back()->with('err_msg','password doesn\'t match');
            }
        }
        else{
           return redirect()->back()->with('err_msg','wrong old password');
        }
    }


    public function EditStudentinfo(){
        $id = Session::get('id');
        $student = Student::find($id);
        //echo($student->name);
        return view('student.updateinfo',compact('student'));
    }

    public function UpdateStudentinfo(Request $r){
        $id = Session::get('id');
        $student = Student::find($id);
        $student->name = $r->name;
        $student->email = $r->email;
        $student->address = $r->address;
        $student->contact = $r->contact;
        $student->dob = $r->dob;
        $student->gender = $r->gender;
        $student->parents = $r->parents;
        if($student->save()){
            return redirect()->back()->with('suc_msg','successfully updated');
        }
        else{
            return redirect()->back()->with('err_msg','update failed');
        }
    }

    public function Enrollment(){
        $courses = Course::all();
         return view('student.enrollment',compact('courses'));
    }

    public function Enrol_confirm(Request $R){
        $courses = Course::all();
        $count = Course::all()->count();
        $Arr = array();
        $errArr = array();
        for($i = 0; $i<$count;$i++){
           $index = "check".strval($i);
           $type = "type".strval($i);
           $section ="section".strval($i);
           $val =  $R->$index;
          
           $myArr = array();
           if(isset($val)){
                // echo $index." -> " ;
                // echo $courses[$i]->name. " -> ";
                // echo $R->$type. " ->"; 
                // echo $R->$section; 
                // echo '<br>';
                // if($R->$type=="" && $R->$section==""){
                //     return redirect()->back()->with('err_type_section',$i);
                // }
                if($R->$type==""){
                    $idx = 'err_type'.$i;
                    
                    //return redirect()->back()->with($idx,'please select a type');
                    $errArr[$idx] = 'please select a type';
                }
                if($R->$section==""){
                    $idx = 'err_section'.$i;
                   
                    //return redirect()->back()->with($idx,'please select a section');
                    $errArr[$idx] = 'please select a section';
                }
                array_push($myArr,$courses[$i]->name,$R->$type,$R->$section);
                array_push($Arr,$myArr);
           }
          
        }
       
       
        if(isset($errArr)){
            return redirect()->back()->with('err',$errArr);
        }
        print_r($Arr);
        echo '<br>';
        // echo $myArr;
    }

    public function Logout(){
        Session::forget(['id','user','email']);
        return redirect()->to('login');
    }
    
}
