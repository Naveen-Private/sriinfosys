<?php

	require 'class_phpmailer.php';
	
	try{
		$mail = new PHPMailer(true);
		$email_to =   'naveen.yaragarla@gmail.com';
		$subject = "Test";
		$message = AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		if(mail($email_to, $subject, $message, $headers)){
			echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
		}else{
			echo 'failed';// ... or this one to tell it that it wasn't sent    
		}
		/* $to = 'naveen.yaragarla@gmail.com';
		$mail->AddAddress($to);
		$mail->Subject = "Candidate Resume";
		//$mail->IsSMTP(); // tell the class to use SMTP
		//$mail->SMTPAuth = true; // enable SMTP authentication
		//$mail->Port = 25; // set the SMTP server port
		
		$mail->IsSendmail(); // tell the class to use Sendmail
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		//$mail->WordWrap = 80; // set word wrap
		
		//echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		
		$mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
		$mail->IsHTML(true); // send as HTML
		$mail->Send(); */
		echo 'Message has been sent.';
	} catch (phpmailerException $e) {
		echo $e->errorMessage();
	}
    
?>