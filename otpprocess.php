<?php
session_start();
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
	echo "<script>
					alert('Sucessfull');
					window.location.href='otp1.php';
			  </script>";
		exit; 
}
else{
	session_unset();
	session_destroy();
	echo "<script>
					alert('Error');
					window.location.href='main.html';
			  </script>";
		exit;
}
?>