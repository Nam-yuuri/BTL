<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
require_once("config.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
}
$mail=new PHPMailer();
$mail->SMTPDebug = 3;                                 
 $mail->isSMTP();                                       
 $mail->Host = 'smtp.gmail.com;';                       
 $mail->SMTPAuth = true;                              
 $mail->Username = 'hoangvohoainamvtath5@gmail.com';               
 $mail->Password = 'hoangvohoainam';                     
 $mail->SMTPSecure = 'tls';                          
 $mail->Port = 587;                                     
 $mail->setFrom($email,$name);  
 $mail->addAddress('hoangvohoainamvtath5@gmail.com');                    
 $mail->isHTML(true);                                   
 $mail->Subject = $subject;  
 $mail->Body  =  $email;  
 if($mail->send()) {  
   echo 'Message has been sent';  
   header("location: contact.php");
 } else {  
   echo 'Message could not be sent';  
 }   

 ?>  