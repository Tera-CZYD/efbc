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

    <title>Update Ministry</title>
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
                    <div class="text-center" style="width:100%; height: 100px; background: #FF6F31;border-radius: 15px 15px 0px 0px;"><br>
                        <h4 style="font-size:50px;" class="text-light">Ministry Details</h4>
                    </div>
                    <div class="card-body p-5">
                        @foreach($mins as $min)
                        <form action="updateMinistry/{{$min->id}}" method="post">
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
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Name of Ministry</label>
                                <input value="{{ $min->name }}" type="text" name="name" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="Eg. Juan Dela Cuz">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">1st Image</label>
                                <input type="hidden" value="{{$min->img1}}" name="oldimg1">
                                <input type="file" name="img1" class="form-control" style="background: #F2F2F2; border-radius: 10px; ">
                                <span>{{$min->img1}}</span><br><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">2nd Image</label>
                                <input type="hidden" value="{{$min->img2}}" name="oldimg2">
                                <input type="file" name="img2" class="form-control" style="background: #F2F2F2; border-radius: 10px; ">
                                <span>{{$min->img2}}</span><br><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Title / Verse</label>
                                <input type="text" name="ver" value="{{ $min->verse }}" class="form-control" style="background: #F2F2F2; border-radius: 10px; ">
                                <span class="text-danger">@error('ver'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="form-outline form-white mb-1">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Caption</label>
                                <input type="text" name="cap" value="{{ $min->caption }}" class="form-control" style="background: #F2F2F2; border-radius: 10px; ">
                                <span class="text-danger">@error('cap'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="row d-flex align-items-center justify-content-center mt-3">
                                <button type="submit" class="btn text-white col-md-5 fs-4 fw-normal" style="background-color:#FF6F31;border-radius: 30px;">
                                    Submit
                                </button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>