<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'vadpi';


$conn = new mysqli($localhost,$username,$password,$database); 
if(!$conn)
die(mysqli_error($conn));

    // echo "Didn't connect with database";

?>