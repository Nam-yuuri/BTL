<?php 
  require("config.php");
?>
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
  <link rel="stylesheet" href="../css/work.css">
</head>
</style>
<?php include("header.php");?>

<body style="background:url(../image/background-work.jpg) no-repeat center  center; background-size:cover;height:100vh">


<?php 
  $result = mysqli_query($conn, "SELECT * FROM work");
  if(mysqli_num_rows($result)>0){
    $work = mysqli_fetch_all($result);
  }
?>

<div class="container">
<div class="section">
					<h2 class="title title--h2">What I'm Doing</h2>
					<div class="row">
          <?php foreach($work as $i){ ?>

						<!-- Case Item -->
						<div class="col-12 col-lg-6 case-item-wrap">
							<div class="case-item" style="height: 190px;">
                <img class="case-item__icon" src="<?php echo $i[3] ?>">
								<h3 class="title title--h3"><?php echo $i[1] ?></h3>
								<p class="case-item__caption"><?php echo $i[2] ?></p>
							</div>
						</div>
            <?php } ?>   

					</div>	
				</div>
               

<?php 
  $result = mysqli_query($conn, "SELECT * FROM testimonials");
  if(mysqli_num_rows($result)>0){
    $testimonials = mysqli_fetch_all($result);
  }
?>

<div class="section">
	<h2 class="title title--h2">Testimonials</h2>
      <div class="row">
      <?php foreach($testimonials as $i){ ?>
        <div class="col-md-4 testimonials">

          <p class="text-center"><?php echo $i[2] ?></p>
          <img class="testimonials-img" src="<?php echo $i[3] ?>">
          <p class="o" style="#"><b><?php echo $i[1] ?></b></p>
        </div>
      <?php } ?>   
      </div>
  </div>
</section>



<?php include("footer.php");?>