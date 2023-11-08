<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phonenumber'];
$Apptdate = $_POST['Appointment date'];
$symptoms = $_POST['Symptoms'];

$email_from = 'Care&Cure.com';

$email_subject = 'New Appointment';

$email_body = "Name: $name \n User Email: $email \n Phone Number: $phone\n Appointment Date: $Apptdate\n Symptoms: $symptoms\n  Date: ".date(d-m-Y), date("h:i:sa");
$to = 'WOUCareandCure@gmail.com';
$headers = "From= $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Register.html");

?>