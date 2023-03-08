<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Laravel Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset("assets/css/style.css")}}'>
    <link rel="icon" type="text/icon" href='{{asset("assets/images/favicon.png")}}'>
    <!--bootstarp cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!--bootstrap js cdn-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src='main.js'></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="/"><img src='{{ asset("assets/images/brand.png")}}' class="img-style"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/">Home</a>
        <li class="nav-item">
          <a class="nav-link" href="/About-US">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Our-Team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Our-Vision">Vision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Contact-US">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/Login-Here">Login</a></li>
            <li><a class="dropdown-item" href="/Register-Here">Register</a></li>
            <li><a class="dropdown-item" href="/Manage-Profile">Manage Profile</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="col-md-12">
    <h1 class="mt-5">Manage Profile Here</h1>

    <img src='{{ asset("assets/images/profile.gif")}}' class="img-fluid image-style">


    <div class="table-responsive">
      <table class="table">
        <thead class="table-dark">
          <tr class="text-black bg-primary text-center">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>City</th>
            <th>State</th>
            <th>Pincode</th>
            <th>Action</th>
          </tr>
        </thead>
  
        <tbody>
          <tr class="text-dark text-center">
            <th>1</th>
            <th>nirav</th>
            <th>nirav@gmail.com</th>
            <th>n123</th>
            <th>9898989898</th>
            <th>rajkot</th>
            <th>gujarat</th>
            <th>360005</th>
            <th><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></th>
        </tr>
        </tbody>

        <tbody>
          <tr class="text-dark text-center">
            <th>2</th>
            <th>kishan</th>
            <th>kishan@gmail.com</th>
            <th>k1234</th>
            <th>98989898910</th>
            <th>rajkot</th>
            <th>gujarat</th>
            <th>360005</th>
            <th><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></th>
        </tr>
        </tbody>

        <tbody>
          <tr class="text-dark text-center">
            <th>3</th>
            <th>ramesh</th>
            <th>ramesh@gmail.com</th>
            <th>12345</th>
            <th>9898981011</th>
            <th>rajkot</th>
            <th>gujarat</th>
            <th>360005</th>
            <th><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></th>
        </tr>
        </tbody>

        <tbody>
          <tr class="text-dark text-center">
            <th>4</th>
            <th>suresh</th>
            <th>suresh@gmail.com</th>
            <th>sur123</th>
            <th>9102089898</th>
            <th>rajkot</th>
            <th>gujarat</th>
            <th>360005</th>
            <th><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></th>
        </tr>
        </tbody>

        <tbody>
          <tr class="text-dark text-center">
            <th>5</th>
            <th>hitesh</th>
            <th>hitesh@gmail.com</th>
            <th>hits1234</th>
            <th>9090901212</th>
            <th>rajkot</th>
            <th>gujarat</th>
            <th>360005</th>
            <th><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></th>
        </tr>
        </tbody>


      </table>
    </div>
  </div>
</div>

    
</body>
</html>