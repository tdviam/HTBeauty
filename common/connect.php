<?
debug_backtrace() || die("Direct access not permitted");
?>
<?

$conn=mysql_connect("localhost", "root") or die("can't connect database");
//$conn=mysql_connect("127.3.165.2", "adminJ4mgzwp","IEtk19Phh6Fe") or die("can't connect database");
//$conn=mysql_connect("112.213.89.107", "celadon","123456789") or die("can't connect database");
mysql_select_db("htbeauty",$conn);
mysql_set_charset('utf8', $conn);
?>