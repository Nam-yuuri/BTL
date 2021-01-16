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
	<link rel="stylesheet" href="../css/resume.css">
</head>
<style>
	h1 {
		text-align: center;
	}
</style>

<body>
	<?php include("headeradmin.php");
	          $host='localhost';
			  $uer='root';
			  $pass='';
			  $db_name='cv';
			if(isset($_GET['id'])){
			  $id = $_GET['id'];
		  }
		  $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
		  if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
		  }
			  $sql="select * from education where id = ".$id;
				  if($result = mysqli_query($conn, $sql)){
					  if(mysqli_num_rows($result) > 0){
		  ?>


	<div class="container-fluid"
		style="background:url(https://c1.wallpaperflare.com/preview/427/745/192/notebook-natural-laptop-macbook.jpg) no-repeat center  center; background-size:cover;height:100%">
		<div class="container">
			<h1 class="title title--h1 title__separate">Resume</h1><hr>



			<div class="section">
				<h2 class="title title--h2"><img class="title-icon" src="../image/education.png" alt=""> Education</h2>
				<div class="timeline">
					<!-- Item -->
					<?php
                    while ($post=mysqli_fetch_array($result)) {
                    ?>
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">
							<?php echo $post['school']  ?>
						</h5>
						<span class="timeline__period">
							<?php echo $post['date']  ?>
						</span>
						<p class="timeline__description">
							<?php echo $post['description']  ?>
						</p>
					</article>
						<?php } 
					  }
					}
						?>
					<!-- Item -->
				</div>
			</div>
			<h2 class="title title--h2"><img class="title-icon" src="../image/experience.png" alt=""> Experience</h2>
			<div class="timeline">
				<!-- Item -->
				<?php 
					 $sql="select * from experience where id = ".$id;
					if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
						
							while ($post=mysqli_fetch_array($result)) {

	
				?>
				<article class="timeline__item">
					<h5 class="title title--h3 timeline__title">
						<?php echo $post['job'] ?>
					</h5>
					<span class="timeline__period">
						<?php echo $post['date'] ?>
					</span>
					<p class="timeline__description">
						<?php echo $post['description'] ?>
					</p>
				</article>
				<?php 
							}
						}
					}
				?>
			</div>
			<!-- </div> -->

			<div class="section">
				<h2 class="title title--h2">My Skills</h2>
				<div class="box-gray">
					<!-- Progress -->
					<?php 
					 $sql="select * from skills where id = ".$id;
					if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
						
							while ($post=mysqli_fetch_array($result)) {
					?>

					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $post['level'] ?>" aria-valuemin="0"
							aria-valuemax="100" style="width: <?php echo $post['level'] ?>%; z-index: 2;">
							<div class="progress-text"><span>
									<?php echo $post['skill'] ?>
								</span><span>
									<?php echo $post['level'] ?>
								</span>
							</div>
							</div>
						</div>
						<?php 
							}
						}
					}
				?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php include("footer.php");?>