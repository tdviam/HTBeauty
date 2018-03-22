<?
	include "../common/connect.php"
?>
<?
	if(isset($_GET["id"])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	
	$sql_select = "SELECT * FROM tblimages where NEW_ID = $id";
	$query=mysql_query($sql_select);
	if(mysql_num_rows($query) != 0)
	{
		while($row=mysql_fetch_array($query))
		{
			unlink($row['URL']);
		}
	}
	
	$sql_images = "DELETE FROM tblimages where NEW_ID = $id";
	$retval = mysql_query( $sql_images, $conn );
	if(! $retval ){
		die('Could not enter data: ' . mysql_error());
	}
	
	$sql_comments = "DELETE FROM tblcomments where ID = $id";
	$retval = mysql_query( $sql_comments, $conn );
	if(! $retval ){
		die('Could not enter data: ' . mysql_error());
	}
	
	$sql_select1 = "SELECT * FROM tblnews where ID = $id";
	$query1=mysql_query($sql_select1);
	if(mysql_num_rows($query1) != 0)
	{
		while($row=mysql_fetch_array($query1))
		{
			unlink($row['IMAGE_URL']);
		}
	}
	
	$sql = "DELETE FROM tblnews where ID = $id";

	$retval = mysql_query( $sql, $conn );
	if(! $retval ){
		die('Could not enter data: ' . mysql_error());
	}
	
	mysql_close($conn);
	header('Location: index.php');
	exit;
?>

