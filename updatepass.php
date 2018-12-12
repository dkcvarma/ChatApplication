<?php
	session_start();
	include "presets.php";
	
	$id=$_SESSION['idd'];
	$password=$_POST['password'];
	
	$add2 = " UPDATE `user` SET `password`='$password' WHERE id='$id'";
	
	if(mysqli_query($connection,$add2)){
		session_unset();
		session_destroy();
		echo "<script>
					alert('Sucessfully Changed');
					window.location.href='main.html';
			  </script>";
		exit;
	}else{
		session_unset();
		session_destroy();
		echo "<script>
					alert('Error');
					window.location.href='main.html';
			  </script>";
		exit;
	}
?>