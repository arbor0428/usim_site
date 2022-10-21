<?
include "../../module/class/class.DbCon.php";
include "../../module/class/class.Msg.php";
include "../../module/class/class.Util.php";
include '../../module/enc_func.php';

$type = trim($_POST['type']);

if($type == 'write' || $type == 'edit'){
	//아이디 공백제거 및 소문자처리
	$userid = strtolower(addslashes(trim($_POST['userid'])));
	$userid = str_replace(' ','',$userid);

	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);

	if($type == 'write'){
		$tmpChk = sqlRowOne("select count(*) from ks_member where userid='".$userid."'");

		//가입된 아이디 중복확인 및 관리자 아이디와 중복확인
		if($tmpChk > 0){
			$msg = "사용할 수 없는 아이디입니다.";
			Msg::GblMsgBoxParent($msg);
			exit;
		}

		$passwd	= hash('sha256',trim($_POST['passwd']));

		$mtype = 'S';
		$userip = $_SERVER['REMOTE_ADDR'];
		$rDate = date('Y-m-d H:i:s');
		$rTime = time();
		$loginDate = '';
		$loginTime = '';

		$sql = "insert into ks_member (mtype,userid,passwd,name,phone,email,userip,rDate,rTime,loginDate,loginTime) values ";
		$sql .= "('$mtype','$userid','$passwd','$name','$phone','$email','$userip','$rDate','$rTime','$loginDate','$loginTime')";
		sqlExe($sql);


	}elseif($type == 'edit'){
		$sql = "update ks_member set ";
		$sql .= "name='$name',";
		$sql .= "phone='$phone',";

		if(trim($_POST['passwd'])){
			$passwd	= hash('sha256',trim($_POST['passwd']));
			$sql .= "passwd = '$passwd',";
		}

		$sql .= "email='$email'";
		$sql .= " where uid='".$uid."'";
		sqlExe($sql);
	}


}elseif($type == 'del'){
	$sql = "delete from ks_member where uid='$uid'";
	sqlExe($sql);


}
?>

<script>
top.location.href = '/adm/stylist/';
</script>