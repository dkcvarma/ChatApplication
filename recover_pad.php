<?php
	error_reporting(0);

	include "presets.php";

	$username = $_POST['username'];
	$mobile = $_POST['mobile'];

	$sql = "SELECT username,password,mobile,id FROM user WHERE username='$username'";
		
	if($res = mysqli_query($connection,$sql)) {
		while($chk = mysqli_fetch_array($res)) {
			//$id = $chk['id'];
			$username = $chk['username'];
			$password = $chk['password'];
			$mobile1 = $chk['mobile'];
			$id = $chk['id'];
		}
		if($mobile == $mobile1){
			//Multiple mobiles numbers separated by comma
			//$mobileNumber = $_POST["phone"];
			//Your message to send, Add URL encoding here.
			session_start();
			$rndno=rand(1000, 9999);
			//API URL
			//$url="https://2factor.in/API/V1/bb0d1e50-2f24-11e8-a895-0200cd936042 /SMS/+919701867437/1235";
			$url="https://2factor.in/API/R1/?module=TRANS_SMS&apikey=bb0d1e50-2f24-11e8-a895-0200cd936042&to=".$mobile."&from=chattt&templatename=chat06&var1=".$rndno;
			// init the resource
			$ch = curl_init();
			curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $postData
			//,CURLOPT_FOLLOWLOCATION => true
			));
			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			//get response
			$output = curl_exec($ch);
			//Print error if any
			if(curl_errno($ch))
			{
			echo 'error:' . curl_error($ch);
			}
			curl_close($ch);
			if(isset($_POST['btn-save']))
			{
				$_SESSION['otp']=$rndno;
				$_SESSION['idd']=$id;
				header( "Location: otp.php" );
			}
		}
		else {
		echo "<script>
					alert('Enter registered mobile Number');
					window.location.href='main.html';
			  </script>";
		exit;
	}
	}
	else {
		echo "<script>
					alert('Error');
					window.location.href='main.html';
			  </script>";
		exit;
	}
?>