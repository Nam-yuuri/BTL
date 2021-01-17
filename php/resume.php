<!doctype html>
<html lang="en">

<head>
  <title>CV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/resume.css">
</head>

<body>
  <?php include("header.php");
                    $host='localhost';
                    $uer='root';
                    $pass='';
                    $db_name='cv';
                    session_start();
                    $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
              
              $sql="select * from admin";
              if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                      $row = mysqli_fetch_array($result);
                  }
              }
      

  ?>
  <div class="container-fluid"
    style="background:url(https://c1.wallpaperflare.com/preview/427/745/192/notebook-natural-laptop-macbook.jpg) no-repeat center  center; background-size:cover;height:100vh">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="target">
          <div class="row">
            <div class="col-sm-6"> <a href="../image/nam.jpg"><span class="glyphicon glyphicon-log-in"></span><img
                  src="../image/<?php echo $row['image1']  ?>" style="margin-bottom:30px;witdh:206px;height:206px" alt=""></a>
              <h3><?php echo $row['name1']  ?></h3>
              <a href="resumenam.php?id=1"><button type="button" style="margin-top:30px"
                  class="btn btn-outline-info">research</button></a>
            </div>
            <div class="col-sm-6"> <a href="../image/minh.jpg"><span class="glyphicon glyphicon-user"></span><img
                  src="../image/<?php echo $row['image2']  ?>" style="margin-bottom:30px;witdh:206px;height:206px" alt=""></a>
              <h3><?php echo $row['name2']  ?></h3>
              <a href="resumeminh.php?id=2"><button type="button" style="margin-top:30px"
                  class="btn btn-outline-info">research</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php include("footer.php");?>