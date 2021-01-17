<?php
    session_start();
    include "config.php";
    if(isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validate($_POST['username']);
        $pass = validate($_POST['password']);

        if(empty($user)){
            header("location: login_index.php?error=Username is required");
            exit();
        }else if(empty($pass)){
            header("location: login_index.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM account WHERE account = '$user' AND password = '$pass'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['account'] == $user && $row['password'] == $pass){
                    $_SESSION['account'] = $row['account'];
                    header('location: Homeadmin.php');
                    exit();
                }else{
                    header("location: login_index.php?error=Incorrect username or password");
                    exit();
                }
            }else{
                header("location: login_index.php?error=Incorrect username or password");
                exit();
            }
        }
    }else{
        header('location: login_index.php');
        exit();
    }
?>