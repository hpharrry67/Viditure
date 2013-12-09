<?php
	session_start();
	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);

	$party11 = $_SESSION['bname'];
	$cname = $_POST['cname'];
	$cdetails = $_POST['cdetails'];
	$party2 = $_POST['party2'];	
	echo $party2;
	
	mysql_query("INSERT INTO drafts (cname,cdetails,party1,party2) VALUES ('$cname','$cdetails','$party11','$party2')");

	
	mkdir("docs/"."$cname",0755);
	
	move_uploaded_file($_FILES['doc'] ['tmp_name'],
        "docs/"."$cname"."$_FILES['doc'] ['name']");
?>

<?php
	include('header.php');
?>
<div id="content">
	<a data-role="button" href="interface.php"> Go back to interface </a>
</div>
</body>
</html>