<?
	include "../common/connect.php";
?>
<?
	
	if(isset($_POST['change'])){
		$pass = $_POST['newPass'];
		
		$sql = "UPDATE tblusers SET password = '$pass' WHERE username = 'admin' ";

		$retval = mysql_query( $sql, $conn );
		if(! $retval ){
			die('Could not enter data: ' . mysql_error());
		}
	}
	
	mysql_close($conn);
	header('Location: passwords.php');
	exit;
?>