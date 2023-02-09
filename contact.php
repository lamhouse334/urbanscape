<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	
	$to = 'ravindhar66@gmail.com';
	$subject = 'Form Submission';
	$message = "Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
	$headers = "From: ".$email;
	
	if(mail($to, $subject, $message, $headers)){		
		echo "<h1>Sent Succesfully! Thank You"." ".$name.", We will Contact you shortly!</h1>";
			}
			else{
				echo "Went wrong!";				
			}	
}

?>