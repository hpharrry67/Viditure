<?php
	include('header.php');
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}
?>
<div id="contract-requests" data-role="page" data-add-back-btn="true">

	<div data-role="header" data-position="fixed">
		<h1>Requests</h1>
	</div>
	
	<div data-role="content">
		
		<?php
			session_start();
			if(isset($_SESSION['bname']) && isset($_SESSION['pass']))
			{
				$bname=$_SESSION['bname'];
				$pass=$_SESSION['pass'];
			}
			
			$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("teamalph_viditure", $con);

			$cparty=$_SESSION['bname'];
			$cemail=mysql_fetch_array(mysql_query("SELECT email FROM users WHERE bname='$cparty'"));
			$fcemail=$cemail['email'];
			$docs=mysql_query("SELECT * FROM request WHERE guest='$fcemail'");
				
			while($docsarray=mysql_fetch_array($docs))
			{
				$docname = $docsarray['doc'];
				$docid = mysql_fetch_array(mysql_query("SELECT docid FROM docs WHERE name='$docname'"));
				$fdocid = $docid['docid'];
				
				echo '<a href="document.php?doc='.$fdocid.'"'.' data-role="button" data-theme="b">'.$docname.'</a>';
			}	
		?>
		
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
