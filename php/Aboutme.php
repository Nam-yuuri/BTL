<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Aboutme.css">
  </head>
  <body>
       <style>
          @media  (min-width: 1208px) {
              .container1{
                margin-left:220px;
              }
             .col-sm-6 p{
              font-size:300%;
              color:white;
              margin-top:20px;
              text-align:center;
            }
            .btn{
              margin-top:30px;
            }
            .col-sm-6 img{
            }
          }
          @media (min-width: 990px ) and (max-width:1208px){
            .container1{
              margin-left:175px;
              width:auto;
              height:auto;
            }
            .col-sm-6 p{
              font-size:200%;
              color:white;
              margin-top:20px;
            }
            .btn{
              margin-top:30px;
            }
            .col-sm-6 img{
            }
            .col-sm-6 img{
              width:170px;
              height:170px;
            }

          }
          @media (max-width:990px){
            .container1{
              margin-left:0px;
              width:auto;
              height:auto;
            }
            .col-sm-6 p{
              font-size:150%;
              color:white;
              margin-top:20px;
            }
            .btn{
              margin-top:30px;
            }
            .col-sm-6 img{
            }
            .col-sm-6 img{
              width:100px;
              height:100px;
            }


          }
        </style>

        <?php include("header.php");?>
        
        <div class="container1" style="background:url(../image/background-aboutme.jpg) no-repeat center  center; background-size:cover;">
          <div class="aboutme">
            <div class="row" >
              <div class="col-sm-6" style="width:auto" > 
              <a href="../image/minh.jpg">
                <span class="glyphicon glyphicon-log-in"></span>
                <img src="../image/minh.jpg" alt="">
              </a>
                <p>Hoàng Võ Hoài Nam</p>
                <a href="aboutnam.php"><button type="button" class="btn btn-outline-info">Tìm Hiểu</button></a>
              </div>
              <div class="col-sm-6" style="width:auto" > <a href="../image/minh.jpg"><span
                class="glyphicon glyphicon-user"></span><img src="../image/minh.jpg" alt=""></a>
                <p>Đào Nhật Minh</p>
                <a href="aboutminh.php"><button type="button" class="btn btn-outline-info">Tìm Hiểu</button></a>
              </div>                    
            </div>
          </div>
        </div>
        <?php include("footer.php");?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>