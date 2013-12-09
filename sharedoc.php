<?php
	include('header.php');
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}
	
	$sdoc = $_POST['document'];
	$doc = mysql_fetch_array(mysql_query("SELECT * FROM docs WHERE name='$sdoc'"));
	
	$email[0] = $_POST['email1'];
	$email[1] = $_POST['email2'];
	$email[2] = $_POST['email3'];
	
	for($x=0;$x<3;$x++)
	{
		$abc=mysql_query("SELECT bname FROM users WHERE email='$email[$x]'");
	}
	$host=$_SESSION['bname'];
	$cname=$doc['contract'];
	$docname=$doc['name'];
	
	$z=0;
	$message = '
<html><body>
<h1>Dear User,</h1><br><br>
<p>
'.$_SESSION['bname'].'
has shared a Document with you. Go to Viditure and see requests to review it. If You are not on viditure, use the link below to see the document. But You can not review it.<br>'.
'<a href="'.'http://www.teamalphacrew.info/Viditure/uploads/'.$sdoc.'">Document Link</a></body></html>';$z++;
	
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	
	for($x=0;$x<3;$x++)
	{
	mail($email[$x],"Document Sharing",$message,$headers);
	}
	
	for($x=0;$x<3;$x++)
	{
		$cemail=$email[$x];
		mysql_query("INSERT INTO request(guest,host,doc) VALUES('$cemail','$host','$docname')");
	}
	
?>
<?php
	?>
<div id="sharing" data-role="page" data-add-back-btn="true">

	<div data-role="header">
		<h1>Share Documents</h1>
	</div>
	
	<div data-role="content">
	
		<form method="post" action="">
		
			<label for="document">Select Document to share</label>
			<select id="document" name="document">
			<?php
				include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT name FROM docs WHERE host = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['name'].'"'.'>'.$result['name'].'</option>';
				}				
			?>			
			</select>
			<br /><br />			

			<input type="email" name="email1" placeholder="email 1 to share">
			<input type="email" name="email2" placeholder="email 2 to share">
			<input type="email" name="email3" placeholder="email 3 to share">
			<br />
			<input type="submit" value="Share" data-theme="b">
					
		</form>
	
	</div>
	<!--Footer-->
            <div data-role="footer" data-position="fixed"  data-id="oneFooter">
                <span class="footerText">
                	<a href="www.facebook.com/creax" data-role="button" data-inline="true">Designed By IC</a>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	
                	<a href="logout.php" data-role="button" data-inline="true">Logout</a>
                </span>
            </div>

        </div>
    </body>
</html>
