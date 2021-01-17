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
</head>
<style>
  h1 {
    text-align: center;
  }

  #box {
    border: 2px solid;
    padding: 10px;
    background-color:white;
  }

  #box,
  img {
    border-radius: 15px;
  }

  .about {
    background-color: rgb(121, 121, 121);
    color: white;
  }
</style>

<body style="background:url(https://c1.wallpaperflare.com/preview/830/150/561/sackcloth-sackcloth-textured-laptop-ipad.jpg) no-repeat center  center; background-size:cover">
  <?php include("header.php");
          $host='localhost';
          $uer='root';
          $pass='';
          $db_name='cv';
        if(isset($_GET['id'])){
          $id = $_GET['id'];
      }
      $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
          $sql="select * from about where id = ".$id;
              if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                      $row = mysqli_fetch_array($result);
                  }
              }
      ?>

  <div class="container ">
    <div id="box">
    <div class="row">
      <div class="col-lg-12">
        <h1>ABOUT ME</h1><hr>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="../image/<?php echo $row['image']  ?>" alt="">
          <p><?php echo $row['introduce']  ?></p>
        </div>
        <div class="col-lg-8">
          <h2>information</h2>
          <ul class="list">
            <li>
              <p>Name:
                <?php echo $row['name']  ?>
              </p>
            </li>
            <li>
              <p>Birthday:
                <?php echo $row['birthday']  ?>
              </p>
            </li>
            <li>
              <p>Phone:
                <?php echo $row['phone']  ?>
              </p>
            </li>
            <li>
              <p>Address:
                <?php echo $row['address']  ?>
              </p>
            </li>
            <li>
              <p>Mail: <a href="#">
                  <?php echo $row['mail']  ?>
                </a></p>
            </li>
            <li>
              <p>Degree:
                <?php echo $row['degree']  ?>
              </p>
            </li>
            <li>
              <p>Branch:
                <?php echo $row['branch']  ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h2>target</h2>
          <ul>
            <li>
              <h3>Short-term goal: </h3>
              <p>
                <?php echo $row['short']  ?>
              </p>
            </li>
            <li>
              <h3>Distant target: </h3>
              <p>
                <?php echo $row['distanttarget']  ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

      </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php include("footer.php") ?></body>
</body>

</html>