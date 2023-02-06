<?
	include "../module/class/class.DbCon.php";
	include "../module/class/class.Util.php";
	include "../module/class/class.Msg.php";


	if($ment)		$ment = Util::TextAreaEncodeing($ment);
	
	$uid = $_GET['uid'];

	$userip = $_SERVER['REMOTE_ADDR'];
	$rDate = date('Y-m-d H:i:s');
	$rTime = mktime();
	
	$randCode = Util::randCode(6);


	$query = "update ks_member set randCode='$randCode' where uid='$uid'";
	$result = mysql_query($query);


	include'email.php';


	Msg::goMsg('인증코드가 전송되었습니다.','findIDPW_step03.php?uid='.$uid);
?>

