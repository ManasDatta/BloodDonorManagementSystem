<!DOCTYPE html>
<html>
<head>
	<title>.: Index :.</title>
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
		left: 33%;
		top:10%;				
		height: 70%;
		width: 35%;
		position: absolute;				
		background-color:#f1f1f1;
		opacity:.9;
		border-radius: 4px;
	}
	.form_inner_area
	{
		top:11%;
		height: 20%;
		width: 75%;
		position: absolute;
		left: 12.5%;	
	}
	button 
	{
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
	button:hover 
	{
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
<?php
echo '<div class="form_area">
		<div class="form_inner_area">
			<center><h1>Bangladesh</h1></center>
			<center><h2>Blood Donor Management System</h2><center><br><br>
        	<a href="registration.php"><button>Be a Member (Free)</button></a><br><br>
			<a href="login.php"><button>Member Login</button></a>
		</div>
	</div>';
?>
	<div class="copyright">
		&copy; 2016-<?php echo date("Y");?>  by Manas Datta All Rights Reserved
	</div>
</body>
</html>