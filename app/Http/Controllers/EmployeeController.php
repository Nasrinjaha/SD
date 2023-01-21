<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function createEmployee(){
        return view('create-employee');
    }
    public function storeEmployee(request $r){
        $name    = $r->name;
        $email   = $r->email;
        $pswd    = $r->pswd;
        $address = $r->address;

        $obj = new Employee();
        $obj->name = $name; 
        $obj->email = $email;
        $obj->pswd = $pswd;
        $obj->address = $address;
        if($obj->save()){
            echo "successfully inserted";
        }
        else{
            echo " insertion failed";
        }
    }

    public function viewEmployees(){
        $employees = Employee::all();
        return view('view-employees',compact('employees'));
    }
    public function editEmployee($id){
        $employee = Employee::find($id);                 //Emploee ta ki exactly ??
        return view('edit-employee',compact('employee'));
    }
    public function updateEmployee(request $r,$id){
            $employee = Employee::find($id);
            $employee->name = $r->name;
            $employee->email = $r->email;
            $employee->address = $r->address;
            if($employee->save()){
                $employees = Employee::all();
                return view('view-employees',compact('employees'));
            }
    }
    public function deleteEmployee($id){
        $employee = Employee::find($id);
        if($employee->delete()){
            return redirect()->to('employees');
        }
    }
}

