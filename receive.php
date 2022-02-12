<?php

 
if(isset($_POST ['Submit'])){
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
    $message="pickup: ".$pickup. "\n"
	. "dropoff: ".$dropoff. "\n"
	. "fullname: ".$fullname. "\n"
	. "phone: ".$phone. "\n"
	. "cars: ".$cars. "\n"
	. "vehicletype: ".$vehicletype. "\n"
	. "dropoffdate: ".$dropoffdate. "\n"
	. "dropoff: ".$dropoff. "\n"
	."wrote the following: " ."\n\n" .$timeset;
    $headers= "From: ".$email_from;



	if(!mail($to, $subject, $message, $headers)) {
		print "error";
    }else {
		print  "Booking Acknowledged Thank You! for".$fullname;
    }
    


} // if submit closeing



?>
