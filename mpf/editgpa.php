
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
		$sem=$_POST['sem'];
		$sgpa=$_POST['sgpa'];
		$cgpa=$_POST['cgpa'];
		//update db
		 if(!empty($usn) && !empty(sem))
        {
            if(!empty($sgpa))
            {
                $query="update gpa set sgpa='$sgpa' where usn='$usn' and sem='$sem'";
                if(mysqli_query($con,$query))
                {
                    print("sgpa updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
                if(!empty($sgpa))
                {
                    $query="update gpa set cgpa='$cgpa' where usn='$usn' and sem=8";
                        if(mysqli_query($con,$query))
                    {
                        print("cgpa updated. \n");
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }
                }
        }
        else{
            echo "enter valid usn/sem";
        }

		sleep(1);
		header("location: index.php");
        die;
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - edit sgpa/cgpa</title>
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
			<div class="title">Edit SGPA/CGPA</div>
			usn:
			<input id="text" type="text" name="usn" placeholder="enter student usn" pattern="[0-9][a-z]{2}[0-9]{2}[a-z]{2}[0-9]{3}" title="eg:- 1kg19cs047, 1kg19cs018, etc..," required><br><br>
			sem:
			<input id="text" type="text" name="sem" placeholder="enter semester" required><br><br>
            sgpa:
			<input id="text" type="float" name="sgpa" placeholder="enter semester sgpa"><br><br>
			cgpa:
			<input id="text" type="float" name="cgpa" plcaeholder="enter cgpa if semester is 8"><br><br>

			<input id="button" type="submit" name="submit" value="edit"><br><br>
			<a href="index.php">Go back</a><br><br>
		</form>

	</div>

</body>
</html>

