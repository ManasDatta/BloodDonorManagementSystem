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
		
	session_start();
	$userpk=$_SESSION['userpk'];
	
	$sql_super = "SELECT *FROM bdms where username='".$userpk."'";
	$result_super = $connection->query($sql_super);
	$row_detail = $result_super->fetch_assoc();
?>

<?php
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	

<!DOCTYPE html>
<html>
<head>
	<title>.: Profile :.</title>
	
	<style rel="stylesheet">
	
	body	
	{
		margin:0 auto;
		background: url("res/images/signup.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Open Sans', sans-serif;
	}
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 617px;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
			}
			.form_inner_area
			{
				top:0%;
				height: 200px;
				width: 300px;
				position: absolute;
				left: 50px;						
			}
			button {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;	
			
		}
		
			button:hover {
			background-color: #45a049;
		}
		
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
				.form_area2
			{
				top:.5%;
				height: 200px;
				width: 150px;
				position: absolute;
				right: .5%;	
				opacity:.9;
			}
			
			.form_area2 button {
				
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 2.5px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:45%;
			}
			
			.form_area2 button:hover {
			background-color: #FF0000;
		}

			
			button:hover {
			background-color: #45a049;
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
	<div class="form_area2">
		<a href="unregister.php" onclick="return confirm('Are you sure you want to delete this account?')"><button>Delete Account</button></a>
	</div>
	<div class="form_area">
	<div class="form_inner_area">
		<center><h2>User Information</h2></center>
		<input type="text" name="fname" placeholder="First Name" size="30" value="<?php echo "First Name: ".$row_detail["fname"];?>" disabled  />
	
		<input type="text" name="lname" placeholder="Last Name" size="30" value="<?php echo "Last Name: ".$row_detail["lname"];?>" disabled />
		
		<input type="text" name="gender" placeholder="Gender" size="30" value="<?php echo "Gender: ".$row_detail["gender"];?>" disabled />
	
		<input type="text" name="blood" placeholder="Blood" size="30" value="<?php echo "Blood Group: ".$row_detail["blood"];?>" disabled />
		
		<input type="text" name="dob" placeholder="DOB" size="30" value="<?php echo "Date of Birth: ".$row_detail["dob"];?>" disabled />
				
		<input type="text" name="dod" placeholder="DOD" size="30" value="<?php echo "Last Date of Donation: ".$row_detail["dod"];?>" disabled />
	
		<input type="text" name="address" placeholder="Address" size="30" value="<?php echo "Address: ".$row_detail["address"];?>" disabled />

		<input type="text" name="email" size="30" placeholder="Email" value="<?php echo "Email: ".$row_detail["email"];?>" disabled />
	
		<input type="text" name="phone" size="30" placeholder="Phone Number" value="<?php echo "Mobile: ".$row_detail["phone"];?>" disabled />
	
		<input type="text" name="username" size="30" placeholder="Username" value="<?php echo "Username: ".$row_detail["username"];?>" disabled />
	
		<a href="update.php"><button>Update Information</button></a>
	</div>
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