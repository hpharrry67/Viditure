<?php

	include('header.php');
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}

?>
<div id="page-draft" data-role="page" data-add-back-btn="true">

	<div data-role="header" data-position="fixed">
		<h1>Drafts</h1>
	</div>
	
	<div data-role="content">
	
		<?php
		
			$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("teamalph_viditure", $con);
			$bnamee = $_SESSION['bname'];
			
			$result = mysql_query("SELECT cname FROM drafts WHERE party1 = '$bnamee'");

			
			while($array = mysql_fetch_array($result)) {
				echo '<div data-role=' . '"button"' . '>' . $array['cname'] . '</div>';
			}			
			

		?>
		<br /><br />
		<a data-role="button" href="share.php" data-theme="b" >Share Draft</a>
				
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
