<?php

	$location = $_POST['location'];
	$to = "insert-mail-here";
	$name= $_POST['name'];
	$mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	$message = "from: $name \n Content: \n $content \nCorreo: $mail";
	if(!empty($name)&&!empty($mail)&&!empty($subject)&&!empty($content)){
		mail($to, $subject, $message);
		header("location: http://localhost:82/franksoft/Views/features/message.php?location=".$location."&message=successful");
	}else{
		header("location: http://localhost:82/franksoft/Views/features/message.php?location=".$location."&message=fail");
	}

?>
