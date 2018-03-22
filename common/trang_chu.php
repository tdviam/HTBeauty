<?
debug_backtrace() || die("Direct access not permitted");
?>
<!-- Navigation -->
<div id="navigation"class="container-fluid">
	<nav class="navbar navbar-custom" role="navigation">
						  <div class="container">
								<div class="row">
									<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
											<i class="fa fa-bars"></i>
											</button>
									  </div>
									  <div class="col-md-3 col-sm-3 col-lg-3 more-md-3">
											   <div class="site-logo">
													<a href="index.php" class="brand"><img u="image" alt="celadon" width="100%" src=" <?echo $lang['LOGO'] ?>" /></a>
												</div>
									  </div>

									  <div class="col-md-9 col-sm-9 col-lg-9 more-md-9" style="padding-top: 10px;">
					 
												  <!-- Brand and toggle get grouped for better mobile display -->
									  
												  <!-- Collect the nav links, forms, and other content for toggling -->
												  <div class="collapse navbar-collapse" id="menu">
														<ul class="nav navbar-nav navbar-right">
																<li class="active"><a href="#intro"><?php echo $lang['HOME']; ?></a></li>
																<li><a href="#services"><?php echo $lang['SERVICES']; ?></a></li>
																<li><a href="#clients"><?php echo $lang['CLIENTS']; ?></a></li>
																<li><a href="#contact"><?php echo $lang['CONTACT']; ?></a></li>
																<li><a href="news.php" style="padding-right:25px"><?php echo $lang['NEWS']; ?></a></li>
														</ul>
												  </div>
												  <!-- /.Navbar-collapse -->
						 
									  </div>
								</div>
						  </div>
						  <!-- /.container -->
		</nav>
</div> 
<!-- /Navigation -->  

<!-- Section: intro -->
<section id="intro" class="container-fluid" >
<style>
#main_slide #title_intro{
	position: absolute;
	display: none;
	z-index: 900;
	width: 100%;
	margin: auto;
	top: 45%;
}	
</style>	
<script>
	jQuery(document).ready(function ($) {
		$('#slider_intro').bxSlider({
			mode: 'horizontal',
			adaptiveHeight: true,
			responsive: true,
			captions: true,
			infiniteLoop:true,
			auto:true
		});
		
		
		// $('#slider_intro').hover(
// 			function () {
// 				if( $( window ).width() > 768){
// 					$('#slider_intro img').css({"opacity":"0.2"});
// 					$('#main_slide #title_intro').css({"display":"block"});
// 				}				
// 			},
// 			function () {
// 				$('#slider_intro img').css({"opacity":"1"});
// 				$('#main_slide #title_intro').css({"display":"none"});
// 			}
// 		);
// 
// 		$('#title_intro').hover(
// 			function () {
// 				if( $( window ).width() > 768){
// 					$('#slider_intro img').css({"opacity":"0.2"});
// 					$('#main_slide #title_intro').css({"display":"block"});
// 				}				
// 			},
// 			function () {
// 				$('#slider_intro img').css({"opacity":"1"});
// 				$('#main_slide #title_intro').css({"display":"none"});
// 			}
// 		);	
	});
</script>
    <div id="main_slide" class="text-center">
			<div id='title_intro'>
  					<h1 class='h-bold' ><?echo $lang['TITLE1']?></h1>	
					<div class='divider-header' ></div>		
  					<div class='title_intro1'><?echo $lang['TITLE2']?></div>
  					<div class='title_intro2' ><a class='btn' href='#contact'><?echo $lang['TITLE3']?></a></div>
			</div>
			
			<ul id="slider_intro">	
				<?
					include "common/connect.php";
					$sqlSlide="select * from tblimagesslide";
					$querySlide=mysql_query($sqlSlide);
					if(mysql_num_rows($querySlide) == 0)
					{} 
					else{
						while($rowSlide=mysql_fetch_array($querySlide))
						{
				?>			
				<li><img src="<? echo str_replace("../","",$rowSlide['URL']); ?>" /></li>	
  				<!-- 
				<li><img src="img/events01.jpg" /></li>
				<li><img src="img/events02.jpg" /></li>
				<li><img src="img/events04.jpg" /></li>
				<li><img src="img/events05.jpg" /></li>
 				-->
 				<?		}
 					}
 				 ?>
			</ul>
		
	<div>	
</section>	
<!-- Section: services -->
<section id="services" class="home-section container-fluid ">
	
	<div id="services_content" class="text-center ">
		<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
				
				<div class="service_box">
					<div class="service_icon outer_vertical_center">
						<div class="middle_vertical_center">
							<img src="img/icon1.png"  />
						</div>
					</div>
					<div class="service_desc">						
						<div class="services_header">
							<h5><?php echo $lang['MARKETING']; ?></h5>
						</div>
						<p>
						<?echo $lang['MARKETING_TITLE']?>
						</p>
						<a href="#mar" class="btn "><? echo $lang['SEEMORE']?></a>
					</div>
				
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
				
				<div class="service_box">
					<div class="service_icon outer_vertical_center">
						<div class="middle_vertical_center">
							<img src="img/icon2.png"  />
						</div>
					</div>
					<div class="service_desc">
						<div class="services_header">
							<h5><?php echo $lang['COMMUNICATION']; ?></h5>
						</div>
						<p>
						<?echo $lang['COMMUNICATION_TITLE']?>
						<br/>
						</p>
						<a href="#com" class="btn "><? echo $lang['SEEMORE']?></a>
					</div>
			   
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
				
				<div class="service_box">
					<div class="service_icon outer_vertical_center">
						<div class="middle_vertical_center">
							<img src="img/icon3.png"  />
						</div>
					</div>
					<div class="service_desc">
						<div class="services_header">
							<h5><?php echo $lang['EVENTS']; ?></h5>
						</div>
						<p>
						<?echo $lang['EVENTS_TITLE']?>
						</p>
						<a href="#eve" class="btn "><? echo $lang['SEEMORE']?></a>
					</div>
				</div>				
			</div>		
		</div>
		<!-- div row -->
		</div>
		
	</div>
	<!-- div container -->
	<div class="down_arrow">
			<a href="#mar"><img src="img/Arrow_6.png"/></a>
	</div>
</section>
<!-- /Section: services -->

<!-- Section: marketing -->
<section id="mar" class="home-section container-fluid">
	<div class="buffer ">
		<div class="services_bg">
			<img src="img/mar-under1.png" />
			<img src="img/mar-on.png" />
		</div>
		<?
				$sqlService1="select * from tblservices where ID = 1";
				$queryService1=mysql_query($sqlService1);
				if(mysql_num_rows($queryService1) == 0)
				{} 
				else{
					while($rowService1=mysql_fetch_array($queryService1))
					{
		?>
		<div class="container ser_content outer_vertical_center">
			<div class="row middle_vertical_center">
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ser_img">
					<img src="<?echo str_replace("../","",$rowService1['URL'])?>" />
				</div>
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ">
					<div class="ser_text">
						<div class="ser_text_top">
							<? echo $lang['MARKETING1']?>
						</div>
						<div class="ser_text_mid"></div>
						<div class="ser_text_bot">
							<?
								if($_SESSION['lang'] == 'vn'){
									echo $rowService1['CONTENT'];
								}else{
									echo $rowService1['CONTENT_EN'];								
								}	
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?			} 
				}
		?>	
	</div>
	<div class="down_arrow">
		<a href="#com"><img src="img/Arrow_6.png" /></a>
	</div>
</section>
<!-- /Section: marketing -->

<!-- Section: communication -->
<section id="com" class="home-section container-fluid">
	<div class="buffer">
		<div class="services_bg">
			<img src="img/com-under1.png" />
			<img src="img/com-on.png" />
		</div>
		<?
				$sqlService2="select * from tblservices where ID = 2";
				$queryService2=mysql_query($sqlService2);
				if(mysql_num_rows($queryService2) == 0)
				{} 
				else{
					while($rowService2=mysql_fetch_array($queryService2))
					{
		?>
		<div class="container ser_content outer_vertical_center">
			<div class="row middle_vertical_center">
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ser_img">
					<img src="<?echo str_replace("../","",$rowService2['URL'])?>" />
				</div>
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ">
					<div class="ser_text">
						<div class="ser_text_top">
							<? echo $lang['COMMUNICATION']?>
						</div>
						<div class="ser_text_mid"></div>
						<div class="ser_text_bot">
							<?
								if($_SESSION['lang'] == 'vn'){
									echo $rowService2['CONTENT'];
								}else{
									echo $rowService2['CONTENT_EN'];								
								}	
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?			}
				}
		?>			
	</div>
	<div class="down_arrow">
		<a href="#eve"><img src="img/Arrow_6.png" /></a>
	</div>
</section>
<!-- /Section: communication -->

<!-- Section: event -->
<section id="eve" class="home-section container-fluid">
	<div class="buffer">
		<div class="services_bg">
			<img src="img/mar-under1.png" />
			<img src="img/eve-on.png" />
		</div>
		<?
				$sqlService3="select * from tblservices where ID = 3";
				$queryService3=mysql_query($sqlService3);
				if(mysql_num_rows($queryService3) == 0)
				{} 
				else{
					while($rowService3=mysql_fetch_array($queryService3))
					{
		?>
		<div class="container ser_content outer_vertical_center">
			<div class="row middle_vertical_center">
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ser_img">
					<img src="<?echo str_replace("../","",$rowService3['URL'])?>" />
				</div>
				<div id="" class="col-sm-6 col-md-6 col-lg-6 ">
					<div class="ser_text">
						<div class="ser_text_top">
							<? echo $lang['EVENTS']?>
						</div>
						<div class="ser_text_mid"></div>
						<div class="ser_text_bot">
							<?
								if($_SESSION['lang'] == 'vn'){
									echo $rowService3['CONTENT'];
								}else{
									echo $rowService3['CONTENT_EN'];								
								}	
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?			}
				}
		?>
	</div>
	<div class="down_arrow">
			<a href="#clients"><img src="img/Arrow_6.png" /></a>
	</div>
</section>
<!-- /Section: event -->
<section id="big_devider" class="home-section container-fluid">
</section>
<!-- Section: clients -->
<section id="clients" class="home-section container-fluid color-grey " style="font-weight: bold;">
	<div class="container">		
		<!-- Jssor Slider Begin -->
		<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<ul class="slideClient">
					<li class="wrap">
						<div class="box title">
							<span class="<?echo $lang['title-client']?>"><?php echo $lang['CLIENTS']; ?></span>
						</div>
						<div class="box border">
							<a href=""><img src="img/logo/mbf.png" /></a>
						</div>
						<div class="box border">
							<a href=""><img src="img/logo/vcb.png" /></a>
						</div>
						<div class="box border">
							<a href=""><img src="img/logo/tt.png" /></a>
						</div>
						<div class="box border">
							<a href=""><img src="img/logo/bv.png" /></a>
						</div>
					</li>
					<li class="wrap">
						<div class="box title">
							<span class="<?echo $lang['title-client']?>"><?php echo $lang['CLIENTS']; ?></span>
						</div>
						<div class="box border">
							<img src="img/logo/vtb.png" />
						</div>
						<div class="box border">
							<img src="img/logo/dj.png" />
						</div>
						<div class="box border">
							<img src="img/logo/vt.png" />
						</div>
						<div class="box border">
							<img src="img/logo/bv.png" />
						</div>
					</li>
					
				</ul>
				<script>
					jQuery(document).ready(function ($) {
						$('.slideClient').bxSlider({
							mode: 'vertical',
							adaptiveHeight: true,
							auto: true
						});
						
					});
				</script>
			</div>
		</div>
	</div>

	<div id="contact" class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">				
				<img id="tiny-logo" u="image" alt="logo" src="img/logo/logo1.png" />
				<p style="font-weight: 100;margin-top: 30px;text-align: justify;font-size: 14px;">
					<?echo $lang['FOOTER_CONTENT']?>
				</p>		
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="section-heading ">
					<h2 class="h-bold"><?echo $lang['PROJECTS']?></h2>
					<div class="divider-header devider-top" style="background-color: rgb(0,146,142);height: 3px;  width: 22%;"></div>			
				</div>
				<?
							
				$sqlQuery="select * from tblnews where PUBLISH = 1 order by PUBLISH_DATE desc LIMIT 2";
				$query=mysql_query($sqlQuery);
				if(mysql_num_rows($query) == 0)
				{
					echo "<div style='margin:30px 0 30px 0;font-weight: 100;font-size: 14px;'>".$lang['NO_NEWS']."</div>";
				} else{
					while($row=mysql_fetch_array($query))
				{
				
				?>	
				<div class="clearfix">
					<div class="imageNew">
						<img src="<?echo str_replace('../','',$row['IMAGE_URL'])?>" alt=""/>
					</div>
					<div class="contentNew"> 
						<div class="titleNew">
							<?
							if($_SESSION['lang'] == 'vn'){
							?>
								<a href="new.php?id=<?echo $row['ID']?>"><? echo $row['TITLE'];?></a>
							<?}else{?>
								<a href="new.php?id=<?echo $row['ID']?>">	<? echo $row['TITLE_EN'];?></a>
							<?}?>
						</div>
						<div class="deviderNew"></div>
						<div class="detailNew">
							<?
								if($_SESSION['lang'] == 'vn'){
								
									$string = str_replace("../","",$row['CONTENT_BRIEF']);
									$array = explode(" ",$string);
									if(count($array) > 20){
     									 $string = implode(' ',array_slice($array, 0, 20)).'...';
     								}
									echo $string;
								}else{
									$string = str_replace("../","",$row['CONTENT_BRIEF_EN']);
									$array = explode(" ",$string);
									if(count($array) > 20){
     									 $string = implode(' ',array_slice($array, 0, 20)).'...';
     								}
									echo $string;
								}
							?>
						</div>
					</div>
				</div>
				<?
				}}
				mysql_close($conn);
				?>			
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="section-heading ">
					<h2 class="h-bold"><?echo $lang['CONTACT']?></h2>	
					<div class="divider-header devider-top" style="background-color: rgb(0,146,142);height: 3px;  width: 20%;"></div>		
				</div>	
				<div id="contact-wrapper" class="clearfix">						
					<form name="myForm" action="sendmail.php" method="post" onsubmit="return validateForm()">
					<div >
						<input type="text" class="text" name="name" >
						<label >Name*</label>
						<input type="text" class="text" name="email" >
						<label >Email*</label>
					</div>
					<div >
						<textarea name="message" ></textarea>
					</div>
					<div >
						<input type="submit" class="btn" name="add" value="<?echo $lang['SEND']?>">
					</div>
					
					</form>
				</div>				
			</div>
		</div>
	</div>
	<script>
		function validateForm(){
			var name = document.forms["myForm"]["name"].value;
			var email = document.forms["myForm"]["email"].value;
			var message = document.forms["myForm"]["message"].value;
		
			if (name == null || name == "") {
				alert("<? echo $lang['VALIDATION_NAME']?>");
				return false;
			}
		
			if (email == null || email == "") {
				alert("<? echo $lang['VALIDATION_EMAIL']?>");
				return false;
			}
		
			var atpos = email.indexOf("@");
    		var dotpos = email.lastIndexOf(".");
    		if (atpos < 1 || dotpos < atpos + 2 || dotpos+2 >= email.length){
    			alert("<? echo $lang['VALIDATION_EMAIL_FORMAT']?>");
    			return false;
    		} 
		
			if (message == null || message == "") {
				alert("<? echo $lang['VALIDATION_CONTENT']?>");
				return false;
			}
			return true;
		}
	</script>
</section>

<!-- footer -->
<section id="footer" class="container-fluid">
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 font-footer">
					<? echo $lang['ADDRESS1']?>
					<? echo $lang['ADDRESS2']?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 font-footer">
					<? echo $lang['ADDRESS3']?>					
					<? echo $lang['ADDRESS4']?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 menu-footer">
					<div>
						<ul class="nav navbar-nav navbar-right" >
							<li class="active"><a href="#intro"><?php echo $lang['HOME']; ?></a></li>
							<li><a href="#services" style="padding-right:0px;"><?php echo $lang['SERVICES']; ?></a></li>
						</ul>
					</div>
				</div>
				<!-- 
<div class="col-sm-6 col-xs-12">
				   <div style="float:left;width:40%">
						<a href="index.php" class="brand"><img u="image" alt="celadon" width="70%" src="img/logo/logo.png" /></a>
						
					</div>
					<div style="float:left;width:60%">
						<div class="footer-text" style="">CREATED BY K&V<br>COPYRIGHT ALL RIGHT RESERVED 2015</div>
					</div>
				</div>				 
				   <div class="col-sm-6 col-xs-0">
					  <div >
						<ul class="nav navbar-nav navbar-right" >
							<li class="active"><a href="#intro"><?php echo $lang['HOME']; ?></a></li>
							<li><a href="#services" style="padding-right:0px;"><?php echo $lang['SERVICES']; ?></a></li>
						</ul>
					  </div>
				  </div>
 -->
			</div>
		</div>
		<!-- /.container -->
	</nav>
</section> 
<!-- /footer -->