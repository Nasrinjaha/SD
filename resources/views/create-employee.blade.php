<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Employee Create</title>
</head>
<body>
    <div class="container mt-3">
    <h2>Stacked form</h2>
        <form method = "post" action="{{URL::to('store-employee')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            </div>
            <div class="mb-3">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary" name ="submit" value= "submit" >Submit</button>
            <a class="btn btn-success" href="{{URL::to('employees')}}">Employees</a>
        </form>

    </div>
</body>
</html>