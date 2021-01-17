<!doctype html>
<html lang="en">
  <head>
    <title>CV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  </head>
  <body>

  <?php 
    $host='localhost';
    $uer='root';
    $pass='';
    $db_name='cv';
    // Create connection
    $conn=mysqli_connect($host,$uer,$pass,$db_name);// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        if(!empty($id)){
        $sql="select * from account where id = ".$id;
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    header("location:Home.php?temp=1");
                }else{
                    //$id = $_POST['id'];
                    $ima = $_POST['image'];
                    $acc = $_POST['account'];
                    $pas = $_POST['password'];
                    $sqln = "insert into account values ('".$id."','".$ima."','".$acc."','".$pas."'); ";
                    if(mysqli_query($conn,$sqln)){
                        header("location:accountadmin.php");
                    }else{header("location:Aboutme.php?temp=1");}
                }
            }else{header("location:work.php?temp=1");}
        }else{header("location:accountadmin.php?temp=1");}
    }
    ?>
    <style>
        /* th {
                text-align: center;
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
    </style>
        <form method="post">
        <h1>ADD FORM</h1>
            <div class="ip">
            <table class="table">
                <thead>
                    <tr class="ok">
                        <th class="th_titl" style="width: 124px;">ID</th>
                        <th><input type="text" name ="id" style="width: 508px;" ></th>
                    </tr>
                    <tr class="ok">
                        <th class="th_titl" style="width: 124px;">IMAGE</th>
                        <th><input type="text" name ="image" style="width: 508px;" ></th>
                    </tr>
                    <tr class="th_titl" class="ok">
                        <th style="width: 124px;">ACCOUNT</th>
                        <th><input type="text" name ="account" style="width: 508px;" ></th>
                    </tr>
                    <tr class="th_titl" class="ok">
                        <th style="width: 124px;">PASSWORD</th>
                        <th><input type="text" name ="password" style="width: 508px;" ></th>
                    </tr>
                </thead>
            </table>
            </div>
            <button class="bt1" name="submit" style="color:blue"><i class="fas fa-save"></i> SAVE</button>
            <!-- <a style="margin-right: 40%; margin-bottom:5px" class="btn btn-primary" href="index.php" role="button">back</a> -->
            <button class="bt"><a style=" margin-bottom:5px" href="index.php" ><i class="fas fa-backspace"></i> BACK</a></button>
    </form>
    <?php include("footer.php") ?></body>
  </body>
</html>