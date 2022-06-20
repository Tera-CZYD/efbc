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

    <title>ADMIN | LOGIN</title>
    <link rel="stylesheet" href="assets/style.css">

</head>

<body style="background-color: #E5E5E5;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-dark" style="border-radius: 1rem;">
                    <div class="text-center" style="width:100%; height: 150px; background: #FF6F31;border-radius: 15px 15px 0px 0px;"><br>
                        <h4 style="font-size:80px;" class="text-light">Login</h4>
                    </div>
                    <div class="card-body p-5">
                        <form action="check" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <center>
                                <div class="results col-md-8">
                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                    @endif
                                </div>
                            </center>
                            <div class="form-outline form-white mb-4">
                                <label for="email" class="form-label fs-5" style="color:#FF6F31;">Email</label>
                                <input value="{{ old('email') }}" type="text" name="email" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="juandelacruz@gmail.com">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                            </div>
                            <div class="form-outline form-white mb-4">
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