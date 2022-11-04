<?
include "../../module/class/class.DbCon.php";
include "../../module/class/class.Msg.php";
include "../../module/class/class.Util.php";
include '../../module/enc_func.php';



$type = trim($_POST['type']);


if($type == 'edit'){
	$status = trim($_POST['status']);
	$level = trim($_POST['level']);	
	$gender = trim($_POST['gender']);
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$zipcode = trim($_POST['zipcode']);
	$addr01 = trim($_POST['addr01']);
	$addr02 = trim($_POST['addr02']);
	$email = trim($_POST['email']);
	$bDate = trim($_POST['bDate']);
	$bTime = strtotime($bDate);
	$rCode = trim($_POST['rCode']);
	$receiveChk = trim($_POST['receiveChk']);

	//추천인 아이디 확인
	if($rCode){
		$tmpChk = sqlRowOne("select count(*) from ks_member where userid='".$rCode."'");

		if($tmpChk == 0){
			$msg = "추천인 아이디를 찾을 수 없습니다.";
			Msg::onlyMsg($msg);
			exit;
		}
	}

	$sql = "update ks_member set ";
	$sql .= "status='$status',";
	$sql .= "level='$level',";
	$sql .= "gender='$gender',";
	$sql .= "name='$name',";
	$sql .= "phone='$phone',";

	if(trim($_POST['passwd'])){
		$passwd	= hash('sha256',trim($_POST['passwd']));
		$sql .= "passwd = '$passwd',";
	}

	$sql .= "zipcode='$zipcode',";
	$sql .= "addr01='$addr01',";
	$sql .= "addr02='$addr02',";
	$sql .= "email='$email',";
	$sql .= "bDate='$bDate',";
	$sql .= "bTime='$bTime',";
	$sql .= "rCode='$rCode',";
	$sql .= "receiveChk='$receiveChk'";	
	$sql .= " where uid='".$uid."'";
	sqlExe($sql);

	echo ("<script>parent.parent.searchChk();</script>");


}elseif($type == 'del'){
	$userid = sqlRowOne("select userid from ks_member where uid='".$uid."'");

	sqlExe("delete from ks_member where uid='".$uid."'");
	sqlExe("delete from ks_login_log where userid='".$userid."'");
	sqlExe("delete from ks_payment where userid='".$userid."'");
	sqlExe("delete from ks_pointList where userid='".$userid."'");
	sqlExe("delete from ks_coupon where userid='".$userid."'");
	


	echo ("<script>parent.parent.searchChk();</script>");
}
?>