<?php
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}
?>

<html>
	<head>
		<title>Create Contract</title>
	    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="jquery-mobile/styles/jquery.mobile-1.3.1.min.css" rel="stylesheet" />
        <link href="styles/main.css" rel="stylesheet" />
        <script type="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
        <script src="cordova.js" type="text/javascript"></script>
        <script src="jquery-mobile/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="jquery-mobile/js/jquery.mobile-1.3.1.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

        <script src="scripts/login.js" type="text/javascript"></script>
        <script src="scripts/location.js" type="text/javascript"></script>
        <script type="text/javascript">

        </script>

    </head>
    <body>
        <div id="page-contract" data-role="page" data-add-back-btn="true">
	<font color="green">
            <div data-role="header" data-position="fixed">
                <h1>Create New Contract</h1>
            </div>
            <form id="contractform" enctype="multipart/form-data" method="post" action="test3.php" data-ajax="true">
            <div data-role="content">
                <input name="cname" id="cname" type="text" placeholder="Contract Title" />
                <br />
                <textarea name="cdetails" id="cdetails">Enter Your Contract Details here.(Precise)</textarea>
                <br />
                                                <div style="padding-left:35px;padding-right:35px;">
                <input type="submit" data-theme="b" value=" Create " >
                </div>
            </div>
            </form>
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
