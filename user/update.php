<!DOCTYPE html>
<html>
<head>
	<title>Care Giver's|Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/Registration.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body
		{
			margin: 0;
			padding: 0;
			background: #efefef;
			font-size: 16px;
			color: black;
			font-family: sans-serif;
			font-weight: 300;
		}
		#login-box
		{
			position: relative;
			margin: 5% auto;
			height: 400px;
			width: 600px;
			background:white;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
		}
		.left-box
		{
			position: absolute;
			top: 0;
			left: 0;
			box-sizing: border-box;
			padding: 40px;
			width: 300px;
			height: 400px;
		}
		h1
		{
			margin: 0 0 20px 0;
			font-weight: 300;
			font-size: 28px;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
		}
		input[type="text"],input[type="Password"]
		{
			display: block;
			box-sizing: border-box;
			margin-bottom: 20px;
			padding: 4px;
			width: 220px;
			height: 32px;
			border: none;
			outline: none;
			border-bottom: 1px solid #aaa;
			font-family: sans-serif;
			font-weight: 400;
			font-size: 15px;
			transition: 0.2s ease;
		}
		 input[type="submit"]
		 {
		 	margin-bottom: 28px;
		 	width: 120px;
		 	height: 32px;
		 	background: #f44336;
		 	border:none;
		 	border-radius: 2px;
		 	color: #fff;
		 	font-family: sans-serif;
		 	font-weight: 500;
		 	text-transform: uppercase;
		 	transition: 0.2s ease;
		 	cursor: pointer; 
		 }
		input[type="submit"]:hover,input[type="submit"]:focus
		{
			background: green;
			transition: 0.2s ease;
		}

		.right-box
		{
			position: absolute;
			top: 0;
			right:0;
			box-sizing: border-box;
			padding: 40px;
			width: 300px;
			height: 400px;
			background-image:url(../images/signupback.jpg); 
			background-size: cover;
			background-position: center;

		}  
		.or
		{
			position: absolute;
			top: 180px;
			left: 280px;
			width: 40px;
			height: 40px;
			background: #efefef;
			border-radius: 50%;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
			line-height: 40px;
			text-align: center; 
		}
		.right-box .signinwith
		{
			display: block;
			margin-bottom: 40px;
			font-size: 28px;
			color: black;
			text-align: center;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
		}
		button.social
		{
			margin-bottom: 20px;
			width: 220px;
			height:36px;
			border:none;
			border-radius: 2px;
			color: #fff;
			font-family: sans-serif;
			font-weight: 500;
			transition:0.2s ease;
			cursor: pointer; 
		}
		.facebook
		{
			background:darkblue;  
		}
		.facebook:hover
		{
			background: orange;
		}
		.twitter
		{
			background: #55acee;
		}
		.twitter:hover
		{
			background: orange;
		}

		.google
		{
			background: #dd4b39;
		}
		.google:hover
		{
			background: orange;
		}

		.main-content-header 
		{
			width: 1180px;
			position: absolute; 
			top: 115%;
			left: 50%;
			transform: translate(-7%);
		}

		.btn
		{
			display: inline-block;
			padding: 10px 30px;
			font-weight: lighter;
			text-decoration:none;
			text-transform: uppercase;
			border-radius: 200px;
			transition: background-color  0.2s, color0.2;
		}
		.btn-full
		{
			background-color: transparent;
			color: red; 
			margin-right: 15px; 
			border:1px solid red;  
		}
		.btn-full:hover
		{
			background-color: black; 
		}
	</style>



</head>
<body style="background: url(../images/regfrmback.jpg);"><br><br>
	<center><h1>Create An Account</h1></center>
	<?php
		include("db/dbconnect.php");

		$userid=$_GET['uid'];
		$query="select * from registration where id=$userid";
		$query_update=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($query_update);
		$User_Name=$row['User_Name'];
		$Numbe=$row['Numbe'];
		$Email=$row['Email'];
		$Password=$row['Password'];
		$id=$row['id'];



	echo"<div id ='login-box'>
		<div class='left-box'>
			<h1>Sign Up</h1>
			<form id='frm_con' method='post' action='updateprocess.php'>
				<input type='text' name='User_Name' placeholder='User Name' value='$User_Name'/>
				<input type='text' name='Numbe' placeholder='Mobile Number' value='$Numbe' />
				<input type='text' name='Email' placeholder='Email' value='$Email'/>
				<input type='text' name='Password' placeholder='Password'value='$Password'/>
				<input type='text' name='Password1' placeholder='Retype Password' required/>
				<input type='hidden' name='uid' value='$userid'>
				<input type='submit' name='SignUp-Button' value='UPDATE' />
			</form>
		</div>
		<div class='right-box'>
			<span class='signinwith'>Sign in With<br/>Social Network</span>

			<a href='https://www.facebook.com/?stype=lo&jlou=AfeDhT2B4fO2QgC_oEnMpveen6SiUvoZAdBfciPOfYXaMXJVoRFLMhDPRFbaVfo041VFPsHpy4Ahh5r0hGkyR46yMYOocnVZI4tPGhYj3hHwjg&smuh=41957&lh=Ac-FcB0sa5xwyaZI'><button class='social facebook'>Log in with Facebook</button></a>
			<a href='https://twitter.com/'><button class='social twitter'>Log in with Twitter</button></a>
			<a href='https://accounts.google.com/signin/v2/sl/pwd?hl=en&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgmail%26oq%3Dgmail%26aqs%3Dchrome..69i57j69i61l3j0l2.1338j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=ServiceLogin'><button class='social google'>Log in with Google+</button></a>

		</div>
		<div class='or'>OR</div>";
		?>
		<div class="main-content-header">
			<a href="user.php" class="btn btn-full">Go to Back</a>
			<br>
		</div>

	</div>

</body>
</html>