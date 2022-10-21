<?
include "../../module/class/class.DbCon.php";

$_POST = sql_injection($_POST);

if($next_url == '/adm/shop/PrivacyConfig.php'){
	$PrivacyMail = $_POST['PrivacyMail'];

	$sql = "update ks_shopConfig set PrivacyMail='".$PrivacyMail."'";
	sqlExe($sql);
}
?>