<html>
<?php 
/** send emails through the contact form in website */

$part_message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$contact= $_POST['contact'];
$from = "info@nexuselectrical.com.np";
$headers = "From:" . $from;
$message = "You have got a message from ".$name."(".$email.")"." (".$contact.")"." from your website: ".$part_message; 
$to = "nsushant021@gmail.com";
$subject = "Message from Nexus Electrical Website";

mail($to,$subject,$message);
header('Location: index.php');
exit();
?>