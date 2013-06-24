
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8">
	<title>Responsive demo in one window</title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/global.css">
	
	<!-- jQuery + JavaScript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jresize.js"></script>
	
	<!-- Demo Script -->
	<script>
	$(function() {
		$.jResize({
			 viewPortSizes   : ['320px', '480px', '540px', '600px', '768px', '800px', '960px', '1024px', '1070px', '1280px'], // ViewPort Widths
			 backgroundColor : '444', // HEX Code
			 fontColor       : 'FFF' // HEX Code
		});
	});
	</script>
</head>

<body>
	
	<iframe src="<?php 
	
	$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
$host     = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
$params   = $_SERVER['QUERY_STRING'];
 
$currentUrl = $protocol . '://' . $host ;
 
echo $currentUrl;
	
	?>" style="width:100%;display:block;border:0;height:1000px;"></iframe>
	
</body>
</html>