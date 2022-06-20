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

  <title>CONTACT US</title>
  <link rel="stylesheet" href="assets/style.css">
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
          <a class="nav-link p-lg-3" href="about" id="hove">ABOUT</a>
          <a class="nav-link p-lg-3 active" href="contact" id="hove">CONTACT US</a>
          <a href="login" id="hove"><i class="fa fa-user-circle ms-5 fs-3 mt-3"></i></a>
        </div>

      </div>
    </div>
  </nav>

  <div class="conatiner mb-5">
    <div class="text-center mb-5" style="height: 100px; background: #FF6F31;"><br>
      <h3 style="font-size:50px;" class="text-light">Connect With Us</h3>
    </div>
    <div class="d-flex align-items-center justify-content-center">
      <div class="bg-white col-md-6 shadow" style="border-radius: 15px;">
        <div class="row p-4 rounded shadow-md" style="margin: 20px 70px 20px 70px;">
          <div class="col-md-6">
            <label for="name" class="form-label fs-5" style="color:#FF6F31;">Your Name</label>
            <input type="text" name="name" class="form-control" placeholder="Eg. Juan Dela Cruz" style="background: #F2F2F2; border-radius: 10px;" required>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label fs-5" style="color:#FF6F31;">Your Email</label>
            <input type="text" name="email" class="form-control" style="background: #F2F2F2; border-radius: 10px; " placeholder="juandelacruz@gmail.com" required>
          </div class="mt-3">
          <div class="mt-3">
            <label for="subject" class="form-label fs-5" style="color:#FF6F31;">Subject</label>
            <input type="text" name="subject" class="form-control" style="background: #F2F2F2; border-radius: 10px;" placeholder="Subject of query" required>
          </div>
          <div class="mt-3 mb-3">
            <label for="message" class="form-label fs-5" style="color:#FF6F31;">Message</label>
            <textarea name="message" cols="20" rows="6" style="background: #F2F2F2; border-radius: 10px;" class="form-control" placeholder="How can we help you?"></textarea>
          </div>
          <div class="row d-flex align-items-center justify-content-center mt-3">
            <button class="btn text-white col-md-5 fs-4 fw-normal" style="background-color:#FF6F31;border-radius: 30px;">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
  <br><br>
  <br><br><br><br>

  <div class="container-fluid pt-5 ps-5 pe-5 bg-dark text-white text-center">
    <div class="row">
      <div class="col col-md-4 text-start">
        <p class="fs-4" style="color:#FF6F31;">Eguia Faith Baptist Church</p>
        <p class="ps-4 fs-6 text-light">Purok Namnama, Barangay Eguia, Dasol Pangasinan</p>
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
        <a class="nav-link" id="foot" href="contact">
          <p>Contact us</p>
        </a>
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