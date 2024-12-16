<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
// $message= $_POST['message'];
$to = "maigareebhu77@email.com";
$subject = "Mail From YouHealHospital";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n";
$headers = "From: youhealhospital@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt);
}
//redirect
header("Location:thankyou.php");
?>
