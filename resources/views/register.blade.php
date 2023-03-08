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
        <a class="nav-link" href="/">Home</a>
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
  <div class="col-md-8">

  <form>
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="Enter your full Name" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="Enter your Email Address" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" placeholder="Enter your Password" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Mobile</label>
      <input type="text" class="form-control" placeholder="Enter your Mobile Number" required>
    </div>
    <div class="mb-3">
      <label class="form-label">City</label>
        <select name="city" class="form-control" required>
          <option value="">--City--</option>


          <?php
          $url="http://country.io/capital.json";
          $data=file_get_contents("$url",TRUE);
          $st=json_decode($data);
          foreach($st as $st1)
          {
            ?>
            <option value="<?php echo $st1; ?>"><?php echo $st1; ?></option>
            <?php
          }
          ?>



        </select>
    </div>
    <div class="mb-3">
      <label class="form-label">State</label>
        <select name="state" class="form-control" required>
          <option value="">--State--</option>

          <?php
                    $url="https://gist.githubusercontent.com/mshafrir/2646763/raw/8b0dbb93521f5d6889502305335104218454c2bf/states_hash.json";
                    $data=file_get_contents($url,TRUE);
                    $kk=json_decode($data);

                    foreach($kk as $kk1)
                    {
                ?>
                    <option value="<?php echo $kk1; ?>"> <?php echo $kk1;?></option>
                    <?php
                    }
                    ?>

        </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Pincode</label>
      <input type="text" class="form-control" placeholder="Enter your Pincode" required>
    </div>
   
    <button type="submit" class="btn btn-success btn-md mb-2">Submit</button>
    <button type="reset" class="btn btn-danger btn-md mb-2">Reset</button>
  </form>
</div>
</div>
    
</body>
</html>