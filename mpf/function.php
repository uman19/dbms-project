<?php

function check_login($con)
{
	if(isset($_SESSION['aname']))
	{
		$aname=$_SESSION['aname'];
		$query="select * from admin where aname = '$aname'";

		$result=mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
			$udata=mysqli_fetch_assoc($result);
			return $udata;

		}

	}
	//redirect to login
    else
    {
        	header("Location: login.php");
            die;
    }


}
