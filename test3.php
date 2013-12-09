<?php
	session_start();
	include('dbcon.php');
	
	$cname=$_POST['cname'];
	$cdetails=$_POST['cdetails'];
	$doc=$_FILE["doc"]["name"];
	$party1=$_SESSION['bname'];
	
	mysql_query("INSERT INTO drafts(cname,cdetails,party1) VALUES('$cname','$cdetails','$party1')");
	
	
?>
<?php
	include('header.php');
?>
<div id="content" data-theme="black">
	<a href="interface.php" data-role="button" data-theme="b">Go to Interface</a>
</div>
</body>
</html>