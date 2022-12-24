<?php
session_start();
if(isset($_SESSION['aname']))
{
    unset($_SESSION['aname']);
}

header("Location: login.php");
die;

 ?>
