<?
include "../../module/class/class.DbCon.php";

$_POST = sql_injection($_POST);

if($next_url == '/adm/shop/pointConfig.php'){
	$joinPoint = str_replace(',','',$_POST['joinPoint']);
	$reviewPoint = str_replace(',','',$_POST['reviewPoint']);
	$pointDelDay = $_POST['pointDelDay'];

	$sql = "update ks_shopConfig set joinPoint='$joinPoint', reviewPoint='$reviewPoint', pointDelDay='$pointDelDay'";
	sqlExe($sql);
}
?>