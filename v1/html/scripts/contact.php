<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="description" content="The official site of Alpha Organic Inc.">
<meta name="keywords" content="music, music production, music composition, music mixing, photoshop, design, media, after effects, 3d, animatin, flash, website, web, interactive, audio, mixing, video, editing, film, television, movie, composer, papervision, agency, advertising, print, new media, tutorial, blog, toronto, canada">
<title>Alpha Organic</title>

<script type="text/javascript" src="scripts/livevalidation.js"></script>
<script type="text/javascript">
	//LIVE VALIDATION
	var name = new LiveValidation('name');
	name.add(Validate.Presence);
	
	var phone = new LiveValidation('phone');
	phone.add(Validate.Presence);
	phone.add( Validate.Numericality );
	
	var email = new LiveValidation('email');
	email.add(Validate.Presence);
	email.add( Validate.Email );
	
	var website = new LiveValidation('website');
	website.add(Validate.Presence);
	
	var message = new LiveValidation('message');
	message.add(Validate.Presence);
</script>

<style type="text/css">

	.LV_validation_message{
    font-weight:bold;
    margin:0 0 0 5px;
	}

	.LV_valid {
	    color:#00CC00;
	}
		
	.LV_invalid {
	    color:#CC0000;
	}
	    
	.LV_valid_field,
	input.LV_valid_field:hover, 
	input.LV_valid_field:active,
	textarea.LV_valid_field:hover, 
	textarea.LV_valid_field:active {
	    border: 1px solid #00CC00;
	}
	    
	.LV_invalid_field, 
	input.LV_invalid_field:hover, 
	input.LV_invalid_field:active,
	textarea.LV_invalid_field:hover, 
	textarea.LV_invalid_field:active {
	    border: 1px solid #CC0000;
	}
	
</style>
</head>
<body>
<?php 
	if($_POST){
        $name = ucfirst(strtolower($_REQUEST["name"]));
        $phone = "(" .substr($_REQUEST["phone"], 0, 3) . ")-".substr($_REQUEST["phone"], 3, 3). "-" .substr($_POST["phone"], 6, 4);  
        $email = $_REQUEST["email"];
        $website = $_REQUEST['website'];
		$message = $_REQUEST['message'];

		$to = "info@alphaorganicmedia.com";
        $subject = "Inquiry from: $fname $lname";            
        $headers = "noreply@YOURWEBSITE.com";
        $body = "From: $name \n\n Email: $email \n\n Phone: $phone \n\n Website: $website \n\n $message";
       	
        $sent = mail($to, $subject, $body, "");	
                    
        if($sent)
        {
        	echo " Message Sent Successfully";
        }
        else
        {
       		"There was an error sending your message";
        }
	}
?>

<form action="" method="post" accept-charset="utf-8" id="newUserForm" onKeyUp="highlight(event)" onClick="highlight(event)">
		<label for="name">Name</label>
		<input id="name" type="text" name="name" />
		
		<label for="email">Email</label>
		<input id="email" type="text" name="email" />
		
		<label for="phone">Phone</label>
		<input id="phone" type="text" name="phone" />
		
		<label for="website">Website</label>
		<input id="website" type="text" name="website" />
		
		<label for="message">Message</label>
		<textarea id="message" name="message"  rows="27" cols="10"></textarea>
		
		<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>