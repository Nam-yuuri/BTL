
<!doctype html>
<html lang="en">

<head>
  <title>CV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css
"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css
"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/work.css">
</head>
<?php include("header.php");?>

<body style="background:url(https://c1.wallpaperflare.com/preview/248/992/890/business-business-meeting-coffee-conference-room.jpg
) no-repeat center  center; background-size:cover;height:100vh">

<div class="container">
<div class="section">
					<h2 class="title title--h2">What I'm Doing</h2>
					<div class="row">

						<!-- Case Item -->          <?php 
          	          $host='localhost';
                      $uer='root';
                      $pass='';
                      $db_name='cv';
              
          		  $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
          
					 $sql="select * from work where id = 2";
					if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
						
							while ($post=mysqli_fetch_array($result)) {
					?>
						<div class="col-12 col-lg-6 case-item-wrap">
							<div class="case-item" style="height: 190px;">
                                <!-- <img class="case-item__icon" src="../assets/icons/icon-design.svg" alt=""> -->
                                <img class="case-item__icon" src="../image/<?php echo $post['image'] ?>" alt="">
								<h3 class="title title--h3"><?php echo $post['name'] ?></h3>
								<p class="case-item__caption"><?php echo $post['content'] ?></p>
							</div>
						</div>
								<?php }}} ?>
            </div>
					</div>	
        <div class="section">
        <h2 class="title title--h2">Testimonials</h2>
      <div class="row">
      <?php
      $sql="select * from testimonials where id = 2";
					if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
						
							while ($post=mysqli_fetch_array($result)) {
					?>

        <div class="col-md-4 testimonials">
          <p><?php echo $post['content'] ?></p>
          <img src="../image/<?php echo $post['image'] ?>">
          <p><b><?php echo $post['name'] ?></b></p>

        </div>
        <?php }}} ?>

      </div>
  </div>


</section>
</div>