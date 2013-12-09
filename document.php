<?php
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}
	
	$con = mysql_connect("localhost","teamalph_vidiusr","iloveaditi");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("teamalph_viditure", $con);

	$party=$_SESSION['bname'];
	$comment=$_POST['comment'];
	$videoName=$_FILES['viditure']['name'];
	$videoType=$_FILES['viditure']['type'];
	$videotmploc=$_FILES['viditure']['tmp_name'];
	$docid=$_GET['doc'];
	
	if (!$videotmploc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
} 
	
	move_uploaded_file($videotmploc,"videos/$videoName");
	$path="videos/".$videoName;
	
	mysql_query("INSERT INTO comments (doc_id,comment,party,attachment) VALUES ($docid,'$comment','$party','$path')");
?>
<html>
	<head>
		<title>Interface</title>
	    <meta charset="UTF-8" />
	    <title>Hello, World</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="jquery-mobile/styles/jquery.mobile-1.3.1.min.css" rel="stylesheet" />
        <link href="styles/main.css" rel="stylesheet" />

        <script src="cordova.js" type="text/javascript"></script>
        <script src="jquery-mobile/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="jquery-mobile/js/jquery.mobile-1.3.1.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

        <script src="scripts/login.js" type="text/javascript"></script>
        <script src="scripts/location.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" src="js/wormhole.js"></script>

	<style>

  		.ui-page { background: #444444;}

	</style>


    </head>
	<body>
<div id="document-view" data-role="page">

	<div data-role="header">
		<h1>Document View</h1>
	</div>
	
	<div data-role="content">
	
		<?php
			
			$docid2 = $_GET['doc'];
			
			$docdetails = mysql_fetch_array(mysql_query("SELECT * FROM docs WHERE docid = $docid2"));
			
			echo '<h1><font color='.'"white">'.$docdetails['name'].'</font>'.'</h1>';
			
			echo '<img src='.'"'.$docdetails['path'].'"'.' align='.'"center">';
			echo '<br><br>';
			
		?>
		
		<ul data-role="listview" data-inset="true">
		
			<?php
			
				$comments = mysql_query("SELECT * FROM comments WHERE doc_id = $docid2");
				while($commentslist = mysql_fetch_array($comments))
				{
					echo '<li data-role='.'"list-divider">'.$commentslist['party'].'</li>';
					echo '<li><p>'.$commentslist['comment'].'</p><br>';
					echo '
					<div data-role="popup" id="popupVideo" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">

    					<iframe src='.'"'.$commentlist['attachment'].'"'.' width="497" height="298" seamless></iframe>
	 
					</div>

					
					</li>';
				}
			
			?>
		
		</ul><br>
		<?php
			echo '<form method='.'"post"'.' action='.'"document.php?doc='.$_GET['doc'].'"'.' data-ajax="false">';
		?>
			<input type="text" name="comment" placeholder="Enter Your Comment">
			<input type="file" name="viditure" accept="video/*" capture>
			<input type="submit" value="Add" data-theme="b">
		</form>
	
	</div>

<!--Footer-->
            <div data-role="footer" data-position="fixed"  data-id="oneFooter">
                <span class="footerText">
                	<a href="aboutus.php" data-role="button" data-inline="true">Designed By IC</a>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	
                	<a href="logout.php" data-role="button" data-inline="true">Logout</a>
                </span>
            </div>

        </div>
    </body>
</html>
