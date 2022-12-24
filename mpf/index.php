<?php
    session_start();
	include("connection.php");
	include("function.php");


    $udata=check_login($con);


?>


<html>
<head>
	<title>srms</title>
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

<div class="aname">
    <?php
        $rows=$udata['aname'];
        echo "admin name: ",$rows;
     ?>
</div>
<div class="hbtn">
     <br><br><h1>Admin panel</h1><br><br>
    <ul>
        <li><a href="newstud.php" id="text">add new student</a></li>
        <li><a href="editstdinfo.php" id="text">edit student information</a></li>
        <li><a href="stdinfo.php" id="text">student info</a></li>
        <li><a href="delete.php" id="text">delete student records</a></li>
        <li><a href="allstud.php" id="text">all student info</a></li><br>
        <li><a href="addmarks.php" id="text">add student marks</a></li>
        <li><a href="editmarks.php" id="text">edit student marks</a></li>
        <li><a href="addgpa.php" id="text">add student sgpa/cgpa</a></li>
        <li><a href="editgpa.php" id="text">edit student sgpa/cgpa</a></li><br>
        <li><a href="stdresult.php" id="text">student result</a></li>
        <li><a href="classresult.php" id="text">view class result</a></li>
    </ul>

</div>
</body>
</html>
