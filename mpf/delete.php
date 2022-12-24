

<?php

	session_start();
	include("connection.php");
	include("function.php");
	include("style.php");

    $udata=check_login($con);


	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		//something was posted
		$usn=$_POST['usn'];

		//delete from db
		$query="delete from stud where usn='$usn'";
		if(mysqli_query($con,$query))
		{
		                print("records of student '$usn' are deleted from gpa table!!! \r\n");
        }else
		{
		    echo mysqli_error($con);
		}
		$query1="delete from marks where usn='$usn'";
		if(mysqli_query($con,$query))
		{
		                print("records of student '$usn' are deleted from marks table!!! \r\n");
        }else
		{
		    echo mysqli_error($con);
		}
		$query="delete from stdinfo where usn='$usn'";
		if(mysqli_query($con,$query))
		{
		                print("records of student '$usn' are deleted from stdinfo table!!! \r\n");
        }else
		{
		    echo mysqli_error($con);
		}
		$query="delete from gpa where usn='$usn'";
		if(mysqli_query($con,$query))
		{
		                print("records of student '$usn' are deleted from stud table!!! \r\n");
        }else
		{
		    echo mysqli_error($con);
		}
		sleep(1);
        header("location: index.php");
        die;
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - delete student records</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>

        </div>
    </nav>
	<div id="box">
		<form method="POST" action="action.php">
			<div class="title">Delete student records</div>
			usn:
			<input id="text" type="text" name="usn" placeholder="enter student usn" pattern="[0-9][a-z]{2}[0-9]{2}[a-z]{2}[0-9]{3}" title="eg:- 1kg19cs047, 1kg19cs018, etc..," required><br><br>

			<input id="button" type="submit" name="submit" value="Delete"><br><br>
			<a href="index.php">Go back</a><br><br>
		</form>

	</div>

</body>
</html>
