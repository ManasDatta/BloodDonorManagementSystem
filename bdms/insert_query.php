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
// step 2 ---------perform database query---------

	if(isset($_POST["username"]))
	{

 	$query=" select *from bdms where username like '".$_POST['username']."' ";

	$result=mysqli_query($connection,  $query);	

	
		if($result->num_rows>0)
		{
			echo "<script>alert('username taken, try with another one')</script>";
		}
		
		if($result->num_rows<=0)
		{
			$query=" select *from bdms where email like '".$_POST['email']."' ";		

			$result=mysqli_query($connection,  $query);	

			if($result->num_rows>0)
			{
				echo "<script>alert('email is used, try with another one')</script>";
			}
		}
		if($result->num_rows<=0)
		{
			$query=" select *from bdms where phone like '".$_POST['phone']."' ";		

			$result=mysqli_query($connection,  $query);	

			if($result->num_rows>0)
			{
				echo "<script>alert('phone is used, try with another one')</script>";
			}
		}
	}


	if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["dob"])&&isset($_POST["gender"])&&isset($_POST["blood"])&&isset($_POST["address"])
	&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["username"])&&isset($_POST["password"])&&$result->num_rows<=0)
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$dob=$_POST["dob"];
		$dod=$_POST["dod"];
		$gender=$_POST["gender"];
		$blood=$_POST["blood"];
		$address=$_POST["address"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$username=$_POST["username"];
		$password=$_POST["password"];

		$query="INSERT INTO bdms (fname,lname,dob,dod,gender,blood,address,email,phone,username,password) 
		VALUES ('$fname', '$lname','$dob','$dod','$gender','$blood','$address','$email','$phone','$username','$password')";

		$result=mysqli_query($connection,$query);
		
		if(!$result) die("Database query faileded");
		else {
			echo "<script>
				alert('Congratulation! Your registration has been done successfully. Please login to search blood donor...');
				window.location.href='login.php';
			</script>";
		}
	}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>