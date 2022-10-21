<?
include "../../module/class/class.DbCon.php";

$_POST = sql_injection($_POST);

if($next_url == '/adm/shop/DeliveryConfig.php'){
	$DeliveryName01 = addslashes(trim($_POST['DeliveryName01']));
	$DeliveryUrl01 = addslashes(trim($_POST['DeliveryUrl01']));
	$DeliveryName02 = addslashes(trim($_POST['DeliveryName02']));
	$DeliveryUrl02 = addslashes(trim($_POST['DeliveryUrl02']));
	$DeliveryName03 = addslashes(trim($_POST['DeliveryName03']));
	$DeliveryUrl03 = addslashes(trim($_POST['DeliveryUrl03']));

	$sql = "update ks_shopConfig set DeliveryName01='".$DeliveryName01."', DeliveryUrl01='".$DeliveryUrl01."', DeliveryName02='".$DeliveryName02."', DeliveryUrl02='".$DeliveryUrl02."', DeliveryName03='".$DeliveryName03."', DeliveryUrl03='".$DeliveryUrl03."'";
	sqlExe($sql);
}
?>