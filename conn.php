<?php
$servername ="localhost";
$username = "root";
$password = "";
$bdname = "bd_sushi";

$conn = new mysqli($servername,$username,$password,);

if($conn->connect_error){
    die("error" .$conn->connect_error) ;
}
?>