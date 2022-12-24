<?php
    session_start();
	include("connection.php");
	include("function.php");

	$udata=check_login($con);


?>


<html>
<head>
	<title>srms - contact us</title>
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
<div class="textlink">
	<h1>CONTACT US</h1>
	<p>College Location<br><br>

Telephone<br><br>

Mobile<br>Fax<br><br>

E-mail<br>
Website<br><br>

Head Office<br>
<br><br>

Head Office Contact<br><br></p>
	<br>
</div>

</body>
</html>
