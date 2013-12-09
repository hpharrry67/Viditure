<!DOCTYPE html>

<html>
	<head>
		<title>Interface</title>
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

            <div data-role="header" data-position="fixed">
                <h1>Sign Up</h1>
            </div>
            <form id="signupform" method="post" action="save.php" data-ajax="true">
            <div data-role="content">
                <input name="bname" id="bname" type="text" placeholder="Business Name" />
                <br />
                <input name="email" id="email" type="email" placeholder="Admin E-mail" />
                <br />
                <input name="pass" id="Text1" type="password" placeholder="Password" />
                <br />
                <label for="btype">
                    Business-Type:
                </label>
                <select id="btype" name="btype">
                <option value="BIOTECHNOLOGY">Biotechnology</option>
		<option value="BUSINESS_PRODUCTS_SERVICES">Business Products and Services</option>
		<option value="CLEAN_TECHNOLOGY">Clean Technology</option>
		<option value="COMPUTERS_PERIPHERALS">Computers and Peripherals</option>
		<option value="CONSUMER_PRODUCTS_SERVICES">Consumer Products and Services</option>
		<option value="EDUCATION">Education</option>
		<option value="ELECTRONICS_INSTRUMENTATION">Electronics / Instrumentation</option>
		<option value="FASHION">Fashion</option>
		<option value="FINANCIAL_SERVICES">Financial Services</option>
		<option value="FOOD_AND_DRINK">Food / Drink</option>
		<option value="GAMING">Gaming</option>
		<option value="HEALTHCARE_SERVICES">Healthcare Services</option>
		<option value="INDUSTRIAL_ENERGY">Industrial/Energy</option>
		<option value="IT_SERVICES">IT Services</option>
		<option value="INTERNET_WEB_SERVICES">Internet / Web Services</option>
		<option value="LIFESTYLE">Lifestyle</option>
		<option value="MARKETING_ADVERTISING">Marketing / Advertising</option>
		<option value="MEDIA_ENTERTAINMENT">Media and Entertainment</option>
		<option value="MEDICAL_DEVICES_EQUIPMENT">Medical Devices and Equipment</option>
		<option value="MOBILE">Mobile</option>
		<option value="NANOTECHNOLOGY">Nanotechnology</option>
		<option value="NETWORKING_EQUIPMENT">Networking and Equipment</option>
		<option value="OTHER">Other</option>
		<option value="RETAILING_DISTRIBUTION">Retailing / Distribution</option>
		<option value="SEMICONDUCTORS">Semiconductors</option>
		<option value="SOFTWARE">Software</option>
		<option value="SPORTS">Sports</option>
		<option value="TELECOMMUNICATIONS">Telecommunications</option>
		<option value="TRAVEL">Travel</option></select>
                    
                </select>
                <br />
                <textarea name="addr" id="addr" cols="20" rows="3">Address</textarea>
                <br />
                
                <input id="tnc" type="checkbox" name="tnc" /> <label for="tnc">Agree to Terms and Conditions</label>
                <br />
                <div style="padding-left:35px;padding-right:35px;">
                <input type="submit" id="submit" data-icon="check" data-theme="b" value="Sign Up" >
                </div>
            </div>
            </form>
        </div>
    </body>
</html>