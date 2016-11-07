<?php
		// step 1 --------- database connection established--------
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="bdmsdb";

		$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

		if(mysqli_connect_errno())
		{
			die("Database Connection Failed ");
		}
?>

<?php
	if(isset($_POST["username"])&&isset($_POST["password"]))
	{
		$query=" select *from bdms where username ='".$_POST['username']."' AND password ='".$_POST['password']."' ";

		$result=mysqli_query($connection,  $query);	
		
		if($result->num_rows>0)
		{
				$row = $result->fetch_assoc();
				session_start();
				$_SESSION["usertype"]="user";
				$_SESSION["username"]=$_POST['username'];
				$_SESSION["userpk"]=$row["username"];
				
				header("Location: home.php");			
		}
		else
		{	
			$query=" select *from bdms where username ='".$_POST['username']."'";
			$result=mysqli_query($connection,  $query);	
			if($result->num_rows>0) {
				echo "<script>alert('Invalid Password!');</script>";
			}
			else {
				echo "<script>alert('Username Not Found!');</script>";
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>.: Sign In :.</title>
	
	<style rel="stylesheet">

	body	
	{
		margin:0 auto;
		background: url("res/images/signup.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}

		form {
                width:500px;
                margin:50px auto;
			}
			
		/* Reset top and bottom margins from certain elements */
		
		
		.login
		{
			position:absolute;
			left:29%;
			top:20%;
			background-color:#f1f1f1;
			opacity: 0.9;
		}
		.login-header,
		.login p {
		  margin-top: 0;
		  margin-bottom: 0;
		}

		/* The triangle form is achieved by a CSS hack */
		.login-triangle {
		  width: 0;
		  margin-right: auto;
		  margin-left: auto;
		  border: 12px solid transparent;
		  border-bottom-color: #28d;
		}

		.login-header {
		  background: #28d;
		  padding: 20px;
		  font-size: 1.4em;
		  font-weight: normal;
		  text-align: center;
		  text-transform: uppercase;
		  color: #fff;
		}

		.login-container {
		  background: #ebebeb;
		  padding: 12px;
		}

		/* Every row inside .login-container is defined with p tags */
		.login p {
		  padding: 12px;
		}

		.login input {
		  box-sizing: border-box;
		  display: block;
		  width: 100%;
		  border-width: 1px;
		  border-style: solid;
		  padding: 16px;
		  outline: 0;
		  font-family: inherit;
		  font-size: 0.95em;
		}

		.login input[type="text"],
		.login input[type="password"] {
		  background: #fff;
		  border-color: #bbb;
		  color: #555;
		}


		.login input[type="submit"] {
		  background: #28d;
		  border-color: transparent;
		  color: #fff;
		  cursor: pointer;
		}

		.login input[type="submit"]:hover {
		  background: #18c;
		}

		/* Buttons' focus effect */
		.login input[type="submit"]:focus {
		  border-color: #05a;
		}
		
		.login a {
			padding: 60px;
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
	
	

	</style>
	
</head>
<body>		
	<div class="login">
	<form class="login_form" method="POST" action="">
		<p><input type="text" name="username" placeholder="Username" required="required"></p>
		<p><input type="password" name="password" placeholder="Password" required="required"></p>
		<p><input type="submit" value="Log in"></p>
	</form>
	<p><a href="forgot_user.php">Forgot username?</a>
	<a href="forgot_pass.php">Forgot password?</a></p>
	</div>
		<div class="copyright">
		&copy; 2016-<?php echo date("Y");?>  by Manas Datta All Rights Reserved
	</div>
</body>
</html>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>