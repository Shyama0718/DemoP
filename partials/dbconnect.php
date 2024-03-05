<?php
$servername="localhost";
$username="root";
$password="";
$database="okcl";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
// {
//     echo "success";
// }
{
    die("Error".mysqli_connect_error());
}
?>