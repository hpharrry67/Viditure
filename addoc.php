<?php
	include('header.php');
	session_start();
?>
<div id="signer-select" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>Select Platform</h1>
	</div>
	<div data-role="content">
	
		<a href="addoc2.php?sign=1" data-role="button" data-theme="b">1 Signer</a>
		<a href="addoc2.php?sign=2" data-role="button" data-theme="b">2 Signer</a>
		<a href="addoc2.php?sign=3" data-role="button" data-theme="b">3 Signer</a>
		<a href="addoc2.php?sign=4" data-role="button" data-theme="b">4 Signer</a>
		<a href="addoc2.php?sign=5" data-role="button" data-theme="b">5 Signer</a>
		<a href="addoc2.php?sign=6" data-role="button" data-theme="b">6 Signer</a>
		<a href="addoc2.php?sign=7" data-role="button" data-theme="b">7 Signer</a>
		<a href="addoc2.php?sign=8" data-role="button" data-theme="b">8 Signer</a>
	
	</div>
</div>
<div id="1signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>1 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="1signer-form" method="post" action="file_upload_script.php" enctype="multipart/form-data">

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
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
						
			<input type="file" name="document"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="2signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>2 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="2signer-form" method="post" action="file_upload_script.php" enctype="multipart/form-data">
			
			<label for="contract">Select Contract to add Document</label>
			<select id="contract" name="contract">
			<?php
				//include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM contracts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>
			
			<br>
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="file" name="document"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="3signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>3 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="3signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

			<label for="contract">Select Contract to add Document</label>
			<select id="contract" name="contract">
			<?php
				//include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM contracts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>

<br>
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="4signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>4 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="4signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

			<label for="contract">Select Contract to add Document</label>
			<select id="contract" name="contract">
			<?php
				//include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM contracts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>
<br>
			
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="text" name="party4" placeholder="Signer 4 email">
			<input type="number" name="party4no" placeholder="Phone number"> <br>
			

			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="5signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>5 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="5signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

			<label for="contract">Select Contract to add Document</label>
			<select id="contract" name="contract">
			<?php
				//include('dbcon.php');
				$bnamee = $_SESSION['bname'];
			
				$array = mysql_query("SELECT cname FROM contracts WHERE party1 = '$bnamee'");
				
								
				while($result=mysql_fetch_array($array))
				{
					echo '<option value='.'"'.$result['cname'].'"'.'>'.$result['cname'].'</option>';
				}				
			?>			
			</select>

			<br>
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="text" name="party4" placeholder="Signer 4 email">
			<input type="number" name="party4no" placeholder="Phone number"> <br>
			
			<input type="text" name="party5" placeholder="Signer 5 email">
			<input type="number" name="party5no" placeholder="Phone number"> <br>			

			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="6signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>6 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="6signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

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
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="text" name="party4" placeholder="Signer 4 email">
			<input type="number" name="party4no" placeholder="Phone number"> <br>
			
			<input type="text" name="party5" placeholder="Signer 5 email">
			<input type="number" name="party5no" placeholder="Phone number"> <br>			
			
			<input type="text" name="party6" placeholder="Signer 6 email">
			<input type="number" name="party6no" placeholder="Phone number"> <br>	

			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="7signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>7 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="7signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

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
			
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="text" name="party4" placeholder="Signer 4 email">
			<input type="number" name="party4no" placeholder="Phone number"> <br>
			
			<input type="text" name="party5" placeholder="Signer 5 email">
			<input type="number" name="party5no" placeholder="Phone number"> <br>			
			
			<input type="text" name="party6" placeholder="Signer 6 email">
			<input type="number" name="party6no" placeholder="Phone number"> <br>	

			<input type="text" name="party7" placeholder="Signer 7 email">
			<input type="number" name="party7no" placeholder="Phone number"> <br>	

			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>
	
</div>
<div id="8signer" data-role="page" data-add-back-btn="true">
	<div data-role="header">
		<h1>8 Signer</h1>
	</div>
	<div data-role="content">
		
		<form id="8signer-form" method="post" action="uploadoc.php" enctype="multipart/form-data">

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
			<input type="text" name="party1" placeholder="Signer 1 email">
			<input type="number" name="party1no" placeholder="Phone number"> <br>
			
			<input type="text" name="party2" placeholder="Signer 2 email">
			<input type="number" name="party2no" placeholder="Phone number"> <br>
			
			<input type="text" name="party3" placeholder="Signer 3 email">
			<input type="number" name="party3no" placeholder="Phone number"> <br>
			
			<input type="text" name="party4" placeholder="Signer 4 email">
			<input type="number" name="party4no" placeholder="Phone number"> <br>
			
			<input type="text" name="party5" placeholder="Signer 5 email">
			<input type="number" name="party5no" placeholder="Phone number"> <br>			
			
			<input type="text" name="party6" placeholder="Signer 6 email">
			<input type="number" name="party6no" placeholder="Phone number"> <br>	

			<input type="text" name="party7" placeholder="Signer 7 email">
			<input type="number" name="party7no" placeholder="Phone number"> <br>
				
			<input type="text" name="party8" placeholder="Signer 8 email">
			<input type="number" name="party8no" placeholder="Phone number"> <br>				

			<input type="file" name="document" placeholder="Document path"> <br>
			<input type="submit" value="Upload" data-theme="b">
		</form>

	</div>

</div>