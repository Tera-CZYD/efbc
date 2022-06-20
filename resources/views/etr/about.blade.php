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

  <title>ABOUT</title>
  <link rel="stylesheet" href="assets/style.css?ver=02">
  <style>
    #hove {
      font-weight: bold;
      color: black;
    }

    #hove:hover {
      color: #FF6F31;
    }

    #foot {
      font-weight: bold;
      color: white;
    }

    #foot:hover {
      color: #FF6F31;
    }
  </style>

</head>

<body style="background-color: #E5E5E5;">
  <nav style="background: rgba(255, 255, 255, 0.9); box-shadow: 5px 6px 10px rgba(0, 0, 0, 0.58);" class="navbar navbar-expand-xl navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="assets/EFBC.png" width="120" alt=""></a>
      <button class="navbar-toggler  bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link p-lg-3" aria-current="page" id="hove" href="/">HOME</a>
          <a class="nav-link p-lg-3" href="ministries" id="hove">MINISTRIES</a>
          <a class="nav-link p-lg-3 active" href="about" id="hove">ABOUT</a>
          <!-- <a class="nav-link p-lg-3" href="contact" id="hove">CONTACT US</a> -->
          <a href="login" id="hove"><i class="fa fa-user-circle ms-5 fs-3 mt-3"></i></a>
        </div>

      </div>
    </div>
  </nav>

  <div class="text-center" style="height: 100px; background: #FF6F31;"><br>
    <h3 style="font-size:50px;" class="text-light">About Us</h3>
  </div>

  @foreach($images as $image)
  <div class="d-flex flex-column justify-content-center" style="background: url('./assets/{{$image->img}}'); background-position: center; background-repeat: no-repeat;background-size: cover;height: 50vh;">
  </div>
  @endforeach
  <br><br>
  <div class="row align-items-md-stretch ms-2 me-2">
    @foreach($abouts as $about)

    <div class="col-md-6">
      <div class="h-100 p-5 text-white bg-dark rounded-3">
        <h1 style="color: #FF6F31;" class="c-title fw-bold">Our {{$about->title}}</h1>
        <hr width="100px" class="ms-2" style="height: 5px; background: rgb(18,19,20);background: linear-gradient(90deg, rgba(18,19,20,1) 0%, rgba(255,111,49,1) 56%, rgba(18,19,20,1) 100%);">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$about->description}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <br><br>
  <div class="row row-md-12 me-3 ms-3 mb-5 justify-content-center">
    <div class="col col-md-5 p-5 ms-4 me-4 bg-light c-card">
      <h1 style="color: #FF6F31;" class="c-title text-center fw-bold">Our Pastors</h1>
      <center>
        <hr width="100px" class="ms-2" style="height: 5px; background: rgb(18,19,20);background: linear-gradient(90deg, rgba(18,19,20,1) 0%, rgba(255,111,49,1) 56%, rgba(18,19,20,1) 100%);">
      </center>
      @foreach($pastors as $pastor)
      <h4 class="text-center mt-5">{{$pastor->name}}</h4>
      @endforeach
    </div>
  </div>
  <br><br>
  <br><br><br><br>

  <div class="container-fluid pt-5 ps-5 pe-5 bg-dark text-white text-center">
    <div class="row">
      <div class="col col-md-4 text-start">
        <p class="fs-4" style="color:#FF6F31;">Eguia Faith Baptist Church</p>
        <p class="ps-4 fs-6 text-light mb-5">Purok Namnama, Barangay Eguia, Dasol Pangasinan</p>
        <div class="row">
          <div class="col">
            <p class="fs-5" style="color:#FF6F31;">For Inquiries, please send message to our Church Pastor</p>
            <a href="https://www.facebook.com/paul.leandado" class="nav-link text-white"><i class="fa fa-facebook ms-5 fs-3"></i> Paul Leandado</a>
          </div>
        </div>
      </div>
      <div class="col col-md-4">
        <a class="navbar-brand" href="/"><img src="assets/EFBC white.png" width="200" alt=""></a>
        <p class="fs-6">© 2022 Eguia Faith Baptist Church</p>
        <p class="fs-6">All Rights Reserved</p>
      </div>
      <div class="col col-md-4">
        <a class="nav-link" id="foot" href="/">
          <p>Home</p>
        </a>
        <a class="nav-link" id="foot" href="ministries">
          <p>Ministries</p>
        </a>
        <a class="nav-link" id="foot" href="/about">
          <p>About</p>
        </a>
        <!-- <a class="nav-link" id="foot" href="contact">
          <p>Contact us</p>
        </a> -->
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