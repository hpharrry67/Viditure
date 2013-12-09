<?php

	include('header.php');
	session_start();
	
	if(!isset($_SESSION['bname']))
	{
		header('Location: login.php');
	}	
?>
<div id="page-share" data-role="page" data-add-back-btn="true">

	<div data-role="header" data-position="fixed">
		<h1>Share Contracts</h1>
	</div>
	
	<div data-role="content">
		
		<form action="manipulate.php" method="post">
			<font color="green">
			<label for="contract">Select Contract to Share : </label>
			<select id="contract" name="contract">
			<?php
				include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM drafts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>
			<br />	
			
			<label for="party2">Select Party to propose contract: </label>			
			<select id="party2" name="party2">
			<?php
				include('dbcon.php');
				$party1=$_SESSION['bname'];
								
				$array=mysql_query("SELECT bname FROM users WHERE bname<>'party1'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['bname'].'"'.'>'.$result['bname'].'</option>';
				}				
			?>			
			</select>
			<br />
			<div style="padding-left:80px;padding-right:80px;">
			<input type="submit" data-theme="b" value="Share">
			</div>
			</font>
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
