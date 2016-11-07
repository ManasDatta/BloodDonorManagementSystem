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
		//session_start();
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

<?php
// step 2 ---------perform database query---------
	$isValid = true;
	
		if(isset($_POST["dod"]) && trim($_POST["dod"]) != "") {
			$dod=$_POST["dod"];
		}
		else{
			$dod=$row_detail["dod"];
		}
		
		if(isset($_POST["address"]) && trim($_POST["address"]) != "") {
			$address=$_POST["address"];
		}
		else{
			$address=$row_detail["address"];
		}
		
		if(isset($_POST["email"]) && trim($_POST["email"]) != "") {
			if($row_detail["email"] != $_POST["email"]) {
				$query=" select *from bdms where email like '".$_POST['email']."' ";		

				$result=mysqli_query($connection,  $query);	

				if($result->num_rows>0)
				{
					echo "<script>alert('email is used, try with another one')</script>";
					$isValid = false;
				}
			}
			else {
				$email=$_POST["email"];
			}
		}
		else {
			$email = $row_detail["email"];
		}
		if(isset($_POST["phone"]) && trim($_POST["phone"]) != "") {
			if($row_detail["phone"] != $_POST["phone"]) {
				$query=" select *from bdms where phone like '".$_POST['phone']."' ";		

				$result=mysqli_query($connection,  $query);	

				if($result->num_rows>0)
				{
					echo "<script>alert('phone is used, try with another one')</script>";
					$isValid = false;	
				}
			}
			else {
				$phone=$_POST["phone"];
			}
		}
		else {
			$phone = $row_detail["phone"];
		}
		if(isset($_POST["username"]) && trim($_POST["username"]) != "") {
			if($row_detail["username"] != $_POST["username"]) {
				$query=" select *from bdms where username like '".$_POST['username']."' ";

				$result=mysqli_query($connection,  $query);
			
				if($result->num_rows>0)
				{
					echo "<script>alert('username taken, try with another one')</script>";
					$isValid = false;
				}
			}
			else {
				$username=$_POST["username"];
			}
		}
		else {
			$username = $row_detail["username"];
		}
		if(isset($_POST["opassword"]) && trim($_POST["opassword"]) != "") {
			if($row_detail["password"] == $_POST["opassword"]) {
				if(isset($_POST["password"]) && trim($_POST["password"]) != "") {
					$password=$_POST["password"];
				}
			}
			else {
				echo "<script>alert('Invalid old password!')</script>";
				$isValid = false;
			}
		}
		else {
			$password = $row_detail["password"];
		}
		
		if((trim($_POST["dod"]) == "") && (trim($_POST["address"]) == "") && (trim($_POST["email"]) == "")  && (trim($_POST["phone"]) == "") &&
		(trim($_POST["username"]) == "")  && (trim($_POST["opassword"]) == "")  && (trim($_POST["password"]) == "")  && (trim($_POST["cpassword"]) == "")) {
			echo "<script>
					alert('If you want to update please fill up the area!');
					window.location.href='update.php';
				</script>";
			$isValid = false;
		}
		
		if($isValid == true) {

			$query="update bdms set dod='$dod',address='$address',email='$email',phone='$phone',username='$username', password='$password' where username='$userpk'";
			
			$result=mysqli_query($connection,$query);
			
			if(!$result) die("Database query faileded");
			else {
				//header("Location: profile.php");
				//echo "<script>alert('Update Successfully!')</script>";
				echo "<script>
					alert('Update Successfully!');
					window.location.href='profile.php';
				</script>";
			}
		}
?>


<?php
// step 3--------------database connection Close -------------

mysqli_close($connection);

?>