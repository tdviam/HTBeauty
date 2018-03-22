<?
	include "common/connect.php";
?>
<?
	$sql="select max(ID) as max_id from tblnews";
	$query = mysql_query($sql); //run the query

	$row=mysql_fetch_row($query);
	$max_id = $row[0]+1;

	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$uploadOk = 1;
	} else {
		$uploadOk = 0;
   	}
	
	if($uploadOk == 0){
		echo $_FILES["fileToUpload"]["name"]." was uploaded FAIL.";
	} else {
	
		if(isset($_POST['add'])){
			$title = ($_POST['title']);
			$title_en = ($_POST['title_en']);
			$brief_content = ($_POST['brief_content']);
			$brief_content_en = ($_POST['brief_content_en']);
			$content = ($_POST['content']);
			$content_en = ($_POST['content_en']);
			$publish = ($_POST['publish']);
			$type = ($_POST['service']);
			
			if($title_en == ''){
				$title_en = $title;
			}
			
			if($brief_content_en == ''){
				$brief_content_en = $brief_content;
			}
			
			if($content_en == ''){
				$content_en = $content;
			}

			$sql = "INSERT INTO tblNews ".
				   "(ID, TITLE, TITLE_EN, CONTENT_BRIEF, CONTENT_BRIEF_EN, CONTENT, CONTENT_EN, PUBLISH_DATE, PUBLISH, NEW_TYPE, IMAGE_URL) ".
				   "VALUES($max_id, '$title', '$title_en', '$brief_content', '$brief_content_en', '$content', '$content_en', NOW() ,$publish,$type, '$target_file')";

			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not enter data: ' . mysql_error());
			}
			mysql_close($conn);
			header('Location: index.php');
			exit;
		}
	}	
?>
