<?php
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}
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

	<style>

  		.ui-page { background: #444444;}

	</style>


    </head>
	<body>

<div id="upload-doc" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>Upload Document</h1>
	</div>
	<div data-role="content">
		
		<form method="post" action="file_upload_script.php" enctype="multipart/form-data" data-ajax="false">
		
			<label for="contract">Select Contract to add Document</label>
			<select id="contract" name="contract">
			<?php
				include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM contracts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>

			<br>
			
			<?php
			
				$sign=$_GET['sign'];
				$i=0;
				
				while($i<$sign)
				{
					echo '<input type="email"  name="party_email'.$i.'"'.' placeholder="Signer 1 email">';
					echo '<input type="tel" name="party1no'.$i.'"'.' placeholder="Phone number"> <br>';
					$i++;
				}

			?>
			
			<br>
			<input type="file" name="doc1">
			<input type="submit" value="Upload" data-role="button" data-theme="b">

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
