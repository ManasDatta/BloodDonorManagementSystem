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
	
	if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["dob"])&&isset($_POST["email"]))
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$dob=$_POST["dob"];
		$email=$_POST["email"];
		
		$sql_super = "SELECT *FROM bdms where fname='".$fname."' && lname='".$lname."' && dob='".$dob."' && email='".$email."'";
		$result_super = $connection->query($sql_super);
		$row_detail = $result_super->fetch_assoc();
		
		if(($row_detail["fname"] != $_POST["fname"]) && ($row_detail["lname"] != $_POST["lname"]) && ($row_detail["dob"] != $_POST["dob"]) && ($row_detail["email"] != $_POST["email"])) {
			echo "<script>
				alert('The information you entered does not match our records. Please check your information and try again.');
				window.location.href='forgot_user.php';
			</script>";
		}
		else {		
			$username = $row_detail["username"];
			echo "<script>
				alert('Your username is '+'".$username."');
				window.location.href='login.php';
			</script>";
		}
	}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>