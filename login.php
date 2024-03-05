<?php 
include 'partials/_header.php'; 
 session_start();
$login  = false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/dbconnect.php';
$email=$_POST["email"];
$password=$_POST["password"];

        $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if ($num==1)
        {
            $login=true;
            // session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            header("location:home.php");
                  }
        else{
          $showError="INVALID CREDENTIAL";
        }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style4.css">
</head>
<body>
    <div class="firstcontainer">
        <span class="span1">
            <img src="img/home.png" width="20px" height="20px">
            <p>/ Login</p>
        </span>
        <h1>Login yourself</h1>
    </div>

<div class="secondcontainer">
    <div class="smallcontainer">
<div class="formhead">
    <h2>Login Form</h2>
    <h5>Login and start learning.</h5>
    </div>
    <form action="/demop/login.php" method="post">
      

        <div class="email">
        <div class="gmail"><img src="img/email.png" width="20px" height="20px">Email:</div>
        <input type="email" id="email" name="email" required>
        </div>
            <div class="password">
        <div class="security"><img src="img/password.png" width="20px" height="20px">Password:</div>
        <input type="password" id="password" name="password" required>
        </div>
        <div class="submit">
        <input type="submit" value="Login">
        </div>
    </form>
  
    </div>
</div>
</body>
</html>
