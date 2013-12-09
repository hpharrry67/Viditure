<?php

	session_start();
	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);

	$hparty=$_SESSION['bname'];
	if(isset($_POST['party1']) && isset($_POST['party1no']))
	{
		$party1=$_POST['party1'];
		$party1no=$_POST['party1no'];
	}
	if(isset($_POST['party2']) && isset($_POST['party2no']))
	{
		$party2=$_POST['party2'];
		$party2no=$_POST['party2no'];
	}
	if(isset($_POST['party3']) && isset($_POST['party3no']))
	{
		$party3=$_POST['party3'];
		$party3no=$_POST['party3no'];
	}
	if(isset($_POST['party4']) && isset($_POST['party4no']))
	{
		$party4=$_POST['party4'];
		$party4no=$_POST['party4no'];
	}
	if(isset($_POST['party5']) && isset($_POST['party5no']))
	{
		$party5=$_POST['party5'];
		$party5no=$_POST['party5no'];
	}
	if(isset($_POST['party6']) && isset($_POST['party6no']))
	{
		$party6=$_POST['party6'];
		$party6no=$_POST['party6no'];
	}
	if(isset($_POST['party7']) && isset($_POST['party7no']))
	{
		$party7=$_POST['party7'];
		$party7no=$_POST['party7no'];
	}
	if(isset($_POST['party8']) && isset($_POST['party8no']))
	{
		$party8=$_POST['party8'];
		$party8no=$_POST['party8no'];
	}
	
	$contract = $_POST['contract'];
	$docname = $_FILES['document']['name'];
	$docplace = $_FILES['document']['tmp_name'];
	$doctype = $_FILES['document']['type'];
	$uploadir = 'uploads/';
	$fuploadir = $uploaddir . basename($_FILES['document']['name']);
	move_uploaded_file($docplace,$fuploadir);

	$conid = mysql_fetch_array(mysql_query("SELECT cid FROM contracts WHERE cname like '$contract'"));
	$fconid = $conid['cid'];

	mysql_query("INSERT INTO docs(name,contract,status,path,type) VALUES('$docname',$fconid,0,'$fuploadir','$doctype')");

	if (!$docplace) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if (!preg_match("/.(jpg)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo '<div data-role=' . '"page"' . '>' . '<div data-role=' . '"button"' . '>' . "ERROR: Your document was not .jpg" . '</div>' . '</div>';
     unlink($docplace);
     exit();
}

?>