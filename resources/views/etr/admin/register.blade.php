<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">

    <title>Register</title>
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
            <a class="navbar-brand" href="/admin"><img src="assets/EFBC.png" width="120" alt=""></a>
            <button class="navbar-toggler  bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <a class="nav-link p-lg-3 me-5 fs-5" id="hove" href="#"><i class="fa fa-user-circle pe-3"></i>{{$LoggedUserInfo->name}}</a>
                <div class="navbar-nav">
                    <a href="logout"><button class="btn fs-5 ms-3" id="hove"> <i class="fa fa-sign-out"></i> Logout</button></a>
                </div>

            </div>
        </div>
    </nav>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-dark" style="border-radius: 1rem;">
                    <div class="text-center" style="width:100%; height: 150px; background: #FF6F31;border-radius: 15px 15px 0px 0px;"><br>
                        <h4 style="font-size:80px;" class="text-light">Registration</h4>
                    </div>
                    <div class="card-body p-5">
                        <form action="reg" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <center>
                                <div class="results">
                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                    @endif
                                </div>
                            </center>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Fullname</label>
                                <input value="{{ old('name')}}" type="text" name="name" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="Eg. Juan Dela Cuz">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Email</label>
                                <input value="{{ old('email')}}" type="text" name="email" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="Eg. juandelacruz@gmail.com">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Password</label>
                                <input type="password" name="password" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="5-12 characters">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="row d-flex align-items-center justify-content-center mt-3">
                                <button type="submit" class="btn text-white col-md-5 fs-4 fw-normal" style="background-color:#FF6F31;border-radius: 30px;">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>