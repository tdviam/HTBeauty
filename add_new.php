<? include 'header.php' 
 
?>
<script>
	function validateForm() {
		
		
		var fileToUpload = document.forms["myForm"]["fileToUpload"].value;
		
		
		return true;
    }
    
</script>
<article class="module width_full">
<header><h3>Files</h3></header>
	<form name="myForm" action="do_add_new.php" enctype="multipart/form-data" method="post" onsubmit="return validateForm();">
		<div class="module_content">
				
				<fieldset>
					<label>Upload file</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</fieldset>
				
		</div>
		<footer>
			<div class="submit_link">
				
				<input type="submit" value="Publish" name="add" class="alt_btn">
				<input type="reset" value="Reset">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->

<? include 'footer.php' ?>