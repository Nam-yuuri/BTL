<?php 
    $conn = mysqli_connect("localhost","root","","btl");
    if(!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }
    mysqli_set_charset($conn,"UTF8");
?>
