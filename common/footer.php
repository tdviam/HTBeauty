
	<div class="language">
		<?
			if(isset($_SESSION['username'])){
		?>		
			<a href="logout.php">Logout</a><a href="admin/index.php">Admin</a>
		<?	
			}
		?>
	
		<?if(isset($_GET["id"])){
			$id = $_GET['id'];
		?>
			<a href="?id=<?echo $id?>&lang=en" title="English">ENG</a><a href="?id=<?echo $id?>&lang=vn" title="Vietnamese">VIET</a>
		<?
		}else{
		?>
			<a href="?lang=en" title="English">ENG</a><a href="?lang=vn" title="Vietnamese">VIET</a>
		<?
		}
		?>
	</div>
	<ul class="nav pull-right scroll-top">
		<li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
	</ul>
	<!-- <footer>

	</footer>

    Core JavaScript Files -->
	
	<script src="js1/jquery.bxslider.js"></script>
	<script src="js1/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-3.2.0.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>
	
</body>

</html>