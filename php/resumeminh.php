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
			  $sql="select * from resume where id = ".$id;
				  if($result = mysqli_query($conn, $sql)){
					  if(mysqli_num_rows($result) > 0){
						  $row = mysqli_fetch_array($result);
					  }
				  }
		  if(isset($_POST['submit'])){
			  $id = $_POST['id'];
			  $sch1 = $_POST['school1'];
			  $tim1 = $_POST['time1'];
			  $des1 = $_POST['description1'];
			  $sch2 = $_POST['school2'];
			  $tim2 = $_POST['time2'];
			  $des2 = $_POST['description2'];
			  $sch3 = $_POST['school3'];
			  $tim3 = $_POST['time3'];
			  $des3 = $_POST['description3'];
			  $exp1 = $_POST['experience1'];
			  $tim4 = $_POST['time4'];
			  $des4 = $_POST['description4'];
			  $exp2 = $_POST['experience2'];
			  $tim6 = $_POST['time5'];
			  $des5 = $_POST['description5'];
			  $exp3 = $_POST['experience3'];
			  $tim6 = $_POST['time6'];
			  $des6 = $_POST['description6'];
			  $ski1 = $_POST['skill1'];
			  $per1 = $_POST['percent1'];
			  $ski2 = $_POST['skill2'];
			  $per2 = $_POST['percent2'];
			  $ski3 = $_POST['skill3'];
			  $per3 = $_POST['percent3'];
			  $ski4 = $_POST['skill4'];
			  $per4 = $_POST['percent4'];
			  $sqln = "update cars set id = '".$id."', school1='".$sch1."', time1 ='".$tim1."', description1 ='".$des1."', school2 ='".$sch2."', time2 ='".$tim2."', 
			  description2 ='".$des2."',school3 ='".$sch3."', time3 ='".$tim3."', description3 ='".$des3."', experience1 ='".$exp1."', time4 ='".$tim4."',  
			  description4 ='".$des4."',experience2 ='".$exp2."', time5 ='".$tim5."', description5 ='".$des5."', experience3 ='".$exp3."', time6 ='".$tim6."',  
			  description6 ='".$des6."',skill1 ='".$ski1."', percent1 ='".$per1."', skill2 ='".$ski2."', percent2 ='".$per2."', skill3 ='".$ski3."',percent3 ='".$per3."',skill4 ='".$ski4."',percent4 ='".$per4."'  
			  where id = ".$id;
			  if(mysqli_query($conn,$sqln)){
				  header("location:resume.php");
			  }
		  }
		  ?>

	<!-- <div class="row">
		<div class="col-lg-2"><a href="resume.php"><button type="button" class="btn btn-danger mt-2"><i
						class="fas fa-backspace"></i>BACK</button></a></div>
	</div> -->

	<div class="container-fluid"
		style="background:url(../image/background-target.jpg) no-repeat center  center; background-size:cover;height:100%">
		<div class="container">
			<h1 class="title title--h1 title__separate">Resume</h1>



			<div class="section">
				<h2 class="title title--h2"><img class="title-icon" src="../image/education.png" alt=""> Education</h2>
				<div class="timeline">
					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">
							<?php echo $row['school1']  ?>
						</h5>
						<span class="timeline__period">
							<?php echo $row['time1']  ?>
						</span>
						<p class="timeline__description">
							<?php echo $row['description1']  ?>
						</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">
							<?php echo $row['school2'] ?>
						</h5>
						<span class="timeline__period">
							<?php echo $row['time2'] ?>
						</span>
						<p class="timeline__description">
							<?php echo $row['description2'] ?>
						</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">
							<?php echo $row['school3'] ?>
						</h5>
						<span class="timeline__period">
							<?php echo $row['time3'] ?>
						</span>
						<p class="timeline__description">
							<?php echo $row['description3'] ?>
						</p>
					</article>
				</div>
			</div>
			<h2 class="title title--h2"><img class="title-icon" src="../image/experience.png" alt=""> Experience</h2>
			<div class="timeline">
				<!-- Item -->
				<article class="timeline__item">
					<h5 class="title title--h3 timeline__title">
						<?php echo $row['experience1'] ?>
					</h5>
					<span class="timeline__period">
						<?php echo $row['time4'] ?>
					</span>
					<p class="timeline__description">
						<?php echo $row['description4'] ?>
					</p>
				</article>

				<!-- Item -->
				<article class="timeline__item">
					<h5 class="title title--h3 timeline__title">
						<?php echo $row['experience2'] ?>
					</h5>
					<span class="timeline__period">
						<?php echo $row['time5'] ?>
					</span>
					<p class="timeline__description">
						<?php echo $row['description5'] ?>
					</p>
				</article>

				<!-- Item -->
				<article class="timeline__item">
					<h5 class="title title--h3 timeline__title">
						<?php echo $row['experience3'] ?>
					</h5>
					<span class="timeline__period">
						<?php echo $row['time6'] ?>
					</span>
					<p class="timeline__description">
						<?php echo $row['description6'] ?>
					</p>
				</article>
			</div>
			<!-- </div> -->

			<div class="section">
				<h2 class="title title--h2">My Skills</h2>
				<div class="box-gray">
					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
							aria-valuemax="100" style="width: 80%; z-index: 2;">
							<div class="progress-text"><span>
									<?php echo $row['skill1'] ?>
								</span><span>
									<?php echo $row['percent1'] ?>
								</span></div>
						</div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
							aria-valuemax="100" style="width: 75%; z-index: 2;">
							<div class="progress-text"><span>
									<?php echo $row['skill2'] ?>
								</span><span>
									<?php echo $row['percent2'] ?>
								</span></div>
						</div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
							aria-valuemax="100" style="width: 90%; z-index: 2;">
							<div class="progress-text"><span>
									<?php echo $row['skill3'] ?>
								</span><span>
									<?php echo $row['percent3'] ?>
								</span></div>
						</div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
							aria-valuemax="100" style="width: 50%; z-index: 2;">
							<div class="progress-text"><span>
									<?php echo $row['skill4'] ?>
								</span><span>
									<?php echo $row['percent4'] ?>
								</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php include("footer.php");?>