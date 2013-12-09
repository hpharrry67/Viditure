<?php

	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);

	$sbname=$_POST['bname'];
	$spass=$_POST['pass'];
	
	$result = mysql_query("SELECT bname FROM users WHERE bname='$sbname' and pass=$spass");

	$count = mysql_num_rows($result);
	session_start();

	if($count==1)
	{
		$_SESSION['bname']=$sbname;
		$_SESSION['pass']=$spass;
		header("Location: interface.php?req=3");
	}
	else
	{
		header("Location: login.php");
	}
?>