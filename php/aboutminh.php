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
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 7px #DAD8D8;
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

<body>
  <?php include("header.php");
          $host='localhost';
          $uer='root';
          $pass='';
          $db_name='btl';
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
      if(isset($_POST['submit'])){
          $id = $_POST['id'];
          $ima = $_POST['image'];
          $int = $_POST['introduce'];
          $nam = $_POST['name'];
          $bir = $_POST['birthday'];
          $pho = $_POST['phone'];
          $add = $_POST['address'];
          $mai = $_POST['mail'];
          $deg = $_POST['degree'];
          $bra = $_POST['branch'];
          $sho = $_POST['short-term goal'];
          $dis = $_POST['distant target'];
          $sqln = "update cars set id = '".$id."', image='".$ima."', introduce ='".$int."', name ='".$nam."', birthday ='".$bir."', phone ='".$pho."', address ='".$add."',
          mail ='".$mai."', degree ='".$deg."', branch ='".$bra."', short-term goal ='".$sho."', distant target ='".$dis."'  where id = ".$id;
          if(mysqli_query($conn,$sqln)){
              header("location:aboutme.php");
          }
      }
      ?>
  <div class="container">
    <div class="row">
      <!-- <div class="col-lg-2"><a href="aboutme.php"><button type="button" class="btn btn-danger mt-2"><i class="fas fa-backspace"></i>BACK</button></a></div> -->
      <div class="col-lg-12">
        <h1>ABOUT ME</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="box">
      <div class="row">
        <div class="col-lg-4">
          <img src="../image/<?php echo $row['image']  ?>" alt="">
          <p>myself is a cheerful, sociable, enthusiastic and active person. have experience in team work</p>
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
                <?php echo $row['short-term goal']  ?>
              </p>
            </li>
            <li>
              <h3>Distant target: </h3>
              <p>
                <?php echo $row['distant target']  ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- <div id="box">

        </div> -->
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>