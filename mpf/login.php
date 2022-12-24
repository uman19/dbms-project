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
			//read from db
			$query="select * from admin where aname ='$aname'";
			$result=mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $udata = mysqli_fetch_assoc($result);
                    if($udata['pass']===$pass)
                    {
                        $_SESSION['aname']=$udata['aname'];
                        header("Location: index.php");
                        die;
                    }
                    else
                    {
                        echo "invalid admin name or password";
                    }
                }
                else
                {
                    echo "invalid admin name or password";
                }
            }

		}else
		{
			echo "enter valid information!!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>srms-Login</title>
    <link rel="stylesheet" href="style1.css">
<body class="body">
    <nav>
        <a href="index.php">Student Result Management System</a>
        <div class="navlink">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="mission.php">MISSION</a></li>
                <li><a href="vision.php">VISION</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>

        </div>
    </nav>
	<div id="box">
		<form method="post">
			<div class="title">Admin Login</div>
			aname     :
			<input id="text" type="text" name="aname" placeholder="enter admin name" pattern="[a-z]+" title="eg:- hello, admin, etc..," required><br><br>
			password  :
			<input id="text" type="password" name="pass" placeholder="enter password" required><br><br>
			<input id="button" type="submit" name="submit" value="login"><br><br>
			don't have an account?
			<a href="signup.php">Signup</a><br><br>
		</form>

	</div>

	<div id="box">
        <div class="title">Student result</div>
        <a id="button" href="stdresult.php">check result</a><br><br>
	</div>

</body>
</html>
