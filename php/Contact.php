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
        <div class="container">
          <div class="row">
            <!-- <div class="row"> -->
            <div class="col-lg-7">
              <div class="container">
                <h2>Contact me</h2>
                <form action="/action_page.php" class="d-flex flex-column justify-content-center ml-3">
                  <!-- <label for="fname">Name</label> -->
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">

                  <!-- <label for="lname">Email</label> -->
                  <input type="text" id="lname" name="lastname" placeholder="Your Email..">
                  <!-- <label for="lname">Phone</label> -->
                  <input type="text" id="lname" name="lastname" placeholder="Your phone number..">
                  <!-- <label for="subject">Send</label> -->
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                  <input type="submit" value="Send">
                </form>
              </div>
            </div>

            <div class="col-lg-5 d-flex flex-column justify-content-center ">

              <div class="container d-flex flex-column align-items-center">
                <img class="img " src="../image/email.jpg" alt="">

                <div class="row fb">
                  <div class=" col-xs-6 col-sm-6 col-lg-6 ">
                    <div class="image "><img src="../image/minh.jpg" alt="" class="img1"></div>
                    <div class="img2 ">
                      <a href=""><i class="fab fa-facebook"></i></a>
                      <a href=""><i class="fab fa-facebook-messenger"></i></a>
                      <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-lg-6 ">
                    <div class="image "><img src="../image/minh.jpg" alt="" class="img1"></div>
                    <div class="img2 ">
                      <a href=""><i class="fab fa-facebook"></i></a>
                      <a href=""><i class="fab fa-facebook-messenger"></i></a>
                      <a href=""><i class="fab fa-twitter"></i></a>
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
