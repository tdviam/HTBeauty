<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Celadon</title>
	<link REL="SHORTCUT ICON" HREF="img/ico.ico">
	
    <!-- css -->
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand&subset=vietnamese,latin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
	<link href="color/default.css" rel="stylesheet">
	<link href="css/pgwslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="js1/jquery.bxslider.css" rel="stylesheet" />	
    <script src="js/jquery.min.js"></script>	 
	<script>
		function getParameterByName(name) {
    		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        	results = regex.exec(location.search);
    		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}
		
		function getCookie(name) {
			var cookieName = name + "=";
			var docCookie = document.cookie;
			var cookieStart;
			var end;
			if (docCookie.length>0) {
				cookieStart = docCookie.indexOf(cookieName)
				if (cookieStart != -1) {
					cookieStart = cookieStart + cookieName.length;
					end = docCookie.indexOf(";",cookieStart);
					if (end == -1) {
						end = docCookie.length;
					}
					return unescape(docCookie.substring(cookieStart,end));
				}
			}
			return false;
      	}
		
		function setCookie(name,value,expires){
			document.cookie = name + "=" + value + ((expires==null) ? "" : ";expires=" + expires.toGMTString());
		}
		
		var param = getParameterByName('lang');
		
		var expirydate=new Date();
		expirydate.setTime(expirydate.getTime()+(100*60*60*24*100));

		var cookie = getCookie('lang');
		
		if(param == ""){
			if(cookie == false){
				setCookie('lang','vn',expirydate);
			}
		}
		else
			setCookie('lang',param,expirydate);
	</script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
