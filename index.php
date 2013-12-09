<!DOCTYPE html>
<html>
    <head>
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

	        

    </head>
    <body>

        <!--Home-->
        <div id="page-home" data-role="page" >

            <!--Header-->
            <div data-role="header" data-position="fixed">
                <h1>Viditure</h1>
            </div>

            <!--Content-->
            <div data-role="content" align="center">
                          
            
	    <img src="images/VIDITURE.png" align="center" height="130" width="260"><br>     <br>      
            
            <a href="#popupVideo" data-rel="popup" data-position-to="window" data-role="button" data-theme="b" data-inline="true">Launch Tutorial video</a>
            
            <div data-role="popup" id="popupVideo" data-overlay-theme="a" data-theme="d" data-tolerance="15,15" class="ui-content">

    	    <iframe src="http://www.youtube.com/watch?v=JW5meKfy3fY" width="497" height="298" seamless></iframe>
	 
	    </div>

             
                <br />
                <br />
                <br />
            
            </div>
            <div class="nav" style="padding-left:30px;padding-right:30px;">
                
            
             
                        <a href="login.php" data-transition="slide" data-role="button" data-theme="b">Log in</a>
                   
                    <h3 align="center"><font color="#FFFFFF">OR</font></h3>
                   
                        <a href="signup.php" data-transition="slide" data-role="button" data-theme="b">Sign Up</a>

            </div>

            <!--Footer-->
            <div data-role="footer" data-position="fixed" data-id="oneFooter">
                <span class="footerText">Powered by IC</span>
            </div>

        </div>

    </body>
</html>