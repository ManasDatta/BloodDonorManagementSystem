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
	$_SESSION['group']=$_GET['group'];
?>

<?php
    if(!isset($_SESSION["group"]))
    {
        header("Location: login.php");
    }
?>

<?php 
	if($_SESSION['group'] == "opos") {
		$sql_super = "SELECT *FROM bdms where blood = 'O+'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "oneg") {
		$sql_super = "SELECT *FROM bdms where blood = 'O-'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "apos") {
		$sql_super = "SELECT *FROM bdms where blood = 'A+'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "aneg") {
		$sql_super = "SELECT *FROM bdms where blood = 'A-'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "bpos") {
		$sql_super = "SELECT *FROM bdms where blood = 'B+'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "bneg") {
		$sql_super = "SELECT *FROM bdms where blood = 'B-'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "abpos") {
		$sql_super = "SELECT *FROM bdms where blood = 'AB+'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
	
	if($_SESSION['group'] == "abneg") {
		$sql_super = "SELECT *FROM bdms where blood = 'AB-'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		if ($result_super->num_rows > 0) {
			 echo "<table align='center'><tr><th>Blood</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Last Date of Donation</th><th>Address</th><th>Email</th><th>Phone</th></tr>";
			 // output data of each row
				 while($row_detail = $result_super->fetch_assoc()) {
					 echo "<tr><td>" . $row_detail["blood"]. "</td><td>" . $row_detail["fname"]. " " . $row_detail["lname"]. "</td><td>" . $row_detail["gender"]. "</td>
					 <td>" . $row_detail["dob"]. "</td><td>" . $row_detail["dod"]. "</td><td>" . $row_detail["address"]. "</td><td>" . $row_detail["email"]. "</td>
					 <td>" . $row_detail["phone"]. "</td></tr>";
				 }
			 echo "</table>";
		}
		else {
			echo "<script>
					alert('No results found!');
					window.location.href='home.php';
				</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>.: Blood Donor List :.</title>
<style>
	body	
	{
		margin:0 auto;
		background: url("res/images/signup.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}

	table
	{
	 width:100%;
	 font-family:inherit;
	 font-weight:light;
	 color: #FFFAFA ;
	}
	th {
		color:#00FF00;
	}
	table,td,th
	{
	 border-collapse:collapse;
	 border:solid #d0d0d0 1px;
	 padding:15px;
	 text-align: center;
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
	<div class="copyright">
		&copy; 2016-<?php echo date("Y");?>  by Manas Datta All Rights Reserved
	</div>
</body>
</html>

<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>