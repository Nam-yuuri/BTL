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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="stylesheet" href="../css/contact.css">
</head>
<style>
  .contact{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  h2{
    color:black;
  }
</style>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-md-12" style="height:50px"> -->
        <?php include("header.php");?>
      <!-- </div> -->
    </div>
    </div>

    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="container contact">
          <div class="row">
            <!-- <div class="row"> -->
            <div class="col-lg-7">
              <div class="container">
                <h2>Contact me</h2>
                <form action="sendmail.php" class="d-flex flex-column justify-content-center ml-3" method="post">
                  <input type="text" id="fname" name="name" placeholder="Your name..">
                  <!-- <label for="lname">Email</label> -->
                  <input type="text" name="email" placeholder="Your Email..">
                  <!-- <label for="lname">Phone</label> -->
                  <input type="text" name="phone" placeholder="Your phone number..">
                  <!-- <label for="subject">Send</label> -->
                  <textarea id="msg" name="msg" placeholder="Write something.." style="height:200px"></textarea>
                  <button class="button" type="submit" value="Send" name="submit">Send</button>
                  <!-- <button type="button" class="btn btn-success">Success</button> -->
                </form>
              </div>
            </div>

            <div class="col-lg-5 d-flex flex-column justify-content-center ">

              <div class="container d-flex flex-column align-items-center">
                <img class="img " src="../image/email.jpg" alt="">

                <div class="row fb">
                  <div class=" col-xs-6 col-sm-6 col-lg-6 ">
                    <div class="image "><img src="../image/nam.jpg" alt="" class="img1"></div>
                    <div class="img2 ">
                      <a href="https://www.facebook.com/hoilam.chi.735/"><i class="fab fa-facebook"></i></a>
                      <a href="https://www.instagram.com/hoangvohoainam/"><i class="fab fa-instagram"></i></a>
                      <a href="https://github.com/Nam-yuuri"><i class="fab fa-github"></i></a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-lg-6 ">
                    <div class="image "><img src="../image/minh.jpg" alt="" class="img1"></div>
                    <div class="img2 ">
                      <a href="https://www.facebook.com/profile.php?id=100014739513664"><i class="fab fa-facebook"></i></a>
                      <a href="https://www.instagram.com/dn_min1304/"><i class="fab fa-instagram"></i></a>
                      <a href="https://github.com/hnimnd1304"><i class="fab fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

         <?php include("footer.php");?> 
