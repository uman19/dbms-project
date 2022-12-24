
<?php
    include("connection.php");
    include("style.php");

     if($_SERVER['REQUEST_METHOD']=="POST")
        {
            //something was posted
            $result;
            $usn=$_POST['usn'];
            $query="select * from marks where usn='$usn' order by sem,subcode";
            $query2="select *from gpa where usn='$usn' order by sem";
            if(!empty($usn))
            {
                $result=mysqli_query($con,$query);
                $result2=mysqli_query($con,$query2);

            }
        }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - student result</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
<body class="bodys">
    <nav>
        <a href="index.php">Student Result Management System</a>
    </nav>

	<div id="box">
		<form method="POST" action="table.php">
			<div class="title">Student result</div>
			usn:
			<input id="text" type="text" name="usn"  placeholder="enter student usn" pattern="[0-9][a-z]{2}[0-9]{2}[a-z]{2}[0-9]{3}" title="eg:- 1kg19cs047, 1kg19cs018, etc..," required><br><br>
            <input id="button" type="submit" name="submit" value="view"><br><br>
			<a href="index.php">Go back</a><br><br>
            <a href="classresult.php">Class result</a><br><br>

		</form>

	</div>
	<?php
        header("table.php");
	 ?>

</body>

</html>
