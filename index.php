<? include 'header.php' ?>	
<article class="module width_full">
<header><h3 class="tabs_involved">Quản trị bài viết</h3>

</header>

<div class="tab_container">
	<div id="tab1" class="tab_content">
		<table class="tablesorter" cellspacing="0"> 
		<thead> 
			<tr> 
				<th>ID</th>     				
				<th>Email</th> 
				 
				<th>Tổng giá</th>
			</tr> 
		</thead> 
		<tbody> 
			<?php
				$num_rec_per_page=10;
			
				$conn = new mysqli("localhost", "root", "", "htbeauty");
				if ($conn->connect_error) {
  					echo 'loi';
				}
				mysqli_set_charset($conn, 'UTF8');
				if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
				$start_from = ($page-1) * $num_rec_per_page; 
		
				$sql="select * from tblproducts LIMIT $start_from, $num_rec_per_page ";
				//$query=mysql_query($sql);
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc())
				{
						
			?>	
			<tr >
				<td><?echo  $row['ID']?></td> 
				<td><?echo $row['email']?></td> 
				
				<td><?echo $row['fee'] ?></td> 
			</tr> 
			<?
				}
				
			?>
		</tbody> 
		</table>
	
	</div><!-- end of #tab1 -->
		
</div><!-- end of .tab_container -->

</article><!-- end of content manager article -->

<div class="clear"></div>
<? include 'footer.php' ?>	