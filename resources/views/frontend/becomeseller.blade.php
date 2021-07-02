<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../AdminLTE/dist/css/style5.css">
    <script src="https://kit.fontawesome.com/987702db51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <title>Ruang Kerja</title>
    
    
  
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      
        <div class="container">
            <a class="navbar-brand " href="/">Ruang Kerja</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="/explore">Explore</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Register
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/becomeuser">User</a>
                    <a class="dropdown-item" href="/becomeseller">Seller</a>
                <li class="nav-item">
                  <a class="nav-link " href="/login">Log In</a>
                  </li>
                <form class="form-inline my-2 my-lg-0 ml-10">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            
        </ul>
        </div>
        </div>
    
    </nav>
    <br><br><br>
    <div class="wrapper rounded bg-white">
        <div class="h3">Registration Form</div>
        <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3"> <label>First Name</label> <input type="text" class="form-control" required> </div>
                <div class="col-md-6 mt-md-0 mt-3"> <label>Last Name</label> <input type="text" class="form-control" required> </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3"> <label>Birthday</label> <input type="date" class="form-control" required> </div>
                <div class="col-md-6 mt-md-0 mt-3"> <label>Gender</label>
                    <div class="d-flex align-items-center mt-2"> <label class="option"> <input type="radio" name="radio">Male <span class="checkmark"></span> </label> <label class="option ms-4"> <input type="radio" name="radio">Female <span class="checkmark"></span> </label> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3"> <label>Email</label> <input type="email" class="form-control" required> </div>
                <div class="col-md-6 mt-md-0 mt-3"> <label>Phone Number</label> <input type="tel" class="form-control" required> </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3"> <label>Password</label> <input type="password" class="form-control" required> </div>
                <div class="col-md-6 mt-md-0 mt-3"> <label>Retype Password</label> <input type="password" class="form-control" required> </div>
            </div>
            <div class=" my-md-2 my-3"> <label>Select Your Jobs</label> <select id="sub" required>
                    <option value="" selected hidden>Choose Option</option>
                    <option value="Maths">Web Developer</option>
                    <option value="Science">Photography</option>
                    <option value="Social">Vidio Maker</option>
                    <option value="Hindi">Graphic Designer</option>
                </select> </div>
            <div class="btn btn-primary mt-3">Submit</div>
        </div>
    </div>
    
<!-- 
<div class="jumbotron">
    <div class="container ">
    <h1 class="display-4">Explore Your Skill With <br> <span class="font-weight-bold"> Ruang Kerja</span></h1>
    
    <hr class="my-4">
    <p font-weight-bold>Come Join Us</p>
    <a class="btn btn-primary btn-lg" href="#" role="button font-weight-bold">Learn More</a>
    </div>
</div> -->

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Ruang Kerja</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
  </body>
</html>