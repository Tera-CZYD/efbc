<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <script>
    $(function() {
      $("#example").DataTable();
      $("#addUser").click(function() {
        $("#myModal").modal('show');
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>EFBC</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        #hove {
            font-weight: bold;
            color: black;
        }

        #hove:hover {
            color: #FF6F31;
        }
    </style>

</head>

<body>
    <nav style="background: rgba(255, 255, 255, 0.9); box-shadow: 5px 6px 10px rgba(0, 0, 0, 0.58);" class="navbar navbar-expand-xl navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="profile"><img src="assets/EFBC.png" width="120" alt=""></a>
            <button class="navbar-toggler  bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <p class="nav-link p-lg-3 me-5 fs-5" id="hove"><i class="fa fa-user-circle pe-3"></i>{{$LoggedUserInfo->name}}</p>
                <div class="navbar-nav">
                    <a href="logout"><button class="btn fs-5 ms-3" id="hove"> <i class="fa fa-sign-out"></i> Logout</button></a>
                </div>

            </div>
        </div>
    </nav>

    <!-- The Modal -->


    <div class="row" style="width: 100%;">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav mt-3 nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <ul class="nav nav-pills flex-column mb-auto" style="width: 100%;">
                                <li class="nav-item">
                                    <a href="profile" class="nav-link active">
                                        Dashboard
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <h4 style="color: #FF6F31;">Pages</h4>
                            <hr style="width: 180px;" class="ms-4">
                            <div class="row">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li style="width: 100%;">
                                        <a href="editHome" class="nav-link text-white">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editAnnouncements" class="nav-link text-white">
                                            Announcements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editMinistries" class="nav-link text-white">
                                            Ministries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="editAbout" class="nav-link text-white">
                                            About
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="text-center mb-5" style="height: 100px; background: #FF6F31;"><br>
                        <h3 style="font-size:50px;" class="text-light">Dashboard</h3>
                    </div>
                    @if(Session::get('success'))
                        <div class="alert alert-success text-center">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="alert alert-danger  text-center">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                    <div class="container">
                        <div class="row">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-8 mt-3 mb-3">
                                        <button id="addUser" type="button" class="btn btn-primary">
                                            Add User <i class='fa fa-plus-square'></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row  justify-content-center">
                                    <div class="col-sm-10 ">
                                        <table id="example" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($lists as $list)
                                                <tr>
                                                    <td class="pt-3">
                                                        {{$list->name}}
                                                    </td>
                                                    <td class="pt-3">
                                                        {{$list->email}}
                                                    </td>
                                                    <?php 
                                                        if( $LoggedUserInfo->email  ==  $list->email  ){
                                                            echo '<td class="pt-3"><p class="text-success">Your Account</p></td>';
                                                        }
                                                        else{
                                                            echo "<td></td>";
                                                        }
                                                    ?>
                                                             
                                                   
                                                    <td>
                                                        <ul class="list-group list-group-horizontal">
                                                        <?php 
                                                        if( $LoggedUserInfo->email  ==  $list->email  ){?>
                                                           <li class="list-group-item"><a href="user/{{ $list->id }}"><button class="btn bg-success text-white">Update</button></a></li>
                                                       <?php }
                                                    ?>
                                                            <li class="list-group-item"><a href='deleteUser/{{ $list->id }}' class="nav-link text-danger"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add User Modal -->
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard=true>
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="reg" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="form-outline form-white mb-1">
                                    <label for="email" class="form-label fs-5" style="color:#FF6F31;">Fullname</label>
                                    <input value="{{ old('name')}}" type="text" name="name" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="Eg. Juan Dela Cuz">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-outline form-white mb-1">
                                    <label for="email" class="form-label fs-5" style="color:#FF6F31;">Email</label>
                                    <input value="{{ old('email')}}" type="text" name="email" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="Eg. juandelacruz@gmail.com">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-outline form-white mb-1">
                                    <label for="email" class="form-label fs-5" style="color:#FF6F31;">Password</label>
                                    <input type="password" name="password" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="5-12 characters">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close-button" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary mt-3 mb-3" name="add">Add Admin</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-5 ps-5 pe-5 bg-light text-dark text-center">
        <div class="row">
            <div class="col col-md-4 text-start">
            </div>
            <div class="col col-md-4">
                <a class="navbar-brand" href="profile"><img src="assets/EFBC.png" width="200" alt=""></a>
                <p class="fs-6">© 2022 Eguia Faith Baptist Church</p>
                <p class="fs-6">All Rights Reserved</p>
            </div>
            <div class="col col-md-4">
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col col-md-12">
                <p class="fs-6 text-secondary">Made by Ruel Czydrick Distor</p>
            </div>
        </div>
    </div>


</body>

</html>