<?php 
 
$localhost 	= "localhost"; 
$username 	= "root"; 
$password 	= ""; 
$dbname 	= "omds"; 
 
$con = new mysqli($localhost, $username, $password, $dbname); 

//connection failure 
if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
} 
 