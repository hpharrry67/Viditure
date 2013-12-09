<?php

	session_start();
	include('dbcon.php');

	$scontract=$_POST['contract'];
	$sparty=$_POST['party2'];
	$party1=$_SESSION['bname'];
	
	$ret=mysql_fetch_array(mysql_query("SELECT * FROM drafts WHERE cname='$scontract'"));
	
	$scdetails=$ret['cdetails'];
	
	mysql_query("INSERT INTO contracts (cname,cdetails,party1,party2) VALUES ('$scontract','$scdetails','$party1','$sparty')");

?>
<?php
	include('header.php');
?>
<div id="manipulate-confirmation" data-role="page">
	<div data-role="content">
		<a data-role="button" href="share.php">Share with more people</a>
		<a data-role="button" href="interface.php">Go to Interface</a>
	</div>
</div>