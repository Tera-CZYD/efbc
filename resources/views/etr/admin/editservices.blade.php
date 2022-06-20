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
        
        <title>EFBC</title>
        <link rel="stylesheet" href="assets/style.css">
        <style>#hove{
          font-weight: bold;
                color: black;
            }
            #hove:hover{
                color:#FF6F31;
            }
        </style>

    </head>
    <body  style="background-color: #E5E5E5;">
        <nav style="background: rgba(255, 255, 255, 0.9); box-shadow: 5px 6px 10px rgba(0, 0, 0, 0.58);" class="navbar navbar-expand-xl navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="/admin"><img src="assets/EFBC.png" width="120" alt=""></a>
            <button class="navbar-toggler  bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <a class="nav-link p-lg-3 me-5 fs-5"  id="hove" href="#"><i class="fa fa-user-circle pe-3"></i>{{$LoggedUserInfo->name}}</a>
              <div class="navbar-nav">
                <a href="logout"><button class="btn fs-5 ms-3" id="hove"> <i class="fa fa-sign-out"></i> Logout</button></a>
              </div>

            </div>
          </div>
      </nav>
        <div class="row">
            <div class="col col-md-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 258px;" >
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="admin" class="nav-link text-light">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Dashboard
                        </a>
                    </li>
                </ul>
                <hr>
                <h4 style="color: #FF6F31;">Pages</h4>
                <hr style="width: 180px;" class="ms-4">
                <div class="row">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="editHome" class="nav-link text-white">
                            Home
                            </a>
                        </li>
                        <li>
                            <a href="editServices" class="nav-link text-white active">
                            Announcement
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
            <div class="col col-md-10">
                <div class="text-center mb-5" style="width:100%; height: 150px; background: #FF6F31;"><br>
                    <h3 style="font-size:80px;" class="text-light">Services</h3>
                </div>
                <div class="row">
                    <div class="conatiner mb-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="bg-white col-md-8 shadow" style="border-radius: 15px;">
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
                                        <textarea name="message" cols="20" rows="6" style="background: #F2F2F2; border-radius: 10px;"  class="form-control"
                                            placeholder="How can we help you?"></textarea>
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
                </div>
            </div>
        </div>


    </body>
</html>