<!doctype html>
<html lang="en">

<head>
  <title>CV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->

</head>  
<body>
  <?php 
    $host='localhost';
    $uer='root';
    $pass='';
    $db_name='cv';

    if(isset($_GET['id1'])){
        $id = $_GET['id1'];
    }
    // echo "sdfd:".$id;

    // Create connection
    $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $sql="select * from admin WHERE id=".$id;
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                }
            }
    if(isset($_POST['submit'])){
        $tea = $_POST['teamname'];
        $int = $_POST['introduce'];
        $ski = $_POST['skill'];
        $ima1 = $_POST['image1'];
        $ima2 = $_POST['image2'];
        $nam1 = $_POST['name1'];
        $nam2 = $_POST['name2'];
        $ach = $_POST['achievement'];
        $sho = $_POST['short'];
        $dis = $_POST['distanttarget'];
        $sqln = "update admin set  teamname='".$tea."', introduce ='".$int."', skill ='".$ski."', image1 ='".$ima1."', image2 ='".$ima2."',
         name1 ='".$nam1."', name2 ='".$nam2."',short ='".$sho."',distanttarget ='".$dis."'  where id =".$id;
        if(mysqli_query($conn,$sqln)){
            header("location:Homeadmin.php");
        }else{
            echo 'jabckjabc';
        }
    }
    ?>
    <style>
        /* th {
                text-align: center;
        } */
        /* .th_titl{
            transform: translate(30%,0);
        } */
        h1{
            text-align: center;
        }
        /* button{
            margin-left: 50%;
        } */
        .bt{
            margin-right:40%;
        }
        .bt1{
            margin-left:40%;
        }
        .ip{
            margin-right:30%;
            margin-left:20%;
        }

    </style>
    <div class="continer">
            <form method="post">
                <h1>UPDATE FORM</h1><hr>
            <div class="ip " >
                <table class="table" style="tex-align:center">
                    <thead >
                        <tr class="th_titl" class="ok">
                            <th  style="width: 124px;">ID</th>
                            <th><input type="text" name ="id" style="width: 508px;" value="<?php echo $row['id']  ?>" readonly></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th  style="width: 124px;">TEAM NAME</th>
                            <th><input type="text" name ="teamname" style="width: 508px;" value="<?php echo $row['teamname']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th  style="width: 124px;">INTRODUCE</th>
                            <th><input type="text" name ="introduce" style="width: 508px;" value="<?php echo $row['introduce']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">SKILL</th>
                            <th><input type="text" name ="skill" style="width: 508px;" value="<?php echo $row['skill']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">IMAGE1</th>
                            <th><input type="text" name ="image1" style="width: 508px;" value="<?php echo $row['image1']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">IMAGE2</th>
                            <th><input type="text" name ="image2" style="width: 508px;" value="<?php echo $row['image2']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">NAME1</th>
                            <th><input type="text" name ="name1" style="width: 508px;" value="<?php echo $row['name1']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">NAME2</th>
                            <th><input type="text" name ="name2" style="width: 508px;" value="<?php echo $row['name2']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">ACHIEVEMENT</th>
                            <th><input type="text" name ="achievement" style="width: 508px;" value="<?php echo $row['achievement']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">SHORT-TERM GOAL</th>
                            <th><input type="text" name ="short" style="width: 508px;" value="<?php echo $row['short']  ?>"></th>

                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">DISTANT TARGET</th>
                            <th><input type="text" name ="distanttarget" style="width: 508px;" value="<?php echo $row['distanttarget']  ?>"></th>

                        </tr>
                    </thead>
                </table>
            </div>
            <!-- <button name="submit">save</button> -->
            <button class="bt1" type="submit" name="submit" style="color:blue"><i class="fas fa-save"></i> SAVE</button>
            <!-- <a style="margin-right: 40%; margin-bottom:5px" class="btn btn-primary" href="index.php" role="button">back</a> -->
            <button class="bt"><a style="margin-bottom:5px,with:30px" href="accountadmin.php" ><i class="fas fa-backspace"></i> BACK</a></button>

    </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>