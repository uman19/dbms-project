

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
		$sname=$_POST['sname'];
		$dname=$_POST['dname'];
		$dob=$_POST['dob'];
		$sex=$_POST['sex'];
		$pname=$_POST['pname'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];

        //update db
        if(!empty($usn))
        {
            if(!empty($sname))
            {
                $query="update stud,stdinfo set sname='$sname' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("sname updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($dname))
            {
                $query="update stud set dname='$dname' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("dname updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($dob))
            {
                $query="update stdinfo set dob='$dob' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("dob updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($sex))
            {
                $query="update stdinfo set sex='$sex' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("sex updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($pname))
            {
                $query="update stdinfo set pname='$pname' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("pname updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($phone))
            {
                $query="update stdinfo set phone='$phone' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("phone updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($email))
            {
                $query="update stdinfo set email='$email' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("email updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($addr))
            {
                $query="update stdinfo set addr='$addr' where usn='$usn'";
                if(mysqli_query($con,$query))
                {
                    print("addr updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }

        }
        else{
            echo "enter usn!!!";
        }

        sleep(1);
		header("location: index.php");
        die;
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - edit student info</title>
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
			<div class="title">Edit student info</div>
			usn:
			<input id="text" type="text" name="usn" placeholder="enter student usn" pattern="[0-9][a-z]{2}[0-9]{2}[a-z]{2}[0-9]{3}" title="eg:- 1kg19cs047, 1kg19cs018, etc..," required><br><br>
			sname:
			<input id="text" type="text" name="sname" placeholder="enter student name"><br><br>
			dname:
			<input id="text" type="text" name="dname" placeholder="enter department name"><br><br>
            dob:
			<input id="text" type="date" name="dob" placeholder="enter date of birth"><br><br>
			sex:
			<input id="text" type="text" name="sex" placeholder="enter gender"><br><br>
            pname:
			<input id="text" type="text" name="pname" placeholder="enter parent name"><br><br>
			phone:
			<input id="text" type="text" name="phone" placeholder="enter student phone number"><br><br>
            email:
			<input id="text" type="text" name="email" placeholder=" enter student email address"><br><br>
			addr:
			<input id="text" type="text" name="addr" placeholder="enter student residential address"><br><br>
			<input id="button" type="submit" name="submit" value="Edit"><br><br>
			<a href="index.php">Go back</a><br><br>
		</form>

	</div>

</body>
</html>
