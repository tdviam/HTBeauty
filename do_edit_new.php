<?
	include "../common/connect.php";
?>
<?
	$target_dir = "../img/news/";
	$target_file = "";
	$uploadOk = 1;
	
	if(basename($_FILES["fileToUpload"]["name"]) != ""){
		$uploadOk = 1;
	}else{
		$uploadOk = 0;
	}
	
	if(	$uploadOk == 1){
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
   	}
	
	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$title_en = $_POST['title_en'];
		$brief_content = $_POST['brief_content'];
		$brief_content_en = $_POST['brief_content_en'];
		$content = $_POST['content'];
		$content_en = $_POST['content_en'];
		$publish = $_POST['publish'];
		$type = $_POST['service'];
		
		$sql1 = "UPDATE tblnews ".
		   		"SET TITLE = '$title', TITLE_EN = '$title_en', CONTENT_BRIEF = '$brief_content',".
				"CONTENT_BRIEF_EN = '$brief_content_en', CONTENT = '$content', CONTENT_EN = '$content_en',".
				"PUBLISH_DATE= NOW(), PUBLISH=$publish, NEW_TYPE = '$type' ";

		$sql1 = $sql1 . " WHERE ID = $id";

		$retval = mysql_query( $sql1, $conn );
		if(! $retval ){
			die('Could not enter data: ' . mysql_error());
		}
	}
	
	mysql_close($conn);
	header('Location: index.php');
	exit;
?>