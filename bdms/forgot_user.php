<?php
$fname = $lname = $dob = $email = "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($_POST["fname"]) {
		$fname = mysql_real_escape_string( trim( $_POST["fname"] ));
	}
	if($_POST["lname"]) {
		$lname = mysql_real_escape_string( trim( $_POST["lname"] ));
	}
	if($_POST["dob"]) {
		$dob = mysql_real_escape_string( trim( $_POST["dob"] ));
	}
	if($_POST["email"]) {
		$email = mysql_real_escape_string( trim( $_POST["email"] ));
	}		
	if( $fname != "" && $lname != "" && $dob != "" && $email != "") {	
		include('forgot_user_query.php');
	} else {
		echo "<script>alert('Please fill up all fields...')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>.: Forgot Username :.</title>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 98.4%;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;

			}
			.form_inner_area
			{
				top:13.5%;
				height: 200px;
				width: 600px;
				position: absolute;
				left: 50px;						
			}
	body	
	{
		margin:0 auto;
		background: url("res/images/signup.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	input[type=submit] {
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;
			
			
		}
		
			input[type=submit]:hover {
			background-color: #45a049;
		}

		
		input[type=text] {
			width: 50%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}	
			.copyright {
		position: absolute;				
		height: 6%;
		width: 20%;
		position: absolute;				
		background-color:#f1f1f1;
		opacity:.9;
		border-radius: 4px;
		bottom: 1%;
		right: .5%;
		text-align: center;
	}
	
				
			.login button {
			width: 26%;
			background-color: #4CAF50;
			position: absolute;	
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:53.8%;
			left: 37.4%;
		}
		
		.login button:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form_area">
	<center><h2>Forgot Username?</h2></center>
	<div class="form_inner_area">	
		<input type="text" name="fname" placeholder="First Name" size="30" value="<?=$fname?>" />
	
		<input type="text" name="lname" placeholder="Last Name" size="30" value="<?=$lname?>" />
		
		<input type="text" name="dob" placeholder="Date of Birth : mm/dd/yyyy" size="30" value="<?=$dob?>">
		
		<input type="text" name="email" size="30" placeholder="Email" value="<?=$email?>" />
	
		<input type="submit" value="Submit" >
	</div>
	</div>
</form>
	<div class="login"><a href="login.php"><button>Back to Login</button></a></div>
	<div class="copyright">
		&copy; 2016-<?php echo date("Y");?>  by Manas Datta All Rights Reserved
	</div>
</body>
</html>
