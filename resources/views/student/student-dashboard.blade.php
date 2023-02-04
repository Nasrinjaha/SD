@extends('student.layout.full')
@section('content')
<div>
    <div class="cen">
        <h2>Students Profile</h2>
    </div>
    <br>
    <div class = "img">
    <img src ="{{URL::asset('/image/User.png')}}" style="border:1px solid black;border-radius:50%;" alt = "user image" class = " center">
    </div>
    <div class = "data">
        <h2>{{Session::get('id')}}</h2>
        <h2>{{Session::get('user')}}</h2>
        <h2>{{Session::get('email')}}</h2>
    <br>
    </div>
</div>  
@stop