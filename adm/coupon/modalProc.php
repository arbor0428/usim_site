<?
include '../../module/class/class.DbCon.php';
include '../../module/class/class.Util.php';
include '../../module/class/class.Msg.php';

if($chk == '' || $cType == ''){
	exit;
}

$title = addslashes(trim($_POST['title']));

$price = str_replace(',','',$price);		//할인금액
$eTime = strtotime($_POST['eDate']) + 86399;	//사용기한

$orderNum = '';
$uDate = '';
$uTime = '';

$userip = $_SERVER['REMOTE_ADDR'];
$rDate = date('Y-m-d H:i:s');
$rTime = time();

$count = 0;

$a = 0;
$alimArr = Array();		//알림톡 발송용
$clientID = '';

//일반회원에서 발급
if($cType == 'user'){
	foreach($chk as $uid){
		$row = sqlRow("select * from ks_member where uid='".$uid."'");
		$userid = $row['userid'];

		$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
		$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
		sqlExe($sql);

		$count++;


		if($clientID)		$clientID .= ',';
		$clientID .= $userid;

		$alimArr[$a]['name'] = $row['name'];
		$alimArr[$a]['phone'] = $row['phone'];

		$a++;
	}


//주문관리에서 발급
}elseif($cType == 'orderList'){
	foreach($chk as $uid){
		$row = sqlRow("select * from ks_order where uid='".$uid."'");
		$userid = $row['userid'];

		$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
		$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
		sqlExe($sql);

		$count++;

		$row = sqlRow("select * from ks_member where userid='".$userid."'");

		if($clientID)		$clientID .= ',';
		$clientID .= $userid;

		$alimArr[$a]['name'] = $row['name'];
		$alimArr[$a]['phone'] = $row['phone'];

		$a++;
	}

//결제관리에서 발급
}elseif($cType == 'payment'){
	foreach($chk as $uid){
		$row = sqlRow("select * from ks_payment where uid='".$uid."'");
		$userid = $row['userid'];

		$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
		$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
		sqlExe($sql);

		$count++;

		$row = sqlRow("select * from ks_member where userid='".$userid."'");

		if($clientID)		$clientID .= ',';
		$clientID .= $userid;

		$alimArr[$a]['name'] = $row['name'];
		$alimArr[$a]['phone'] = $row['phone'];

		$a++;
	}
}

if(count($alimArr)){
	$talkType = 'coupon';
	$couponName = $title;

	include '../../module/kakao/alimtalk.php';
}
?>

<script>
parent.parent.modalClose();	//모달창 닫기
alert('<?=$count?> 건의 쿠폰이 발급 되었습니다.');
</script>