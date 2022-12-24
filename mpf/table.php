
<?php
    include("connection.php");
    include("style.php");

            $usn=$_POST['usn'];
            $query="select * from marks where usn='$usn' order by sem,subcode";
            $query2="select *from gpa where usn='$usn' order by sem";
            if(!empty($usn))
            {
                $result=mysqli_query($con,$query);
                $result2=mysqli_query($con,$query2);
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
    <div class="title">
        <p>Student result</p>
    </div>
    	<?php
	if(!empty($result))
	{
	 ?>
	<div class="layout">
	    <table class="table" align="center" border="2px" style="width: 900px; height: 30px;">
                <tr>
                    <th colspan="8"><h2>USN:<?php echo $usn; ?> result</h2></th>
                </tr>
                <tr>
                    <th>usn</th>
                    <th>sem</th>
                    <th>subcode</th>
                    <th>ia1</th>
                    <th>ia2</th>
                    <th>ia3</th>
                    <th>ext</th>
                    <th>grade</th>

                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                 ?>
                        <tr>
                            <td><?php print($rows['usn']) ?></td>
                            <td><?php print($rows['sem']) ?></td>
                            <td><?php print($rows['subcode']) ?></td>
                            <td><?php print($rows['ia1']) ?></td>
                            <td><?php print($rows['ia2']) ?></td>
                            <td><?php print($rows['ia3']) ?></td>
                            <td><?php print($rows['ext']) ?></td>
                            <td><?php print($rows['grade']) ?></td>
                        </tr>
                <?php
                    }
                 ?>

            </table>
            <br>
            </div>
            <div class="layout">
            <table class="table" align="center" border="2px" style="width: 900px; height: 30px;">
                 <tr>
                    <th colspan="8"><h2>USN:<?php echo $usn; ?> SGPA/CGPA</h2></th>
                </tr>
                <tr>
                    <th>usn</th>
                    <th>sem</th>
                    <th>sgpa</th>
                    <th>cgpa</th>
                </tr>
                 <?php
                    while($rows=mysqli_fetch_assoc($result2))
                    {
                 ?>
                        <tr>
                            <td><?php print($rows['usn']) ?></td>
                            <td><?php print($rows['sem']) ?></td>
                            <td><?php print($rows['sgpa']) ?></td>
                            <td><?php print($rows['cgpa']) ?></td>
                        </tr>
                <?php
                    }
                 ?>

            </table>



	</div>
    <?php
    }
     ?>
     <a id="button" href="stdresult.php" style="text-decoration: none; margin-left:45%;">Go back</a>

</body>
</html>
