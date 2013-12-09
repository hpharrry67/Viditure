<?php
include('header.php');
session_start();
$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);


$fileName = $_FILES["doc1"]["name"]; 
$fileTmpLoc = $_FILES["doc1"]["tmp_name"]; 
$fileType = $_FILES["doc1"]["type"]; 
$fileSize = $_FILES["doc1"]["size"]; 
$fileErrorMsg = $_FILES["doc1"]["error"]; 

$contract=$_POST['contract'];

$party[0]=$_POST['party_email0'];
$party[1]=$_POST['party_email1'];
$party[2]=$_POST['party_email2'];
$party[3]=$_POST['party_email3'];
$party[4]=$_POST['party_email4'];
$party[5]=$_POST['party_email5'];
$party[6]=$_POST['party_email6'];
$party[7]=$_POST['party_email7'];

$partyno=$_POST['party1no0'];
$partyno=$_POST['party1no1'];
$partyno=$_POST['party1no2'];
$partyno=$_POST['party1no3'];
$partyno=$_POST['party1no4'];
$partyno=$_POST['party1no5'];
$partyno=$_POST['party1no6'];
$partyno=$_POST['party1no7'];



for($x=0;$x<8;$x++)
{
$rec = mysql_query("SELECT bname FROM users WHERE email='$party[$x]'");
}
$size = sizeof($rec);

$recbname = $rec['bname'];
$message = '
<html><body>
<h1>Dear '.$recbname.'</h1><br><br>
<p>
'.$_SESSION['bname'].'
has shared a Document with you. Go to Viditure to review it. If You are not on viditure, use the link below to see the document. But You can not review it.<br>'.
'<a href="'.'http://www.teamalphacrew.info/Viditure/uploads/'.$fileName.'">Document Link</a></body></html>';

$path = 'uploads/'.$fileName;
$host=$_SESSION['bname'];
mysql_query("INSERT INTO docs (name,contract,status,path,type,host) VALUES ('$fileName','$contract',0,'$path','$fileType','$host')");

$headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$z=0;
for($z=0;$z<=6;$z++)
{
mail($party[$z],"Document Shared - Viditure",$message,$headers);
$emailparty=$party[$z];
mysql_query("INSERT INTO request (guest,cname,host,doc) VALUES ('$emailparty','$contract','$host','$fileName')");
}
mysql_query("DELETE FROM request WHERE guest=''");


if (!$fileTmpLoc) { 
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if (!preg_match("/.(jpg)$/i", $fileName) ) {
         
     echo '<div data-role=' . '"page"' . '>' . '<div data-role=' . '"button"' . '>' . "ERROR: Your document was not .jpg" . '</div>' . '</div>';
     unlink($fileTmpLoc);
     exit();
}

move_uploaded_file($fileTmpLoc, "uploads/$fileName");

if (!file_exists("uploads/$fileName")) {
    echo "ERROR: File not uploaded<br /><br />";
    echo "Check folder permissions on the target uploads folder is 0755 or looser.<br /><br />";
    echo "Check that your php.ini settings are set to allow over 2 MB files, they are 2MB by default.";
    
}

header('Location: interface.php');
?>