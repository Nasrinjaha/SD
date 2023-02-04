@extends('student.layout.full')
@section('content')
<div class="container">
    <div class="card-header">
        <h2>Update password form</h2>
    </div>
    <div class="card">
        
        <form method="post" class="cmxform"  action="{{URL::to('update-studentpass')}}" enctype="multipart/form-data" id="signUpForm" name = "theform">
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
            <div class="mb-3">
                <label for="pass1">Old Password:</label>
                <input type="password" name="pass0" class="form-control" id="pass0" placeholder="Enter old password" required>
            </div>
            <div class="mb-3">
                <label for="pass1">Password:</label>
                <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Enter password" required>
            </div>
            <div class="mb-3">
                <label for="pass2">Confirm Password:</label>
                <input type="password" name="pass2"  class="form-control"  id="pass2" placeholder="Same password previously entered" required>
            </div>
            <br>
            <div class = "row">
                <div class= "col-sm-6 update">
                    <input type="submit"  name = "submit" class="btn btn-primary"  value="update" />
                </div>
                <div class="col-sm-6 ">
                    <a href="{{URL::to('student-dashboard')}}" class="btn btn-success">Back</a>
                </div>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>
    
@stop