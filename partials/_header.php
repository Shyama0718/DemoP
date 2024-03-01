<?php
echo ' <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style1.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo-dark.png" alt="Demo" width="40" alt=".."></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="img/download.png" alt="Toggle Navigation" width="50" height="40">
      </button>
  <form class="d-flex" role="search">
        <input class="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Catagories  
        </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/demop">Achievers Series</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">eSchool</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">OSTSE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Marketplace</a>
      </li>
    
    </ul>
    
    <button class="btn btn-primary ml-2" id="loginBtn">LOGIN</button>
    <a href="signup.php" class="btn btn-primary mx-2" id="signupBtn">SIGN UP</a
  </div>
</div>
</nav>';
echo '</body>
</html>';

// Include JavaScript file

?>