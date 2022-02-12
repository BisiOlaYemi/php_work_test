<?php

if(isset($_POST ['Submit'])) {
    $pickup=$_POST['pickup']; 
    $dropoff=$_POST['dropoff']; 
    $fullname=$_POST['fullname']; 
    $phone=$_POST['phone']; 
    $email_from=$_POST['email']; 
    $cars=$_POST['cars']; 
    $vehicletype=$_POST['vehicletype'];
    $pickupdate=$_POST['pickupdate']; 
    $dropoffdate=$_POST['dropoffdate']; 
    $timeset=$_POST['timeset']; 

    $to='frankolayemi@gmail.com';
    $subject='Booking Submission';
    $message="pickup: ".$pickup. "\n". "dropoff: " .$dropoff. "\n". "wrote the following: " ."\n\n" .$timeset;
    $headers= "From: ".$email;

}
    if(mail($to, $subject, $message, $headers)){
        echo "Booking Acknowledged Thank You!.$pickup";
    }
        else {

            echo "Something Went Wrong";

        
    }




?>