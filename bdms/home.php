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
	<title>.: Home :.</title>
<style>
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
				height: 50px;
				width: 100%;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
		.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 300px;
				position: absolute;
				right: 0.2%;	

			}
			
			.form_inner_area button {
				
			width: 49%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 2.5px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:45%;
			}
			
			button:hover {
			background-color: #45a049;
		}
		
		.form_area input[type=text]{
			width: 99.3%;
			padding: 12px 20px;
			margin: 3px 3px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
		.form_area2
			{
				position: absolute;
				left: 35%;
				top:12%;				
				height: 485px;
				width: 350px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;
				border-radius: 4px;
			}
			.form_inner_area2
			{
				top:1%;
				height: 200px;
				width: 300px;
				position: absolute;
				left: 25px;	

			}
			
			.form_inner_area2 button {
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
		.form_inner_area2 button:hover {
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
<div class="form_area">
		<input type="text" name="fname" size="30" value="<?php echo $row_detail["fname"]." ".$row_detail["lname"];?>" disabled  />
		<div class="form_inner_area">
        	<a href="profile.php"><button>Profile</button></a>
			<a href="logout.php"><button>Logout</button></a>
		</div>
	</div>
	<div class="form_area2">
		<div class="form_inner_area2">
			<center><h2>Search Blood Donor</h2></center>
        	<a href="donor.php?group=opos"><button>O+</button></a>
			<a href="donor.php?group=oneg"><button>O-</button></a>
			<a href="donor.php?group=apos"><button>A+</button></a>
			<a href="donor.php?group=aneg"><button>A-</button></a>
			<a href="donor.php?group=bpos"><button>B+</button></a>
			<a href="donor.php?group=bneg"><button>B-</button></a>
			<a href="donor.php?group=abpos"><button>AB+</button></a>
			<a href="donor.php?group=abneg"><button>AB-</button></a>
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