<?php

	session_start();

	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}	
	
	$req=$_GET['req'];
	if($req == 3)
	{header('Location: interface.php'); exit();}
	else {
	include('header.php');}
?>

	        <div id="page-interface" data-role="page" data-add-back-btn="true">

            <!--Header-->
            <div data-role="header" data-position="fixed">
                <h1>Viditure</h1>
                
            </div>
	    <div data-role="content">
            	<a href="createcontract.php" data-role="button" data-theme="b">Create New<br>
            	<a href="drafts.php" data-role="button" data-theme="b">Templates<br>
            	<a href="share.php" data-role="button" data-theme="b">Share<br>
            	<a href="addoc.php" data-role="button" data-theme="b">Add Documents<br>
                <a href="manage.php" data-role="button" data-theme="b">Manage<br>
                <a href="reqcon.php" data-role="button" data-theme="b">Requests<br></a>
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
