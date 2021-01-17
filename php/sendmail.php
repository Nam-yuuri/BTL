<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
require_once("config.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
}
$mail=new PHPMailer();
$mail->SMTPDebug = 3;                                 
 $mail->isSMTP();                                       
 $mail->Host = 'smtp.gmail.com;';                       
 $mail->SMTPAuth = true;                              
 $mail->Username = 'daonhatminhwru2000@gmail.com';               
 $mail->Password = '0913903597';                     
 $mail->SMTPSecure = 'tls';                          
 $mail->Port = 587;                                     
 $mail->setFrom($email,$name);  
 $mail->addAddress('daonhatminhwru2000@gmail.com');                    
 $mail->isHTML(true);                                   
 $mail->Subject = $email;  
 $mail->Body  =  $msg; 
 if($mail->send()) {  
   echo 'Message has been sent';  
   header("location: contact.php");
   
 } else {  
   echo 'Message could not be sent';  
 }   

 ?>  