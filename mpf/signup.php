<?php

	session_start();
	include("connection.php");
	include("function.php");
	include("style.php");

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		//something was posted
		$aname=$_POST['aname'];
		$pass=$_POST['pass'];

		if(!empty($aname) && !empty($pass) && !is_numeric($aname))
		{
			//save to db
			$query="insert into admin (aname,pass) values('$aname','$pass')";
			mysqli_query($con,$query);

			header("location: login.php");
			die;

		}else
		{
			echo "enter valid information!!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
<body class="body">
    <nav>
        <a href="login.php">Student Result Management System</a>
    </nav>
	<div id="box">
		<form method="post">
			<div class="title">Admin Signup</div>
			aname     :
			<input id="text" type="text" name="aname" placeholder="enter admin name" pattern="[a-z]+" title="eg:- hello, admin, etc..," required><br><br>
			password  :
			<input id="text" type="password" name="pass" placeholder="enter password" required><br><br>
			<input id="button" type="submit" name="submit" value="signup"><br><br>
			already have an account?
			<a href="login.php">Login</a><br><br>
		</form>

	</div>

</body>
</html>
