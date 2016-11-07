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
		
?>

<?php
    if(!isset($_SESSION["usertype"]))
    {
        header("Location: login.php");
    }
?>	

<?php
// step 2 ---------perform database query---------

		$query="DELETE FROM bdms WHERE username='$userpk'";
		
		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query faileded");
		else {
			//header("Location: profile.php");
			//echo "<script>alert('Update Successfully!')</script>";
			echo "<script>
				alert('Your account has been deleted successfully!');
				window.location.href='index.php';
			</script>";
			session_destroy();
		}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>