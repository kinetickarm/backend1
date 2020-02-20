<?php
		session_start();
		if(isset($_SESSION["Email"]))
		{	
			require("PHPMailer/PHPMailer.php");
  			require("PHPMailer/SMTP.php");
  			require("PHPMailer/Exception.php");
			$mail=new PHPMailer\PHPMailer\PHPMailer();
			//Send mail using gmail
			 $mail->IsSMTP(); // telling the class to use SMTP
			 $mail->Mailer="smtp";
			 $mail->SMTPAuth=true; // enable SMTP authentication
			 $mail->SMTPSecure="ssl"; // sets the prefix to the servier
			 $mail->SMTPDebug=1;
			 $mail->IsHTML('true');
			 $mail->Host="smtp.gmail.com"; // sets GMAIL as the SMTP server
			 $mail->Port=465; // set the SMTP port for the GMAIL server
			 $mail->Username='hostelmanagement01@gmail.com'; // GMAIL username
			 $mail->Password='Vgec_hostel0101'; // GMAIL password
			
			//Typical mail data
			$mail->AddAddress($_SESSION['Email']);
			$mail->SetFrom("hostelmanagement01@gmail.com","Hostel Management");
			$mail->Subject="Account Verification";
			$otp=rand(1000,9999);
			$mail->Body="<h2><center>Your OTP is ".$otp."</center></h2>";
			if($mail->Send())
			{
			 	$_SESSION['otp']=$otp;
			 	header("location: otpverification.php");
			 	die();
			}
			else
			{
				echo '<script> function fail() {
				alert("OTP can not be generated. Check for network problem.\nRedirecting to sign up page");
			window.location="login-07.php";
			}; fail(); </script>';	
			}
		}
		else
		{
			echo "cant send otp";
			//header("location: login-07.php");
			die();
		}
?>	