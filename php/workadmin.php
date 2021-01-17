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
  <link rel="stylesheet" href="../css/work.css">
</head>

<?php 
    $host='localhost';
    $uer='root';
    $pass='';
    $db_name='cv';
    session_start();
    $_SESSION['name'] = '0';
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
    include("headeradmin.php");

?>

<body style="background:url(https://c1.wallpaperflare.com/preview/248/992/890/business-business-meeting-coffee-conference-room.jpg) no-repeat center  center; background-size:cover;height:100vh">

<div class="container-fluid" >
<div class="col-lg-12">
          <div class="container-fluid" >
              <div class="target">
                <div class="row" >
                  <div class="col-sm-6" > <a href="../image/nam.jpg"><span
                    class="glyphicon glyphicon-log-in"></span><img src="../image/nam.jpg" style="margin-bottom:30px;width:206px;height:206px" alt=""></a>
                    <h3><?php echo $row['name1']  ?></h3>
                    <a href="worknam.php"><button type="button" style="margin-top:30px" class="btn btn-outline-info">research</button></a>
                  </div>
                  <div class="col-sm-6" > <a href="../image/minh.jpg"><span
                    class="glyphicon glyphicon-user"></span><img src="../image/minh.jpg" style="margin-bottom:30px;width:206px;height:206px" alt=""></a>
                    <h3><?php echo $row['name2']  ?></h3>
                    <a href="workminh.php"><button type="button" style="margin-top:30px" class="btn btn-outline-info">research</button></a>
                  </div>                    
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>        
<?php include("footer.php");?>