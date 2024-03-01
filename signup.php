<?php
include 'partials/_header.php'; // Include the header file
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
            <p>/ Sign up</p>
        </span>
        <h1>Register yourself</h1>
    </div>

<div class="secondcontainer">
    <div class="smallcontainer">
<div class="formhead">
    <h2>Registration Form</h2>
    <h5>Sign up and start learning.</h5>
    </div>
    <form action="#" method="post">
        <div class="user-name">

        <div class="firstname">
            
        <div class="fname"> <img src="img/profile.png" width="20px" height="20px">First Name:</div>
       
        <input type="text" id="fname" name="fname" required>
        </div>
            <div class="firstname">
        <div class="lname"><img src="img/profile.png" width="20px" height="20px">Last Name:</div>
        <input type="text" id="lname" name="lname" required>
        </div>
        </div>
            <div class="contact">
                <div class="state">
        <div class="statechoose"><img src="img/location.png" width="20px" height="20px">Select State:</div>
<select id="state" name="state">
    <option value="" selected>Select One</option>
    <option value="state1">Odisha</option>
    <option value="state2">UtterPradesh</option>
    <option value="state3">Tamilnadu</option>
    <!-- Add more options as needed -->
</select>
</div>
            <div class="state">
        <div class="mobile"><img src="img/number.png" width="20px" height="20px">Mobile Number:</div>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>
        </div>
        </div>
        <div class="email">
        <div class="gmail"><img src="img/email.png" width="20px" height="20px">Email:</div>
        <input type="email" id="email" name="email" required>
        </div>
            <div class="password">
        <div class="security"><img src="img/password.png" width="20px" height="20px">Password:</div>
        <input type="password" id="password" name="password" required>
        </div>
        <div class="submit">
        <input type="submit" value="Signup">
        </div>
    </form>
  
    </div>
</div>
</body>
</html>
