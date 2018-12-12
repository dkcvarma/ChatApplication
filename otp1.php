<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chat</title>
        <meta name="description" content="Exam Scheduling Management">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        
        <meta property="og:title" content="EMS">
   
        <meta property="og:url" content="EMS">
        <meta property="og:type" content="website">
		
		
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		
		<link rel="stylesheet" type="text/css" href="css/main1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		.alert1 {
				margin-top:-10px;
				padding-bottom:10px;
				background-color: transparent;
				color: red;
				font-size:15px;
			}
			.closebtn1 {
				margin-left: 15px;
				color: red;
				font-weight: bold;
				float: right;
				font-size: 19px;
				line-height: 20px;
				cursor: pointer;
				transition: 0.3s;
			}
		</style>
</head>
<body style="background-image: url('img/otp1.jpg');">
	<div id="login_widget" style="background-color: rgba(0,0,0,0);margin-right:35%;margin-top:3%;">
		            <section>				
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <div id="wrapper">
                        <div id="login" class="animate form" style="background-color: rgba(0,0,0,0.5);">
                            <form name="myform" method="post"  onsubmit=" return validateform()" action="updatepass.php" autocomplete="on"> 
                                <h1>Recovery</h1> 
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> <b>New password</b> </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="New Password"/>
									<div class="alert1" id="ale5" style="display:none;">
										<span class="closebtn1" onclick="this.parentElement.style.display='none';">&times;</span>
										<strong>Give Proper format of password</strong>
									</div>
									<div class="alert1" id="ale6" style="display:none;">
										<span class="closebtn1" onclick="this.parentElement.style.display='none';">&times;</span>
										<strong>Length of password should be atleast 4</strong>
									</div>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p"> confirm password </label>
                                    <input id="passwordsignup_confirm" name="retype" required="required" type="password" placeholder="Confirm Passsword"/>
									<div class="alert1" id="ale7" style="display:none;">
										<span class="closebtn1" onclick="this.parentElement.style.display='none';">&times;</span>
										<strong>Passwords does not match</strong> 
									</div>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Recover" /> 
								</p>
                            </form>
                        </div>
						
                    </div>
            </section>	
		
	</div>

</body>
<script>
		function validateform(){
			
			var password = document.myform.password.value;
			if(!/^[a-zA-Z0-9]*$/.test(password)){
			$("#ale5").show();
			$("#ale6").hide();
			$("#ale7").hide();
			return false;}
			
			if(password.length<4){
				$("#ale6").show();
				$("#ale5").hide();
				$("#ale7").hide();
				return false;}
				
			var conf = document.myform.retype.value;
			if(!conf.match(password)){
				$("#ale7").show();
				$("#ale6").hide();
				$("#ale6").hide();
			return false;}
		}
   </script>
</html>