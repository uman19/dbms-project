
<?php

	session_start();
	include("connection.php");
	include("function.php");
	include("style.php");

    $udata=check_login($con);

            //$query="select * from stdinfo order by usn";
            $query="call allstud";

                    $result=mysqli_query($con,$query);
                    echo mysqli_error($con);


?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - all student info</title>
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

	</div>
	<div class="title">
        <p>All students information</p>
    </div>
	<?php
	if(!empty($result))
	{
	 ?>
	<div class="layout">
	    <table class="table" align="center" border="2px" style="width: 900px; height: 30px;">
                <tr>
                    <th colspan="8"><h2> All Student info</h2></th>
                </tr>
                <tr>
                    <th>usn</th>
                    <th>sname</th>
                    <th>dob</th>
                    <th>sex</th>
                    <th>pname</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>addr</th>
                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                 ?>
                        <tr>
                            <td><?php print($rows['usn']) ?></td>
                            <td><?php print($rows['sname']) ?></td>
                            <td><?php print($rows['dob']) ?></td>
                            <td><?php print($rows['sex']) ?></td>
                            <td><?php print($rows['pname']) ?></td>
                            <td><?php print($rows['phone']) ?></td>
                            <td><?php print($rows['email']) ?></td>
                            <td><?php print($rows['addr']) ?></td>
                        </tr>
                <?php
                    }
                 ?>

            </table>


	</div>
	<a id="button" href="index.php" style="text-decoration: none; margin-left:45%;">Go back</a>
	<?php
	}
	 ?>
</body>
</html>
