<?
include "../../module/class/class.DbCon.php";
include "../../module/class/class.Msg.php";
include "../../module/class/class.Util.php";
include '../../module/enc_func.php';

$type = trim($_POST['type']);

if($type == 'write' || $type == 'edit'){
	//���̵� �������� �� �ҹ���ó��
	$userid = strtolower(addslashes(trim($_POST['userid'])));
	$userid = str_replace(' ','',$userid);

	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);

	if($type == 'write'){
		$tmpChk = sqlRowOne("select count(*) from ks_member where userid='".$userid."'");

		//���Ե� ���̵� �ߺ�Ȯ�� �� ������ ���̵�� �ߺ�Ȯ��
		if($tmpChk > 0){
			$msg = "����� �� ���� ���̵��Դϴ�.";
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