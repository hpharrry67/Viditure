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

  		.ui-page { background: #ffffff;}

	</style>


    </head>
	<body>
<div data-role="page" id="doc-manage" data-add-back-btn="true">
	<div data-role="header">
		<h1>Manage Documents</h1>
	</div>
	<div data-role="content">

		<table data-role="table" id="docs" data-mode="reflow" class="ui-responsive table-stroke" data-theme="c">
				<thead>
					<th>Doc no.</th>
					<th>Name</th>
					<th>Didn't see the Doc</th>
					<th>Didn't sign</th>
					<th>Signed</th>
				</thead>
				
				<?php
				
					include('dbcon.php');
					$bname = $_SESSION['bname'];
					$docs = mysql_query("SELECT docid,name,status FROM docs WHERE host='$bname'");

				while($doclist = mysql_fetch_array($docs))
				{
						
				echo '<tr>';						
						
				echo '<td>'.'<a href='.'"document.php?doc='.$doclist['docid'].'"'.'data-role='.'"button"'.'>'.'Doc #'.$doclist['docid'].'</a>'.'</td>';
						echo '<td>' . $doclist['name'] . '</td>';
						
						if($doclist['status'] == 0)
						{
							echo '<td>yes</td>';
						}
						if($doclist['status'] == 1)
						{
							echo '<td></td>';
							echo '<td>yes</td>';
						}
						if($doclist['status'] == 2)
						{
							echo '<td></td>';
							echo '<td></td>';
							echo '<td>yes</td>';
						}						
						
						echo '</tr>';
					}
					
				?>		
							
		</table>
	
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
