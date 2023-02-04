<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
</head>
<body>
<div class="container mt-3">
  <div class="mt-4 p-4 bg-secondary text-light rounded">
    <h1>Enrollment Form</h1> 
    <p class="para">Create your personal account.Already member?<a href="{{URL::to('login')}}">login</a> here..</p> 
  </div>
  <div class="mt-5 card">
    <div class="card bg-light text-dark">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 mb-5">
                <h2 class="text-center">Signup form</h2>
                <br>
                <form method="post" class="cmxform"  action="{{URL::to('store-student')}}" enctype="multipart/form-data" id="signUpForm" name = "theform">
                        {{csrf_field()}}
                        <div class="mb-3 mt-3">
                            <label for="name">Name:</label>
                            <input type="text" name="name" onkeyup="checkform()" class="form-control" id="name" placeholder="Write your name" name="name" minlength="2" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" name="email" onkeyup="checkform()" class="form-control email" id="email" placeholder="write your email address" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="contact">Contact:</label>
                            <input type="text" name="contact" onkeyup="checkform()" class="form-control" id="contact" placeholder="018********" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="address">Address:</label>
                            <input type="text" name="address" onkeyup="checkform()" class="form-control" id="address" placeholder="write your address" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="contact">DOB:</label>
                            <input type="date" name="dob" onkeyup="checkform()" class="form-control" id="dob" placeholder="2000-11-1" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="contact">Gender:</label>
                            <select name="gender" class="form-control" id="Gender" type="text"  placeholder = "Mention your gender" required  >
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pass1">Password:</label>
                            <input type="password" name="pass1" onkeyup="checkform()" class="form-control" id="pass1" placeholder="Enter password" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass2">Confirm Password:</label>
                            <input type="password" class="form-control" name="pass2" onkeyup="checkform()" id="pass2" placeholder="Same password previously entered" required>
                        </div>
                        <br>
                        <div class = "row">
                            <div class= "col-sm-6 update">
                                <input type="submit" id="submitbutton" disabled="disabled" name = "submit" class="btn btn-primary"  value="Sign Up" />
                            </div>
                            <div class="col-sm-6 ">
                                <!-- <input type="submit" id ="resetbtn" class="btn btn-danger" onclick="resetText()" /> -->
                                <button data-id ="1" class="btn btn-danger" onclick="resetText(this); return false;">reset</button>
                            </div>
                        </div>
                      <div>
                      <small> already sign up? <a href = "{{URL::to('login')}}">login</a> </small>  
                      </div>
                     
                  </form>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- <script src="{{asset('js/script.js')}}"> -->

<script> 
  
    function resetText(e)
    {
        //alert('working');
        var textBoxes =e.getAttribute('data-id');
        alert(textBoxes);
        // for (var ii=0;ii<tb.length;ii++)
        // {
        //     if(tb[ii].type=='text')
        //     {
        //         tb[ii].value='';
        //     }
        //     else{
                
        //     }

        // }
    }
</script>
</body>
</html>


