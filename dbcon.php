<?php	
	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);
	

?>