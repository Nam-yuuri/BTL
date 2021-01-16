<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <style>
    h1{
        text-align: center;
    }
  </style>
  <?php 
    $host='localhost';
    $uer='root';
    $pass='';
    $db_name='cv';
    session_start();

    // Create connection
    $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="select * from account";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                
    ?>
<body class="">
    <?php include("headeradmin.php"); ?>
    <div class="container ">
    <h1>ACCOUNT</h1>
    <hr>
            <div class="row ">

                <table class='table table-bordered table-striped' style="text-align:center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>ACCOUNT</th>
                            <th>VIEW</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($post=mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $post['id'] ?></td>
                            <td><img src="../image/<?php echo $post['image'] ?>" style="width:50px;height:50px" alt=""></td>
                            <td><?php echo $post['account'] ?></td>
                            <td><button type="button" class="btn btn-link"><a href="Homeuser.php?id='<?php  echo $post['id']?>'"  title='Update Record' data-toggle='tooltip'><i class="fas fa-eye"></i>VIEW</a></button></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div>
<?php
        }
    }
?>    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include("footer.php") ?></body>
  </body>
</html>