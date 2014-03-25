<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="normalize.css" type="text/css" media="screen">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
	<style type="text/css"> 
 
 #navbar ul { 
	margin: 0; 
	padding: 5px; 
	list-style-type: none; 
	text-align: center; 
	background-color: #'transparent'; 
	} 
 
#navbar ul li {  
	display: inline; 
	} 
 
#navbar ul li a { 
	text-decoration: none; 
	padding: .2em 1em; 
	color: #fff; 
	background-color: #000; 
	} 
 
#navbar ul li a:hover { 
	color: #000; 
	background-color: #fff; 
	} 

	#bc {
		background-size:100% 260%;
		background-repeat:no-repeat;
	}

	#foot {
		  position:absolute;
		   bottom:0;
		   width:100%;
		   height:50px;   /* Height of the footer */
		 
	}
 
</style> 
</head>
<body id='bc' background="/img/smoke.jpg">
	<title> MR.LIMON</title>
<br>
	<center><img src="/img/LIMON.jpg" alt="MR LIMON" ></center><br>
</head>  
<div id="navbar"> 
  <ul> 
	<li><a href="{{{ action('HomeController@showHome') }}}">HOME</a></li> 
	<li><a href="{{{ action('HomeController@showBio') }}}">BIO</a></li> 
	<li><a href="{{{ action('HomeController@showGallery') }}}">GALLERY</a></li> 
	<li><a href="{{{ action('HomeController@showContact') }}}">CONTACT</a></li> 
  </ul> 
</div> 

</body>
<br>
<center><footer id='foot'>
© 2014 Keith Limon Productions <a href="https://www.facebook.com/The.ArtWork.Of.Keith.Limon/info" target="_blank">

</a>
</footer></center>
<br>
</html>