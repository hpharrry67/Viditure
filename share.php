<?php

	include('header.php');
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}

?>
<div id="sharing" data-role="page" data-add-back-btn="true">

	<div data-role="header">
		<h1>Share</h1>
	</div>
	
	<div data-role="content">
	
		<a href="sharedoc.php" data-role="button" data-theme="b">Share Documents</a>
		<a href="sharecontract.php" data-role="button" data-theme="b">Share Contracts</a>

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
