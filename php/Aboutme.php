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
  <link rel="stylesheet" href="../css/Aboutme.css">
</head>
<style>
  h1 {
    text-align: center;
  }

  #box {
    border: 2px solid;
    padding: 10px;
  }

  #box,img {
    border-radius: 15px;
  }
  }
</style>

<body     style="background:url(https://c1.wallpaperflare.com/preview/830/150/561/sackcloth-sackcloth-textured-laptop-ipad.jpg) no-repeat center  center; background-size:cover">

<?php       

      $host='localhost';
      $uer='root';
      $pass='';
      $db_name='cv';
      session_start();

      $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      // Lưu Session
      include("header.php");

?>



  <div class="container-fluid"
    style="background:url(https://c1.wallpaperflare.com/preview/830/150/561/sackcloth-sackcloth-textured-laptop-ipad.jpg) no-repeat center  center; background-size:cover">
    <div class="container">
      <div id="box">
        <div class="col-lg-12">
          <h1>ABOUT US</h1>
          <hr>
        </div>

        <div class="row">
          <div class="col-lg-6 ">
          <?php 
                  $sql="select * from admin";
                  if($result = mysqli_query($conn, $sql)){
                      if(mysqli_num_rows($result) > 0){
                          $row = mysqli_fetch_array($result);
                      }
                  }
          ?>
            <div class="row d-flex justify-content-center" style="height:270px">
              <a href="../image/<?php echo $row['image1']  ?>"><span class="glyphicon glyphicon-log-in"></span>
                <img src="../image/<?php echo $row['image1']  ?>" style="margin-bottom:30px;width:206px;height:206px" alt=""></a>
            </div>
            <div class="row d-flex justify-content-center">
              <h3><?php echo $row['name1']  ?></h3>
            </div>
            <div class="row d-flex justify-content-center">
              <a href="aboutnam.php?id=1"><button type="button" style="margin-top:20px" class="btn btn-outline-info">
                  research</button></a>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="row d-flex justify-content-center" style="height:270px">
              <a href="../image/<?php echo $row['image2']  ?>"><span class="glyphicon glyphicon-log-in"></span>
                <img src="../image/<?php echo $row['image2']  ?>" style="margin-bottom:30px;width:206px;height:206px" alt=""></a>
            </div>
            <div class="row d-flex justify-content-center">
              <h3><?php echo $row['name2']  ?></h3>
            </div>
            <div class="row d-flex justify-content-center">
              <a href="aboutminh.php?id=2"><button type="button" style="margin-top:20px" class="btn btn-outline-info">
                  research</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <h2>ACHIEVEMENT</h2>
          <ul class="list">
            <li><p><?php echo $row['achievement']  ?></p></li>
          </ul>
        </div>
        <div class="row pl-3">
          <div class="col-lg-12">
            <h2>target</h2>
            <ul>
              <h3>Short-term goal: </h3>
              <li>
                <p><?php echo $row['short-term goal']  ?></p>
              </li>


              <h3>Distant target: </h3>
              <li>
                <p><?php echo $row['distant target']  ?></p>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
  <?php include("footer.php");?>