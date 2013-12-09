<?php

	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);

	$bname=$_POST['bname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$btype=$_POST['btype'];
	$addr=$_POST['addr'];
	
    
    	mysql_query("INSERT INTO users (bname,email,pass,btype,addr) VALUES ('$bname','$email','$pass','$btype','$addr')");
    	
	$msg = 'Dear '.$bname.', Your account is successfully created on Viditure. Go - Access it !';
	
	mail($email,"Account Creation-Viditure",$msg);    	
    	
?>
<?php
	include('header.php');
?>
<div data-role="page" >
	<div data-role="content">
		<h3><font color="#EEEEEE">Signed up successfully</font></h3>
		<a href="index.php" data-role="button" data-theme="b">Go to Home</a><br>
		<a href="login.php" data-role="button" data-theme="b">Login Now</a>
	</div>	
<?php include('footer.php'); ?>