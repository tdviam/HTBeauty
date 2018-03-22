<?
debug_backtrace() || die("Direct access not permitted");
?>
<!doctype html>
<html lang="en">
<? 	
session_start();
$sess = $_SESSION['username'];
if(!isset($sess))
{
	header("Location: login.php");
}

?>
<head>
	<meta charset="utf-8"/>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="/index.php">Trang chủ	</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Welcome <? echo ", ".$sess;?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		
		<hr/>
		<h3>Bài viết</h3>
		<ul >
			<li class="icn_edit_article"><a href="index.php">Tất cả bài viết</a></li>
			<li class="icn_new_article"><a href="add_new.php">Bài viết mới</a></li>
		</ul>
		
		<h3>Mật khẩu</h3>
		<ul >
			<li class="icn_edit_article"><a href="passwords.php">Thay đổi mật khẩu</a></li>
		</ul>
		<h3>Admin</h3>
		<ul >
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
		</ul>
		
		
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Welcome to HTBeauty Admin</h4>