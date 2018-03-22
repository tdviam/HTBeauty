<? include 'header.php' ?>
<script>
	function validateForm() {
		CKEDITOR.instances.brief.updateElement();
		CKEDITOR.instances.content.updateElement();
		CKEDITOR.instances.brief_en.updateElement();
		CKEDITOR.instances.content_en.updateElement();
	
		var title = document.forms["myForm"]["title"].value;
		var title_en = document.forms["myForm"]["title_en"].value;
		var brief_content = document.forms["myForm"]["brief_content"].value;
		var brief_content_en = document.forms["myForm"]["brief_content_en"].value;
		var content = document.forms["myForm"]["content"].value;
		var content_en = document.forms["myForm"]["content_en"].value;
		
		var fileToUpload = document.forms["myForm"]["fileToUpload"].value;
		
		if (title == null || title == "") {
			alert("Title must be filled out");
			document.forms["myForm"]["title"].focus();
			return false;
		}
		
		if (brief_content == null || brief_content == "") {
			alert("Brief content must be filled out");
			return false;
		}
		
		if (content == null || content == "") {
			alert("Content must be filled out");
			return false;
		}
		
		return true;
    }
    
    function checkRadio(){
	    var radios = document.forms["myForm"]["service"];
		var value;
		for (var i = 0; i < radios.length; i++) {
    		if (radios[i].checked) {
        		return true;
        		break;      
    		}
		}
		
		return false;
    }
</script>
 <script src="./js/ckeditor/ckeditor.js"></script>
<article class="module width_full">
<header><h3>Bài viết mới</h3></header>
	<form name="myForm" action="do_add_new.php" enctype="multipart/form-data" method="post" onsubmit="return validateForm();">
		<div class="module_content">
				<fieldset>
					<label>Tiêu đề&nbsp;<span style="color:RED;">*</span></label>
					<input type="text" name="title" value=''>
				</fieldset>
				<fieldset>
					<label>Tiêu đề Tiếng Anh&nbsp;(Optional)</label>
					<input type="text" name="title_en" value=''>
				</fieldset>
				<fieldset>
					<label style="float: none;">Nội dung tóm tắt&nbsp;<span style="color:RED;">*</span></label>
					<textarea rows="10" id="brief" name="brief_content"></textarea>
				</fieldset>
				<fieldset>
					<label style="float: none;width:280px;">Nội dung tóm tắt Tiếng Anh&nbsp;(Optional)</label>
					<textarea rows="10" id="brief_en" name="brief_content_en"></textarea>
				</fieldset>
				<fieldset>
					<label style="float: none;">Nội dung chính&nbsp;<span style="color:RED;">*</span></label>
					<textarea name="content" id="content" rows="10" cols="80">
					</textarea>
				</fieldset>
				<fieldset>
					<label style="float: none;width:280px;">Nội dung chính Tiếng Anh&nbsp;(Optional)</label>
					<textarea name="content_en" id="content_en" rows="10" cols="80">
					</textarea>
					<input type="hidden" name="service" value="1" >
				</fieldset>
				<!-- 
<fieldset>
					<label>Service type</label>
					<label class="radio-inline"><input type="radio" name="service" value="1">Marketing</label>
					<label class="radio-inline"><input type="radio" name="service" value="2">Communication</label>
					<label class="radio-inline"><input type="radio" name="service" value="3">Event</label>
				</fieldset>
 -->
				<fieldset>
					<label>Ảnh minh hoạ</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</fieldset>
				<script>
					
					CKEDITOR.replace('brief');
					CKEDITOR.replace('content');
					CKEDITOR.replace('brief_en');
					CKEDITOR.replace('content_en');
					
					CKEDITOR.config.extraPlugins = 'justify';
				</script>
		</div>
		<footer>
			<div class="submit_link">
				<select name="publish">
					<option value="0">Draft</option>
					<option value="1">Published</option>
				</select>
				<input type="submit" value="Publish" name="add" class="alt_btn">
				<input type="reset" value="Reset">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->

<? include 'footer.php' ?>