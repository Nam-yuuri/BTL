<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.css">
  </head>
  <body>
    <style>
      @media (max-width:999px){
       .col-lg-2{
         height:0px;
       }
      }
      @media (max-width:577px){
        .col-sm-6{
          width:200px;
        }
        img{
          width:100px;
        }
      }
    </style>
    <div class="container-fluid" style="background:url(../image/backgruond-contact.jpg) no-repeat center  center; background-size:cover;height:100vh">
      <div class="row">
        <div class="col-lg-2">
          <?php include("header.php");?>
        </div>
        </div>
        <div class="col-lg-10">
          <div class="container-fluid" >
              <div class="contact">
                <div class="row" >
                  <div class="col-sm-6" > <a href="../image/minh.jpg"><span
                    class="glyphicon glyphicon-log-in"></span><img src="../image/minh.jpg" style="margin-bottom:30px" alt=""></a>
                    <h3>Hoàng Võ Hoài Nam</h3>
                    <a href="aboutnam.php"><button type="button" style="margin-top:30px" class="btn btn-outline-info">Tìm Hiểu</button></a>
                  </div>
                  <div class="col-sm-6" > <a href="../image/minh.jpg"><span
                    class="glyphicon glyphicon-user"></span><img src="../image/minh.jpg" style="margin-bottom:30px" alt=""></a>
                    <h3>Đào Nhật Minh</h3>
                    <a href="aboutminh.php"><button type="button" style="margin-top:30px" class="btn btn-outline-info">Tìm Hiểu</button></a>
                  </div>                    
                </div>
              </div>
            </div>
          </div>
          <?php include("footer.php");?>
        </div>
      </div>
    </div>        
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>