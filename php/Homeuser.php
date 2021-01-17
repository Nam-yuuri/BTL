<head>
  <title>CV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" id="online_cv_resume-css-css"
    href="https://eds.edatastyle.com/demo/online-cv-resume/standard/wp-content/themes/arzot/assets/css/arzot.css?ver=1.0.0"
    type="text/css" media="all">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/home.css">
</head>
<body style="background:url(https://images.wallpaperscraft.com/image/keyboard_telephone_desktop_179668_3840x2160.jpg) no-repeat center  center; background-size:cover;height:100vh;">
<body>
  <?php       

          $host='localhost';
          $uer='root';
          $pass='';
          $db_name='cv';
          session_start();

        if(isset($_GET['id'])){
          $id = $_GET['id'];
      }
      $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
          $sql="select * from home where id = ".$id;
              if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                      $row = mysqli_fetch_array($result);
                  }
              }
      if(isset($_POST['submit'])){
          $id = $_POST['id'];
          $nam = $_POST['name'];
          $int = $_POST['introduce'];
          $dis = $_POST['skill'];

      }
          // Lưu Session
    // echo 'id : ' . $row['id'];
    $_SESSION['name'] =  $row['id'];
    // echo 'id : ' . $_SESSION['name'];
    include("headeruser.php");

      ?>

<div class="container d-flex justify-content-center">

<div class="row d-flex justify-content-center">
  <div class="col-lg-12 text-center" style="margin-top:200px">
    <div class="row">
      </div>
        <h1 ><?php echo $row['name']  ?></h1>
      </div>
    <!-- </div> -->
    <div class="row">
      <div id="main-page ">
        <section id="home" class="call-white-text text-dark">
          <div class="main-wrapper">
            <p class="cd-headline clip is-full-width">
              <span><?php echo $row['introduce']  ?></span> <span class="typer" data-colors="rgb(0, 0, 0);" id="main"
                data-words="<?php echo $row['skill']  ?>" data-delay="100"
                data-deletedelay="1000" style="color: rgb(0, 0, 0);"> </span>
            </p>
          </div> <!-- /.main-wrapper -->
        </section>
      </div>
    </div>
  </div>
</div>
<div class="row ">
  <div class="col-lg-12 d-flex justify-content-center">
    <a href="#"><button type="button" class="btn btn-outline-success mr-5">CREATE CV</button></a>
    <a href="login.php"><button type="button" class="btn btn-outline-success ">REGISTRANTION</button></a>
  </div>
</div>
</div>
<?php include("footer.php");?>