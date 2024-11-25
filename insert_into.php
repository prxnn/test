<?php
include('conn.php');
$sushi_name = $_POST['sushi_name'];
$sushi_style = ['sushi_style'];

$target_dir = "upload/";
$target_file = $target_dir .strrchr($_FILES['sushi_img']['img'] ,".");




?>