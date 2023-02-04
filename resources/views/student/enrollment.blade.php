@extends('student.layout.full')
@section('content')
@php
  $n = 10;
  $i= 0;
  $errArr = array();
  if(Session::has('err')){
    $errArr=Session::get('err');
  }
@endphp

<div>
<div class="container">
  <h2>Enrollment Form</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>     
  <form method = "post" action="{{URL::to('enrol-confirm')}}">     
    {{csrf_field()}}  
    @if(Session::has('err_msg'))
      <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>{{Session::get('err_msg')}}!</strong>
      </div>
    @endif
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Check</th>
          <th>Section</th>
          <th>Course</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
        @foreach($courses as $c)
        @php
          $check = "check" . strval($i);
          $type = "type" . strval($i);
          $section = "section" . strval($i);
          $err_type = 'err_type'.$i;
          $err_section = 'err_section'.$i;
          $i++;
         
        @endphp
        <tr>
          <td>
          <div class="form-check">
            <label class="form-check-label" for="check1">
              <input type="checkbox" class="form-check-input" id="check1" name="{{ $check }}" value="something">Option {{$i}}
            </label>
          </div>
          </td>
          <td>
            <select class="form-select" aria-label="Default select example" name="{{ $section }}">
                  <option value="">--select Section--</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
            </select>
            @if(isset($errArr[$err_section]))
            <br>
            <span style="color:red">{{$errArr[$err_section]}}!</span> 
            @endif
          <td>
                {{$c->name}}
          </td>
          <td>
            <select class="form-select" aria-label="Default select example" name="{{ $type }}">
                  <option value="">--select type--</option>
                  <option value="regular">Regular</option>
                  <option value="recourse">Recourse</option>
                  <option value="retake">Retake</option>
            </select>
            @if(isset($errArr[$err_type]))
            <br>
            <span style="color:red">{{$errArr[$err_type]}}!</span> 
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  <button class = "btn btn-primary" value = "submit" type = "submit" value = "submit">Enroll</button>
</form>
</div>
</div>  
@stop