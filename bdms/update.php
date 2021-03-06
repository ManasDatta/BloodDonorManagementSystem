<?php
	session_start();
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	

<?php
$dodErr = $emailErr = $numberErr = $passErr = $dod = $address = $email = $phone = $username = $opassword = $password = $cpassword = "";
$isValid = true;
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if($_POST["dod"]) {
		$dod = mysql_real_escape_string( trim( $_POST["dod"] ));
		if(isset($_POST["dod"]) && trim($_POST["dod"]) != "") {
			if(preg_match("/^\d{2}\/\d{2}\/\d{4}$/",$dod)) {
				list($month, $date, $year) = explode("/", $dod);
				if(checkdate($month,$date,$year)) {
					$d1=strtotime($dod);
					$d2=ceil((time()-$d1)/60/60/24);
					if($d2 > 0) {
						$isValid = true;
					}
					else {
						$dodErr = "*Invalid Information<br>";
						$isValid = false;
					}
				}
				else {	
					$dodErr = "*Invalid Date<br>";
					$isValid = false;
				}	
			}
			else {
				$dodErr = "*Invalid Date Format<br>";
				$isValid = false;
			}
		}
		else {
			$isValid = true;
		}
	}
	
	if($_POST["address"]) {
		$address = mysql_real_escape_string( trim( $_POST["address"] ));
	}
	if($_POST["email"]) {
		$email = mysql_real_escape_string( trim( $_POST["email"] ));
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid Email<br>";
			$isValid = false;
		}
	}
	if($_POST["phone"]) {
		$phone = mysql_real_escape_string( trim( $_POST["phone"] ));
		if (!preg_match("/^01(1|5|6|7|8|9)[0-9]{8}$/",$phone)) {
			$numberErr = "*Invalid Mobile Number<br>";
			$isValid = false;
		}
	}
	if($_POST["username"]) {
		$username = mysql_real_escape_string( trim( $_POST["username"] ));
	}
	if($_POST["opassword"]) {
		$opassword = mysql_real_escape_string( trim( $_POST["opassword"] ));
	}
	if($_POST["password"]) {
		$password = mysql_real_escape_string( trim( $_POST["password"] ));
	}
	if($_POST["cpassword"]) {
		$cpassword = mysql_real_escape_string( trim( $_POST["cpassword"] ));
		if($password != $cpassword) {
			$passErr = "*The password did not matched<br>";
			$isValid = false;
		}
		$password = $cpassword = "";
	}
	if ( $isValid ) {
		//header("Location: success.php");
		include('update_query.php');
		//exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>.: Update :.</title>
	
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
				top: 13.5%;
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
	.error {
		color: #FF0000;
		//display: inline-block;
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

		
		input[type=text], select {
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
		
			input[type=password], select {
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
		.home button {
			width: 26%;
			background-color: #4CAF50;
			position: absolute;	
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:85.5%;
			left: 37.4%;
		}
		
		.home button:hover {
			background-color: #45a049;
		}
		
	</style>
	
	<script type="text/javascript">
	function redirectRegistration(obj) { 
		window.location.href = "registration.php";
	}
	</script>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form_area">
	<center><h2>Update Information</h2></center>
	<div class="form_inner_area">
		<input type="text" name="dod" placeholder="Last Date of Donation : mm/dd/yyyy" size="30" value="<?=$dod?>">
		<span class="error"><?php echo $dodErr;?></span>
		
		<input type="text" name="address" placeholder="Address" size="30" value="<?=$address?>" />

		<input type="text" name="email" size="30" placeholder="Email" value="<?=$email?>" />
		<span class="error"><?php echo $emailErr;?></span>
	
		<input type="text" name="phone" size="30" placeholder="Mobile Number" value="<?=$phone?>" />
		<span class="error"><?php echo $numberErr;?></span>
	
		<input type="text" name="username" size="30" placeholder="Username" value="<?=$username?>" />
	
		<input type="password" name="opassword" size="30" placeholder="Old Password" value="<?=$opassword?>" />
		<input type="password" name="password" size="30" placeholder="New Password" value="<?=$password?>" />
		<span class="error"><?php echo $passErr;?></span>
	
		<input type="password" name="cpassword" size="30" placeholder="Confirm Password"value="<?=$cpassword?>" />
	
		<input type="submit" value="Update" >
	</div>
	</div>
</form>
	<div class="home"><a href="home.php"><button>Back to Home</button></a></div>
	<div class="copyright">
		&copy; 2016-<?php echo date("Y");?>  by Manas Datta All Rights Reserved
	</div>
</body>
</html>