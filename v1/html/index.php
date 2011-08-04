<!-- saved from url=(0013)about:internet -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="description" content="The official site of Alpha Organic Inc.">
<meta name="keywords" content="music, music production, music composition, music mixing, photoshop, design, media, after effects, 3d, animatin, flash, website, web, interactive, audio, mixing, video, editing, film, television, movie, composer, papervision, agency, advertising, print, new media, tutorial, blog, toronto, canada">
<title>Alpha Organic</title>

<link rel="stylesheet" href="scripts/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript" src="scripts/swfforcesize.js"></script>
<script type="text/javascript" src="scripts/cookiecontroller.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.easing-1.4.pack.js"></script>


<style type="text/css">
			
			/* hide from ie on mac \*/
			html {
				height: 100%;
				overflow: auto;
			}
			
			#flashcontent {
				position: absolute;
				top: 0px;
				left: 0px;
				height: 100%;
				width:  100%;
			}
			/* end hide */
		
			body {
				height: 100%;
				margin: 0;
				padding: 0;
				background-color: #F9F9F7;
			}
		
</style>
</head>
<body bgcolor="#f9f9f7">
<div id="flashcontent">
  <p>alphaorganic. </p>
  <p>if you are seeing this it is probably because your do not have or are using and older version of flash.</p>
  <p>flash 9+ required.</p>
  <p>sorry.</p>
</div>
<script type="text/javascript">
   var so = new SWFObject("../swf/mainAlphaOrganic.swf", "alphaorganic", "100%", "100%", "9", "#F9F9F7");
   so.addParam('menu', 'false');
			so.addParam('scale', 'noscale');          
			so.addParam('salign', 't')
			so.addVariable("clearuser", getCookie("clearuser"));
			if( so.write('flashcontent') )
			{
				var forcesize = new SWFForceSize( so, 0, 0 );
			}   		
   
   so.write("flashcontent");
   
	
	
	function fancybox(link, width, height){
		
		$.fancybox({
			'autoDimensions'	:'false',
            'width'				: width,
            'height'			: height,
            'autoScale'			: true,
            'type'				: 'iframe',
            'href'				: url,
			'onStart'			: so.pausePlay(),
			'onCleanup'			: so.pausePlay()
        });
		
	}
</script>

<!--url's used in the movie-->
<!--text used in the movie-->
<!--<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) {  // if we've detected an acceptable version
		// embed the flash movie
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0',
			'width', '100%',
			'height', '100%',
			'src', 'swf/mainAlphaOrganic',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'top',
			'play', 'true',
			'loop', 'true',
			'scale', 'noborder',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'swf/mainAlphaOrganic',
			'bgcolor', '#f9f9f7',
			'name', 'swf/mainAlphaOrganic',
			'menu', 'true',
			'allowScriptAccess','sameDomain',
			'allowFullScreen','true',
			'movie', '../swf/mainAlphaOrganic',
			'salign', ''
			); //end AC code
	} else {  // flash is too old or we can't detect the plugin
		var alternateContent = 'Alternate HTML content should be placed here.'
			+ 'This content requires the Adobe Flash Player.'
			+ '<a href=http://www.macromedia.com/go/getflash/>Get Flash</a>';
		document.write(alternateContent);  // insert non-flash content
	}
}
// -->
</body>
</html>