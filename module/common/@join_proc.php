<?
include '../login/head.php';
include '../class/class.DbCon.php';
include '../class/class.Msg.php';

$_POST = sql_injection($_POST);
$userid = $_POST['userid'];

if($type == 'write'){
	$sql = "select count(*) from tb_member where userid='$userid'";
	$result = mysql_query($sql);
	$record_cnt = mysql_result($result,0,0);


	//가입된 아이디 중복확인 및 관리자 아이디와 중복확인
	if($record_cnt > 0){
		$msg = "사용할 수 없는 아이디입니다.";
		Msg::GblMsgBoxParent($msg);
		exit;
	}

	$mtype = '';
	$status = '';
	$pwd = $_POST['pwd'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile01 = $_POST['mobile01'];
	$mobile02 = $_POST['mobile02'];
	$mobile03 = $_POST['mobile03'];
	$bDate = $_POST['bDate'];
	$bArr = explode('-',$bDate);
	$bTime = mktime(0,0,0,$bArr[1],$bArr[2],$bArr[0]);
	$userip = $_SERVER[REMOTE_ADDR];
	$rDate = date('Y-m-d H:i:s');
	$rTime = mktime();

	$locList = '';
	for($i=0; $i<count($cList); $i++){
		if($locList)	$locList .= ',';
		$locList .= $cList[$i];
	}

	$sql = "insert into tb_member (mtype,status,userid,pwd,name,email,mobile01,mobile02,mobile03,bDate,bTime,locList,userip,rDate,rTime) values ";
	$sql .= "('$mtype','$status','$userid','$pwd','$name','$email','$mobile01','$mobile02','$mobile03','$bDate','$bTime','$locList','$userip','$rDate','$rTime')";
	$result = mysql_query($sql);

	Msg::goKorea('/join_ok.php');
	exit;
}
?>