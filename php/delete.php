<!doctype html>
<html lang="en">
  <head>
    <title>CV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    $host='localhost';
    $uer='root';
    $pass='';
    $db_name='cv';
    
    
    // Create connection
    $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo " id: ".$id;
    }
    $sql="DELETE FROM account WHERE id= ".$id.";";
    if(mysqli_query($conn,$sql)){
        header("location:accountadmin.php");
    }
    ?>
    <p>day la trang xoa</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<? php include("footer.php") ?>