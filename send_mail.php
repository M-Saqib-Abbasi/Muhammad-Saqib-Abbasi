<?php
if(isset($_POST['submit'])){
$to_email = "ms.softdevelopment@gmail.com";
$subject = $_POST['subject'];
$body = "Name : ".$_POST['name']."\nEmail From : ".$_POST['email']."\n".$_POST['message'];
$headers = "From: ms.softdevelopment@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location:https://mrabbasi-portfolio.000webhostapp.com/?err=2");
} else {
    header("Location:https://mrabbasi-portfolio.000webhostapp.com/?err=1");
    
}    
}
else{
    echo "out of first IF";
}
?>