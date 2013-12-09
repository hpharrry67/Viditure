<?php
	include('header.php');
	
	if(isset($_SESSION['bname']) && isset($_SESSION['pass']))
	{
		header('Location: interface.php');
	}
?>          
            <div id="page-login" data-role="page" data-add-back-btn="true">

            <div data-role="header" data-position="fixed">
                <h1>Log in</h1>
            </div>
            
            <form id="loginform" method="post" action="compare.php" data-ajax="false">
                <div data-role="content">
                    
                    <input name="bname" id="bname" type="text" placeholder="Business Name" />
                    <br />
                    <input name="pass" id="pass" type="password" placeholder="Password" />
                    <br />
                    <br />
                    <input type="submit" data-role="button" data-theme="b" value="Log In" />
                    <br />
                    <h3 align="center"><font color="green">OR</font></h3>
                    <a href="signup.php" data-role="button">Sign Up</a>

                </div>
            </form>
	   <div data-role="footer" data-position="fixed"  data-id="oneFooter">
                <span class="footerText">Powered By IC</span>
            </div>           
   </body>
</html>
