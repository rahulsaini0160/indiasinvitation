<?php
//get data from form  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dateoftravel = $_POST['dateoftravel'];
    $requirement = $_POST['requirement'];

$to = "spain@indiasinvitation.com";

$subject = "Mail From website";
$txt =" Name = ". $name . "\r\n Email = " . $email . "\r\n Phone =" . $phone . "\r\n Date-of-travel =" . $dateoftravel . "\r\n Message =" . $requirement;
$headers = "From: info@indiasinvitation.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>