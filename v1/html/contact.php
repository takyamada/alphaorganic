<!DOCTYPE HTML>
<html>
<head>	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/livevalidation.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		//LIVE VALIDATION
		var name = new LiveValidation('name');
		name.add(Validate.Presence);
		
		/*var phone = new LiveValidation('phone');
		phone.add(Validate.Presence);
		phone.add( Validate.Numericality );*/
		
		var email = new LiveValidation('email');
		email.add(Validate.Presence);
		email.add( Validate.Email );
		
		/*var website = new LiveValidation('website');
		website.add(Validate.Presence);*/
	});
	</script>

	<style type="text/css">
	
		.LV_validation_message{
	    font-weight:bold;
	    margin:2px 0 20px 10px;
	    
		}
	
		.LV_valid {
		    color:#00CC00;
		    margin:2px 0 20px 10px;
		}
			
		.LV_invalid {
		    color:#CC0000;
		    margin:10px;
		    
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
		
		body{
			font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			
		}
		p, h1, form, button{border:0; margin:0; padding:0;}
		.spacer{clear:both; height:1px;}
		/* ----------- My Form ----------- */
		.myform{
			margin:0 auto;
			width:500px;
			/*padding:14px;*/
		}
		
		/* ----------- stylized ----------- */
		#stylized{
			/*border:solid 2px #ff6600;*/
			
		}
		#stylized h1 {
			font-size:14px;
			font-weight:bold;
			margin-bottom:8px;
		}
		#stylized p{
			font-size:11px;
			color:#666666;
			margin-bottom:20px;
			border-bottom:solid 1px #ff6600;
			padding-bottom:10px;
		}
		#stylized label{
			display:block;
			font-weight:bold;
			text-align:right;
			width:140px;
			float:left;
		}
		#stylized .small{
			color:#666666;
			display:block;
			font-size:11px;
			font-weight:normal;
			text-align:right;
			width:140px;
		}
		#stylized input{
			float:left;
			font-size:12px;
			padding:4px 2px;
			
			width:225px;
			margin:2px 0 20px 10px;
		}
		#stylized textarea{
			float:left;
			font-size:12px;
			padding:4px 2px;
			
			width:225px;
			margin:2px 0 20px 10px;
		}
		#stylized button{
			clear:both;
			margin-left:150px;
			width:125px;
			height:31px;
			background:#666666 url(img/button.png) no-repeat;
			text-align:center;
			line-height:31px;
			color:#FFFFFF;
			font-size:11px;
			font-weight:bold;
		}
		
	</style>
</head>
<body background="../img/contactBG.jpg">
<?php 

	error_reporting(E_ALL); 

	if($_POST){
		$name='';
		$phone='';
		$email='';
		$website='';
		$message='';
		
        $name = ucfirst(strtolower($_REQUEST["name"]));
        $phone = $_REQUEST["phone"];//"(" .substr($_REQUEST["phone"], 0, 3) . ")-".substr($_REQUEST["phone"], 3, 3). "-" .substr($_POST["phone"], 6, 4);  
        $email = $_REQUEST["email"];
        $website = $_REQUEST['website'];
		$message = $_REQUEST['message'];

		$to = 'info@alphaorganicmedia.com';
        $subject = "Inquiry from: $name";            
        $body = "From: $name \n\n Email: $email \n\n Phone: $phone \n\n Website: $website \n\n $message";
        
        $header  = "MIME-Version 1.0\r\n"; 
		$header .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
		$header .= "From: AlphaOrganic <".$to.">\r\n"; 
		$header .= "Reply-To: ".$email."\r\n"; 
		$header .= "X-Mailer: PHP/".phpversion();
       	
        $sent = mail($to, $subject, $body, $header);	
                    
        if($sent)
        {
        	echo "<p class='.LV_validation_message .LV_valid'>Message Sent Successfully</p>";
        	
        }
        else
        {
       		"<p class='.LV_validation_message LV_invalid'>There was an error sending your message</p>";
        }
	}
?>

<div id="stylized" class="myform">

	<form id="form" name="form" method="post" action="" accept-charset="utf-8">
	<h1>Contact Us : 1+416-873-3634</h1>
	<p>Optionally please fill out this form and we will contact you asap</p>

	<label>Name
		<span class="small">Add your name</span>
	</label>
		<input type="text" name="name" id="name" />
	
	<label>Email
		<span class="small">Add a valid address</span>
	</label>
		<input type="text" name="email" id="email" />
	
	<label>Phone
		<span class="small"></span>
	</label>
		<input id="phone" type="text" name="phone" />
	
	<label>Website
		
	</label>
		<input id="website" type="text" name="website" />
		
	<label>Message 
		
	</label>
		<textarea id="message" name="message"  rows="10" cols="30" ></textarea>
	
	<button type="submit">Send</button>
	<div class="spacer"></div>
	
	</form>
</div>

</body>
</html>