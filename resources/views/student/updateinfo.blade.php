@extends('student.layout.full')
@section('content')
<div class="container">
    <div class="card-header">
        <h2>Update Personal Info form</h2>
    </div>
    <div class="card">
        
        <form method="post" class="cmxform"  action="{{URL::to('update-studentinfo')}}" enctype="multipart/form-data" id="signUpForm" name = "theform">
            {{csrf_field()}}
            @if(Session::has('err_msg'))
                <div class="alert alert-danger">
                    <strong>{{Session::get('err_msg')}}!</strong> .
                </div>
            @endif
            @if(Session::has('suc_msg'))
                <div class="alert alert-success">
                    <strong>{{Session::get('suc_msg')}}!</strong> 
                </div>
            @endif
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" name="name"  class="form-control" id="name" value="{{$student->name}}" minlength="2" required>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email"  class="form-control email" id="email" value="{{$student->email}}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="contact">Contact:</label>
                <input type="text" name="contact"  class="form-control" id="contact" value="{{$student->contact}}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="address">Address:</label>
                <input type="text" name="address"  class="form-control" id="address" value="{{$student->address}}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="dob">DOB:</label>
                <input type="date" name="dob"  class="form-control" id="dob" value="{{$student->dob}}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="parents">Parent:</label>
                <input type="text" name="parents"  class="form-control" id="parents" value="{{$student->parents}}" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control" id="Gender" type="text"  value="{{$student->gender}}" required  >
                    <option value="male" @if($student->gender=='male')selected @endif>Male</option>
                    <option value="female" @if($student->gender=='female')selected @endif>Female</option>
                    <option value="other"  @if($student->gender=='other')selected @endif>Other</option>
                </select>
            </div>
            <br>
            <div class = "row">
                <div class= "col-sm-6 update">
                    <input type="submit"  name = "submit" class="btn btn-primary"  value="update" />
                </div>
                <div class="col-sm-6 ">
                    <a href="{{URL::to('student-dashboard')}}" class="btn btn-success">Back</a>
                </div>
                <br>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>
    
@stop