@extends('admin.layout.full')
@section('content')
<div class="container">
    <div class="mt-5 card">
    <div class="card bg-light text-dark">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 mb-5">
                <h2 class="text-center">Create Course</h2>
                <br>
                <form method="post" class="cmxform"  action="{{URL::to('store-course')}}" enctype="multipart/form-data" id="signUpForm" name = "theform">
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
                            <label for="name">Course Name :</label>
                            <input type="text" name="name"  class="form-control"  placeholder="Write course name"   required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Course Code :</label>
                            <input type="text" name="code"  class="form-control" placeholder="give course code" required>
                        </div>
                        <br>
                        <div class = "row">
                            <div class= "col-sm-6 update1">
                                <input type="submit" name = "submit" class="btn btn-primary"  value="Create" />
                            </div>
                            <div class="col-sm-6 ">
                               <a href="{{URL::to('back')}}" class="btn btn-danger">back</a>
                            </div>
                        </div>
                     
                  </form>
            </div>
        </div>
    </div>
  </div>
</div>
</div>  
@stop