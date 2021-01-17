<!doctype html>
<html lang="en">

<head>
  <title>CV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css
">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js
"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js
"></script>
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
        $sql="select * from about WHERE id=".$id;
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                }
            }
    if(isset($_POST['submit'])){
        $ima = $_POST['image'];
        $int = $_POST['introduce'];
        $nam = $_POST['name'];
        $bir = $_POST['birthday'];
        $pho = $_POST['phone'];
        $add = $_POST['address'];
        $mai = $_POST['mail'];
        $deg = $_POST['degree'];
        $bra = $_POST['branch'];
        $sho = $_POST['short'];
        $dis = $_POST['distanttarget'];
        $sqln = "update about set  image ='".$ima."', introduce ='".$int."', name ='".$nam."', birthday ='".$bir."', phone ='".$pho."',
        address ='".$add."', mail ='".$mai."',degree ='".$deg."',branch ='".$bra."',short ='".$sho."',distanttarget ='".$dis."'  where id =".$id;
        if(mysqli_query($conn,$sqln)){
            header("location: accountadmin.php");
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
            margin-right:50px;
            margin-left:50px;
        }

    </style>
    <div class="continer">
            <form method="post">
                <h1>UPDATE FORM</h1><hr>
            <div class="row ip" >
            <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <h2>ABOUT ME</h2>
                <table class="table" style="tex-align:center">
                    <thead >
                        <tr class="th_titl" class="ok">
                            <th  style="width: 124px;">IMAGE</th>
                            <th><input type="text" name ="image" style="width: 508px;" value="<?php echo $row['image']  ?>" readonly></th>
                        </tr>
                            <th  style="width: 124px;">INTRODUCE</th>
                            <th><input type="text" name ="introduce" style="width: 508px;" value="<?php echo $row['introduce']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">NAME</th>
                            <th><input type="text" name ="name" style="width: 508px;" value="<?php echo $row['name']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">BIRTHDAY</th>
                            <th><input type="date" name ="birthday" style="width: 508px;" value="<?php echo $row['birthday']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">PHONE</th>
                            <th><input type="text" name ="phone" style="width: 508px;" value="<?php echo $row['phone']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">ADDRESS</th>
                            <th><input type="text" name ="address" style="width: 508px;" value="<?php echo $row['address']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">MAIL</th>
                            <th><input type="text" name ="mail" style="width: 508px;" value="<?php echo $row['mail']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">DEGREE</th>
                            <th><input type="text" name ="degree" style="width: 508px;" value="<?php echo $row['degree']  ?>"></th>
                        </tr>
                        <tr class="th_titl" class="ok">
                            <th style="width: 124px;">BRANCH</th>
                            <th><input type="text" name ="branch" style="width: 508px;" value="<?php echo $row['branch']  ?>"></th>
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
            <div class="col-lg-3"></div>
            <!-- <button name="submit">save</button> -->
            <button class="bt1" type="submit" name="submit" style="color:blue"><i class="fas fa-save"></i> SAVE</button>
            <!-- <a style="margin-right: 40%; margin-bottom:5px" class="btn btn-primary" href="index.php" role="button">back</a> -->
            <button class="bt"><a style="margin-bottom:5px,with:30px" href="accountadmin.php" ><i class="fas fa-backspace"></i> BACK</a></button>

    </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js
" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js
" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js
" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>