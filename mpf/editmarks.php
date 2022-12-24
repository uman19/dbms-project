
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
		$subcode=$_POST['subcode'];
		$ia1=$_POST['ia1'];
		$ia2=$_POST['ia2'];
		$ia3=$_POST['ia3'];
		$ext=$_POST['ext'];
		$grade=$_POST['grade'];

		//update db

        if(!empty($subcode) && !empty($sem) && !empty($usn))
        {
            if(!empty($ia1))
            {
                $query="update marks set ia1='$ia1' where usn='$usn' and sem='$sem' and subcode='$subcode'";
                if(mysqli_query($con,$query))
                {
                    print("ia1 marks updated. \n");
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            if(!empty($ia2))
            {
                $query="update marks set ia2='$ia2' where usn='$usn' and sem='$sem' and subcode='$subcode'";
                if(mysqli_query($con,$query))
                {
                     print("ia2 marks updated. \n");
                }
                else
                {
                     echo mysqli_error($con);
                }
            }
            if(!empty($ia3))
            {
                $query="update marks set ia3='$ia3' where usn='$usn' and sem='$sem' and subcode='$subcode'";
                if(mysqli_query($con,$query))
                {
                     print("ia3 marks updated. \n");
                }
                else
                {
                     echo mysqli_error($con);
                }
            }
            if(!empty($ext))
            {
                $query="update marks set ext='$ext' where usn='$usn' and sem='$sem' and subcode='$subcode'";
                if(mysqli_query($con,$query))
                {
                     print("ext marks updated. \n");
                }
                else
                {
                     echo mysqli_error($con);
                }
            }
            if(!empty($grade))
            {
                $query="update marks set grade='$grade' where usn='$usn' and sem='$sem' and subcode='$subcode'";
                if(mysqli_query($con,$query))
                {
                     print("grade updated. \n");
                }
                else
                {
                     echo mysqli_error($con);
                }
            }
        }
        else{
            echo "enter valid usn/sem/subcode!!!";
        }


		sleep(1);
		header("location: index.php");
        die;
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - edit subject marks</title>
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
			<div class="title">Edit subject marks</div>
			usn:
			<input id="text" type="text" name="usn" placeholder="enter student usn" pattern="[0-9][a-z]{2}[0-9]{2}[a-z]{2}[0-9]{3}" title="eg:- 1kg19cs047, 1kg19cs018, etc..," required><br><br>
			sem:
			<input id="text" type="text" name="sem" placeholder="enter semester"><br><br>
            subcode:
			<input id="text" type="text" name="subcode" laceholder="enter subject code" patern="[0-9]{2}[a-z]{2,4}[0-9]{2,4}" title="eg:- 18cs53, 18csl58, etc..," required><br><br>
			ia1:
			<input id="text" type="int" name="ia1" placeholder="enter ia1 marks"><br><br>
            ia2:
			<input id="text" type="int" name="ia2" placeholder="enter ia2 marks"><br><br>
            ia3:
			<input id="text" type="int" name="ia3" placeholder="enter ia3 marks"><br><br>
            ext:
			<input id="text" type="int" name="ext" placeholder="enter external marks"><br><br>
            grade:
			<input id="text" type="int" name="grade" placeholder="enter grade"><br><br>
			<input id="button" type="submit" name="submit" value="Add"><br><br>
			<a href="index.php">Go back</a><br><br>
		</form>

	</div>

</body>
</html>

