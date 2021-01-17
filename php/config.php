<?php 
    $conn = mysqli_connect("localhost","root","","cv");
    if(!$conn){
        die("Connection Failed" . mysqli_connect_error());
    }
    mysqli_set_charset($conn,"UTF8");
?>
