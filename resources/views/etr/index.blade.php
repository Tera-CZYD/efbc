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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>EFBC</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
        .carousel-item {
      height: 100vh;
    }
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

<body>
  <nav style="background: rgba(255, 255, 255, 0.9); box-shadow: 5px 6px 10px rgba(0, 0, 0, 0.58); z-index:2;" class="navbar navbar-expand-xl navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="assets/EFBC.png" width="120" alt=""></a>
      <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link p-lg-3 active" aria-current="page" id="hove" href="/">HOME</a>
          <a class="nav-link p-lg-3" href="ministries" id="hove">MINISTRIES</a>
          <a class="nav-link p-lg-3" href="about" id="hove">ABOUT</a>
          <!-- <a class="nav-link p-lg-3" href="contact" id="hove">CONTACT US</a> -->
          <a href="login" id="hove"><i class="fa fa-user-circle ms-5 fs-3 mt-3"></i></a>
        </div>
      </div>
    </div>
  </nav>


  <div class="carousel slide position-relative" style="height: 100vh;">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      </ol>

      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          @foreach($heros as $hero)
          <div class="container-fluid d-flex flex-column justify-content-center" style="background: url(./assets/{{$hero->img}}); background-position: center; background-repeat: no-repeat;background-size: cover;height: 100vh;">
            <div class="row col-md-8 mt-5 ms-5 ps-5 rounded-3" style="background: rgba(255, 255, 255, 0.7);">
              <h1 class="c-display-3 text-start" style="color:#FF6F31;">{{$hero->churchName}}</h1>
              <h1 class="c-display-3 text-start" style="color:#292D31;">{{$hero->churchType}}</h1>
            </div>
            <div class="row col-md-8 ms-5 ps-5">
              <div class="col-md-5"></div>
              <div class="col-md-7">
                <h3 class="mt-3 fs-6 fw-bold text-center text-dark mb-5 p-2" style="background: rgba(255, 255, 255, 0.7); border-radius:10px;">{{$hero->tagline}}</h3>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="carousel-item">
          <div class="container-fluid d-flex flex-column justify-content-center"><img src="assets/inside 1.jpg" style="height: 100vh; width:auto;" class="d-block w-100" alt="Slide 2"></div>

        </div>
        <div class="carousel-item">
          <img src="assets/inside front.jpg" style="height: 100vh; width:auto;" class="d-block w-100" alt="Slide 3">
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  <br><br>
  <center>


    <div class=" col-md-11 text-center" style="height:550px;">
      <div class="row ms-3 mt-3">
        <div class="col col-md-6">
          <div class="row" style="background-color: #FF6F31;">
            <h3 class="p-4 text-light fw-bold">Join us in our Worship Service</h3>
          </div><br><br><br>
          <div class="row">
            <table class="table table-hover">
              <tbody>
                @foreach($scheds as $sched)
                <tr>
                  <td class="fs-5">{{$sched->time}}</td>
                  <td class="fs-5">{{$sched->description}}</td>

                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="col col-md-6">
          @foreach($images as $image)
          <img class="c-card" src="assets/{{$image->img}}" height="65%" alt="">
          @endforeach
        </div>
      </div>
    </div>
  </center>

  <div class="row mt-3 col-md-12 justify-content-center">
    <div class="col col-md-4 p-5 text-center" style="background-color: #FF6F31;">
      <h3 class="text-light fw-bold fs-1">Announcements</h3>
      <div class="row justify-content-center">
        <div class="col col-md-4">
          <p class="text-light fw-bold fs-6">Date Today:</p>
        </div>
        <div class="col col-md-4">
          <p class="text-light"> {{ $date->toFormattedDateString();  }}</p>
        </div>
      </div>
    </div>
    <div class="col col-md-8">
    <marquee class="text-left" behavior="scroll" direction="left" scrollamount="10">
      <div class="row">
      @foreach($announcements as $anns)
      <div class="col">
      <h3 class="fw-bold" style="color: #FF6F31;">What: {{$anns->what}}</h3>
        <p>When: {{$anns->event_day}}</p>
        <p>Where: {{$anns->venue}}</p>
      </div>

      
      @endforeach
      </div>
      </marquee>
    </div>

  </div>

  <div class="row justify-content-center mt-5">
    <h3 class="text-center fw-bold fs-1 mb-4" style="color: #FF6F31;">Visit Us</h3>
    <div class="row justify-content-center">
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d841.7528525033945!2d119.88716292600714!3d15.90831912726848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3393f12e4bf1554b%3A0xde6c41ee81c885c3!2sEguia%20Faith%20Baptist%20Church!5e1!3m2!1sen!2sph!4v1655395389229!5m2!1sen!2sph" width="90%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
    </center>

  </div>

  </div>

  <center>
  <iframe src="https://www.google.com/maps/embed?pb=!4v1655395784089!6m8!1m7!1s0_YyaUCT_1GfF59eMaNR3A!2m2!1d15.90838631981966!2d119.8869170881869!3f75.04253!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </center>
  
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