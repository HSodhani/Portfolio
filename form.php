<?php
	if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='hardik.sodhani@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<script>alert("Sent Successfully! Thank you"." ".$name.", We will contact you shortly!)</script>';
		}
		else{
			echo '<script>alert("Something went wrong!")</script>';
		}
	}
?>