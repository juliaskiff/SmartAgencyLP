<?php 
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];

$to = "79991570874@yandex.ru";

$subject = "Request form";

$message = "
Request form: ".htmlspecialchars($whatever)."<br />
User name: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)." <br />
Message: ".htmlspecialchars($user_message);


$headers = "From: homework.sl <putin@homework.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);

header('Location: thanks.html');
exit(); 
?>
