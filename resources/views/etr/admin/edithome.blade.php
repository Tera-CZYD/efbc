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
            $("#addSched").click(function() {
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

<body style="background-color: #E5E5E5;">
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
    <div class="row" style="width: 100%;">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="nav mt-3 nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <ul class="nav nav-pills flex-column mb-auto" style="width: 100%;">
                                <li class="nav-item">
                                    <a href="profile" class="nav-link text-light">
                                        Dashboard
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <h4 style="color: #FF6F31;">Pages</h4>
                            <hr style="width: 180px;" class="ms-4">
                            <div class="row" style="width: 100%;">
                                <ul class="nav nav-pills flex-column mb-auto" style="width: 100%;">
                                    <li style="width: 100%;">
                                        <a href="editHome" class="nav-link text-white active">
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
                    <div class="col col-md-12">
                        <div class="text-center mb-5" style="height: 100px; background: #FF6F31;"><br>
                            <h3 style="font-size:50px;" class="text-light">Home</h3>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success text-center ">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="alert alert-danger  text-center">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="conatiner mb-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="bg-white col-md-8 shadow" style="border-radius: 15px;">
                                        <div class="row p-4 rounded shadow-md" style="margin: 20px 70px 20px 70px;">

                                            @foreach($heros as $hero)
                                            <form action="updateHero" method="post" enctype=”multipart/form-data”>
                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                <input type="hidden" name="id" value="{{$hero->id}}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="name" class="form-label fs-5" style="color:#FF6F31;">Church Name</label>
                                                        <input value="{{$hero->churchName}}" type="text" name="churchname" class="form-control" placeholder="Eg. Juan Dela Cruz" style="background: #F2F2F2; border-radius: 10px;" required>
                                                        <span class="text-danger">@error('churchname'){{ $message }} @enderror</span><br>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="email" class="form-label fs-5" style="color:#FF6F31;">Church Type</label>
                                                        <input value="{{$hero->churchType}}" type="text" name="churchtype" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="juandelacruz@gmail.com" required>
                                                        <span class="text-danger">@error('churchtype'){{ $message }} @enderror</span><br>
                                                    </div class="mt-3">
                                                </div>
                                                <div class="mt-3">
                                                    <label for="subject" class="form-label fs-5" style="color:#FF6F31;">Tagline</label>
                                                    <input value="{{$hero->tagline}}" type="text" name="tagline" class="form-control" style="background: #F2F2F2; border-radius: 10px;" placeholder="Subject of query" required>
                                                    <span class="text-danger">@error('tagline'){{ $message }} @enderror</span><br>
                                                </div>
                                                <div class="mt-3 mb-3">
                                                    <label for="subject" class="form-label fs-5" style="color:#FF6F31;">Background Image</label>
                                                    <input class="form-control" type="hidden" id="formFile" name="oldimage" value="{{$hero->img}}">
                                                    <input type="file" class="form-control" name="image">
                                                    <span class="text-danger">@error('newimage'){{ $message }} @enderror</span><br> <span>{{$hero->img}}</span>

                                                </div>
                                                <div class="row d-flex align-items-center justify-content-center mt-3">
                                                    <button type="submit" class="btn text-white col-md-5 fs-4 fw-normal" style="background-color:#FF6F31;border-radius: 10px;">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="conatiner mb-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="bg-white col-md-11 shadow" style="border-radius: 15px;">
                                    <div class="row p-4 rounded shadow-md">
                                        <div class="col col-md-12">
                                            <div class="row col-md-2">
                                                <button id="addSched" type="button" class="btn btn-primary mb-3 ms-5">
                                                    Add Schedule <i class='fa fa-plus-square'></i>
                                                </button>
                                            </div>
                                            <div class="row">
                                                <table id="example" class="table table-hover" style="width:100%">
                                                    <thead>

                                                        <tr>
                                                            <th>Time</th>
                                                            <th>Activity</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($scheds as $sched)
                                                        <form action="/updateSched" method="post">
                                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                            <input type="hidden" name="id" value="{{$sched->id}}">
                                                            <tr>
                                                                <td class="pt-4">{{$sched->time}}</td>
                                                                <td class="pt-4">{{$sched->description}}</td>
                                                                <td>
                                                                    <ul class="list-group list-group-horizontal">
                                                                        <li class="list-group-item"><a href="sched/{{ $sched->id }}"><button class="btn bg-success text-white">Update</button></a></li>
                                                                        <li class="list-group-item"><a href='delete/{{ $sched->id }}' class="nav-link text-danger"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </form>
                                                        @endforeach
                                                    </tbody>
                                                    <tbody>

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
        </div>
    </div>



    <!-- Add Schedule Modal -->
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard=true>
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Schedule</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="addSched" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="form-outline form-white mb-1">
                                    <label class="form-label fs-4" style="color:#FF6F31;">Time</label>
                                    <input required type="text" name="addtime" class="form-control mt-1 mb-3" style="background: #F2F2F2; border-radius: 10px; ">
                                    <span class="text-danger">@error('addtime'){{ $message }} @enderror</span><br>
                                </div>
                            </div>
                            <div class="row">
                                <label class="form-label fs-4" style="color:#FF6F31;">Description</label>
                                <input required type="text" name="adddescription" class="form-control mt-3 mb-3" style="background: #F2F2F2; border-radius: 10px; ">
                                <span class="text-danger">@error('adddescription'){{ $message }} @enderror</span><br>
                            </div>

                        </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close-button" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary mt-3 mb-3" name="add">Add Schedule</button>
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