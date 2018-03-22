<? include 'header.php' ?>
<?
	$sql="select * from tblusers where username = 'admin'";
	$rs_result = mysql_query($sql); //run the query
	$pass = "";			
	while($row=mysql_fetch_array($rs_result)){
		$pass = $row['password'];
	}
	
?>
<script>
	function validateForm() {
		
		var oldPass = document.forms["myForm"]["oldPass"].value;
		var newPass = document.forms["myForm"]["newPass"].value;
		var pass = '<?echo $pass?>';
		if (oldPass == "") {
			alert("Hãy nhập mật khẩu cũ!");
			return false;
		}
		
		if (newPass == "") {
			alert("Hãy nhập mật khẩu mới!");
			return false;
		}
		
		if(oldPass != pass){
			alert("Mật khẩu cũ không đúng!");
			return false;
		}
		
		alert("Mật khẩu đã được đổi thành công!");
		return true;
    }
   
</script>
 <script src="./js/ckeditor/ckeditor.js"></script>
<article class="module width_full">
<header><h3>Quản lý mật khẩu</h3></header>
	<form name="myForm" action="do_change_password.php" method="post" onsubmit="return validateForm();">
		<div class="module_content">
				<fieldset>
					<label>Mật khẩu cũ</label>
					<input type="password" name="oldPass" id="oldPass"/>
				</fieldset>
				<fieldset>
					<label>Mật khẩu mới</label>
					<input type="password" name="newPass" id="newPass"/>
				</fieldset>
		</div>
		<footer>
			<div class="submit_link">
				
				<input type="submit" value="Submit" name="change" class="alt_btn">
				<input type="reset" value="Reset">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->
<div class="clear"></div>
<? include 'footer.php' ?>