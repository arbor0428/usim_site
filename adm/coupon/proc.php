<?
include '../../module/class/class.DbCon.php';
include '../../module/class/class.Util.php';
include '../../module/class/class.Msg.php';


if($type == 'write' || $type == 'edit'){	
	$title = addslashes(trim($_POST['title']));

	$price = str_replace(',','',$price);		//할인금액
	$eTime = strtotime($_POST['eDate']) + 86399;	//사용기한

	if($type == 'write'){
		$userid = $_POST['userid'];
		$orderNum = '';
		$uDate = '';
		$uTime = '';

		$userip = $_SERVER['REMOTE_ADDR'];
		$rDate = date('Y-m-d H:i:s');
		$rTime = time();

		$a = 0;
		$alimArr = Array();		//알림톡 발송용
		$clientID = '';

		if($userid){
			$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
			$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
			sqlExe($sql);

			$clientID = $userid;
			$row = sqlRow("select * from ks_member where userid='".$userid."'");

			$alimArr[$a]['name'] = $row['name'];
			$alimArr[$a]['phone'] = $row['phone'];

		//전체회원
		}else{
			$row = sqlArray("select * from ks_member where mtype='M' and status='1' order by uid desc");
			foreach($row as $k => $v){
				$userid = $v['userid'];

				$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
				$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
				sqlExe($sql);

				if($clientID)		$clientID .= ',';
				$clientID .= $userid;

				$alimArr[$a]['name'] = $v['name'];
				$alimArr[$a]['phone'] = $v['phone'];

				$a++;
			}
		}

		if(count($alimArr)){
			$talkType = 'coupon';
			$couponName = $title;

			include '../../module/kakao/alimtalk.php';
		}

		Msg::GblMsgBoxParent("등록되었습니다.","location.href='".$next_url."';");
		exit;



	}elseif($type == 'edit'){
		$sql = "update ks_coupon set ";
		$sql .= "title='$title', ";
		$sql .= "price='$price', ";
		$sql .= "eDate='$eDate', ";
		$sql .= "eTime='$eTime' ";
		$sql .= " where uid=$uid";
		sqlExe($sql);

		Msg::GblMsgBoxParent("수정되었습니다.","javascript:parent.reg_list();");
		exit;
	}



}elseif($type == 'del'){
	sqlExe("delete from ks_coupon where uid='".$uid."'");

	echo ("<script>parent.reg_list();</script>");
	exit;
}
?>