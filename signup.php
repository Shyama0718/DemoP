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

    <h2>Registration Form</h2>
    <h5>Sign up and start learning.</h5>
    <form action="#" method="post">
        <div class="user-name">
        <div class="firstname">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>
        </div>
            <div class="firstname">
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
        </div>
        </div>
            <div class="contact">
                <div class="state">
        <label for="state">Select State:</label>
<select id="state" name="state">
    <option value="" selected>Select One</option>
    <option value="state1">Odisha</option>
    <option value="state2">UtterPradesh</option>
    <option value="state3">Tamilnadu</option>
    <!-- Add more options as needed -->
</select>
</div>
            <div class="state">
        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>
        </div>
        </div>
        <div class="email">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        </div>
            <div class="password">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        </div>
        <input type="submit" value="Submit">
    </form>
  
    </div>
</div>
</body>
</html>
