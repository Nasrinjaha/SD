<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .bg-secondary {
        background-color: #054b898a!important;
    }
    .col{
        color:#054b898a!important;
    }
    .update {
        padding-left:40%;
        
      }
    .para{
        font-size:17px ;
        font-family:Helvetica ;
    }
    .cl{
        padding-left:36%;
    }
    .b{
         background-color: #b6c5d5!important;
         
   }
   .new{
       padding-top:8.5%;
   }
   a {
    color: #343a40;
    text-decoration: underline;
}

</style>
</head>
<body>
<div class="container mt-3">
  <div class="mt-4 p-4 bg-secondary text-light rounded">
    <h1>Click And Collect</h1> 
    <p class="para">welcome to our ABC website.Please log in if you are registered before.Otherwise  <a href="{{URL::to('create-student')}}">register</a> here.</p> 
  </div>
  <div class="mt-5 card">
    <div class="card bg-light text-dark">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5 mb-2">
                <h2 class="text-center">Login form</h2>
                @if(Session::has('err_msg'))
                    <div class="alert alert-danger">
                        <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
                    </div>
                @endif
                    <form method="post" class="cmxform" action="{{URL::to('post-login')}}" id="loginForm" name="theform">
                    {{csrf_field()}}
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="text" onkeyup="checkform()" name="mail" class="form-control" id="username"  placeholder="Write your email" />
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="password" onkeyup="checkform()" name="pass" class="form-control" id="password" placeholder="Enter password"  />
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <div class = "row">
                            <div class= "col-sm-6 update">
                                <input type="submit" id="submitbutton" disabled="disabled" name = "login" class="btn btn-primary"  value="Log In" />
                            </div>
                            <div class="col-sm-6 ">
                                <input type="submit" id ="resetbtn" class="btn btn-danger" value="Reset" onclick="resetText()" />
                            </div>
                        </div>
                        <br>
                        <div class = "row">
                                <div class = "col-sm-6">
                                    <small> don't have an account? <a href = "{{URL::to('create-student')}}">create one</a> </small>
                                </div>
                                <div class = "col-sm-6 cl">
                                    <small><a href="#" style="line-decoration:none;">Forgot Password?</a></small>
                                </div>
                        </div> 

                    </form>
            </div>
        </div>
    </div>
  </div>
</div>
<script src="{{URL::to('js/script.js')}}"></script>
<div class="new">
    <footer>
    <div class="text-center p-3 b">
        © 2022 Copyright:
        <a class="text-Blue" href="#">Abc.com</a>
    </div>
    </footer>
</div>
</body>
</html>