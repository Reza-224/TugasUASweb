<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../AdminLTE/dist/css/style6.css">

    <title>Ruang Kerja</title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="/">Ruang Kerja</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li>
              <a class="nav-link" aria-current="page" href="/" >
              Home
              </a>
         </li>
         <li>
          <a class="nav-link active" aria-current="page" href="/explore" >
          Explore
          </a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/becomeuser">Seller</a></li>
            <li><a class="dropdown-item" href="/becomeseller">User</a></li>
            
          </ul>
        </li>
        <li>
          <a class="nav-link " aria-current="page" href="login.html" >
          Log In
          </a>
          </li>
      </ul>
  </div>

        <form class="d-flex ml-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<table class="my-5 py-5" >
<tr>
@foreach($products as $product)
<td width="30%"  >
    <div class="card h-100">
       <img src="{{$product->image_url}}" class="card-img-top" alt="..." style="height: 300px;">
          <div class="card-body">
             <h5 class="card-title">{{$product->name }}</h5>
           <p class="card-text">{{$product->author}}</p>
          <a href="/produk" class="btn btn-danger">Contact Seller</a>
      <a href="/produk" class="btn btn-primary ">Detail</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
</td>
@endforeach
</tr>
</table>

<div class="main text-center mt-5">
    <h6 class="heading">What's included for 12 months</h6>
    <p class="text-info">Everything you'll need to support customer in your first year</p>
    <p class="text-info">We'll also discount your 2nd year with help Scout 20%</p>
</div>
<div class="container mt-4 d-flex justify-content-center">
    <div class="row g-0">
        <div class="col-md-4 border-right">
            <div class="cards">
                <div class="first bg-white p-4 text-center"> <img src="https://img.icons8.com/clouds/100/000000/box.png" />
                    <h5>Help Scout plus</h5>
                    <p class="line1">No limitation - Its got everything that you 'll need as you grow</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="cards">
                <div class=" second bg-white p-4 text-center"> <img src="https://img.icons8.com/clouds/100/000000/groups.png" />
                    <h5>10 Users</h5>
                    <p class="line2">$50/month gets you 10 users, and you can add more $10 pe user</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cards">
                <div class=" third bg-white p-4 text-center"> <img src="https://img.icons8.com/fluent/100/000000/trophy.png" />
                    <h5>World Class Support</h5>
                    <p class="line3">We'll help you get started and be there when you have questions</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="javascript.js"></script>
  </body>
</html>


