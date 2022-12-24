
<?php
    include("connection.php");
    include("style.php");

            $usn=$_POST['usn'];
            $query="select * from stdinfo where usn='$usn'";
            if(!empty($usn))
            {
                $result=mysqli_query($con,$query);
            }

?>

<!DOCTYPE html>
<html>
<head>
	<title>srms - student info</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
<body class="bodys">
    <nav>
        <a href="index.php">Student Result Management System</a>
    </nav>
    <div class="title">
        <p>Student Information</p>
    </div>
	<?php
	if(!empty($result))
	{
	 ?>
	<div>
	    <table class="table" align="center" border="2px" style="width: 900px; height: 30px;">
                <tr>
                    <th colspan="8"><h2>Student info</h2></th>
                </tr>
                <tr>
                    <th>usn</th>
                    <th>sname</th>
                    <th>dob</th>
                    <th>sex</th>
                    <th>pname</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>addre</th>
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
	<?php
	}
	 ?>
     <a id="button" href="stdinfo.php" style="text-decoration: none; margin-left:45%;">Go back</a>

</body>
</html>
