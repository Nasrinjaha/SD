<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Employees</title>
    <style>
        .a{
            padding-left:20%;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-2">
            <a class="btn btn-success " href="{{URL::to('create-employee')}}">Create</a>
        </div>
        <div class="text-center a">
            <h2>Employee Table</h2>
        </div>
    </div>         
  <table class="table mt-2">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Adddress</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($employees as $e)
    <tr>
        <td>{{$e->name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->address}}</td>
        <td>
            <a class="btn btn-primary" href="{{URL:: to('edit-employee/'.$e->id)}}">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$e->id}}">
                Delete
            </button>
            <!-- The Modal -->
            <div class="modal" id="myModal{{$e->id}}">
                <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Delete Confirmation!</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    Do you really want to delete <b>{{$e->name}}</b>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <a class = "btn btn-success" href="{{URL::to('delete-employee/'.$e->id)}}">yes</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    </div>
                    
                </div>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
</html>