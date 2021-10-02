<?php
  $destiny = "jg910442@gmail.com";
	$email = $_POST['email'];
	$affair = $_POST['affair'];
	$theme = $_POST['theme'];
	$message = $_POST['message'];
	mail($destiny, $email, $affair, $message, $theme);
	echo "<script>window.location='index.php';</script>";
?>
