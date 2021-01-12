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
  <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
  <style>
    @media (max-width:999px) {
      .col-lg-2 {
        height: 0px;
      }
    }

    @media (max-width:577px) {
      .col-sm-6 {
        width: 200px;
      }

      @media (max-width:540px) {
        .col-sm-6 {
          width: 180px;
        }
      }

      img {
        width: 100px;
      }
    }
  </style>
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-2">
        <?php include("header.php");?>
      </div>
    </div>
    <div class="col-lg-10">
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
            <!-- </div> -->
            <!-- <div class="row">
            <a href=""><a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-facebook-messenger"></i></a></a>
          </div>
          </div> -->

          </div>
        </div>
      </div>
      <?php include("footer.php");?>
    </div>
  </div>
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