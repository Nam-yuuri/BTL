<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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

  /* #box {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 7px #DAD8D8;
  } */

  #box,
  img {
    border-radius: 15px;
  }
  }
</style>

<body >
  <?php include("header.php");?>
<div class="container-fluid" style="background:url(../image/background-aboutme.jpg) no-repeat center  center; background-size:cover">
  <div class="container">
    <div id="box">
    <div class="col-lg-12">
    <h1>ABOUT US</h1>
  </div>

      <div class="row">
        <div class="col-lg-6 ">
          <div class="row d-flex justify-content-center"  style="height:270px">
          <a href="../image/minh.jpg"><span class="glyphicon glyphicon-log-in"></span>
            <img src="../image/nam.jpg" style="margin-bottom:30px" alt=""></a>
          </div>
          <div class="row d-flex justify-content-center">
          <h3>Hoàng Võ Hoài Nam</h3>
          </div>
          <div class="row d-flex justify-content-center" >
          <a href="aboutnam.php"><button type="button" style="margin-top:20px" class="btn btn-outline-info">
          research</button></a>
          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="row d-flex justify-content-center" style="height:270px">
          <a href="../image/minh.jpg"><span class="glyphicon glyphicon-log-in"></span>
            <img src="../image/minh.jpg" style="margin-bottom:30px" alt=""></a>
          </div>
          <div class="row d-flex justify-content-center" >
          <h3>Đào Nhật Minh</h3>
          </div>
          <div class="row d-flex justify-content-center">
          <a href="aboutminh.php"><button type="button" style="margin-top:20px" class="btn btn-outline-info">
          research</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <h2>ACHIEVEMENT</h2>
        <ul class="list">
          <li>
            <p>won consolation prize in a student game programming competition</p>
          </li>
          <li>
            <p>each participated in technology competitions and seminars nationwide</p>
          </li>
        </ul>
      </div>
      <div class="row pl-3">
        <div class="col-lg-12">
          <h2>target</h2>
          <ul>
            <h3>Short-term goal: </h3>
            <li>
              <p>Successfully complete team projects and learn new languages</p>
            </li>


            <h3>Distant target: </h3>
            <li>
              <p>join more larger projects and complete projects that prepare them to participate.</p>
            </li>
            <li>
              <p>participate in technology conferences and competitions so that more people get to know the group.</p>
            </li>
            <li>
              <p>recruit more members to the group</p>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</div>
  <?php include("footer.php");?>