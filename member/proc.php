<?
include '../module/login/head.php';
include '../module/class/class.DbCon.php';
include '../module/class/class.Util.php';
include '../module/class/class.Msg.php';
include '../module/class/class.FileUpload.php';

$_POST = sql_injection($_POST);
$passwd = hash('sha256',trim($_POST['passwd']));
$loginDate = date('Y-m-d H:i:s');
$loginTime = time();
$uid = $_POST['uid'];
$emailcode = $_POST['emailcode'];


if($type == 'write'){

		//아이디 중복확인
		$errChk = Util::UserIdCheck($userid,'');		
		
		if($errChk){
			$msg = "사용할 수 없는 아이디입니다.";
			Msg::GblMsgBoxParent($msg);
			exit;
		}

		$phone = $phone01.$phone02.$phone03;
		if($receiveChk == 'on') $receiveChk = "y";
		$userip = $_SERVER['REMOTE_ADDR'];
		$rDate = date('Y-m-d H:i:s');
		$rTime = time();
	
		$sql = "insert into ks_member(mtype,status,userid,passwd,name,phone,email,receiveChk,rDate,rTime,userip) values ";
		$sql .= "('M','1','$userid','$passwd','$name','$phone','$userid','$receiveChk','$rDate','$rTime','$userip')";
		$result = mysql_query($sql);

		Msg::GblMsgBoxParent("가입이 완료되었습니다.","location.href='/member/login.php';");


} elseif($type == 'login'){
		
		$sql = "select * from ks_member where userid='$userid' and passwd='$passwd'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);

		if(!$num){
			Msg::GblMsgBoxParent("아이디와 비밀번호를 확인해주세요.");
		} else {
			$sql = "update ks_member set loginDate='$loginDate', loginTime='$loginTime' where userid='$userid'";
			$result = mysql_query($sql);

			Msg::goKorea("/index.php");
		}


}  elseif($type == 'randCodeChk'){
		
		$sql = "select * from ks_member where uid='$uid' and randCode='$emailcode'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);

		if(!$num){
			Msg::GblMsgBoxParent("인증코드가 맞지 않습니다.");
		} else {
			Msg::goKorea("./findIDPW_step04.php?uid=".$uid);
		}

} elseif($type == 'changePW'){
		
		$sql = "update ks_member set passwd='$passwd', randCode='' where uid='$uid'";
		
		$result = mysql_query($sql);

		Msg::goKorea ("./findIDPW_step05.php");
		

}

/*
elseif($type == 'edit'){

	$sql = "update ks_bangab2 set ";
	$sql .= "applicant_name='$applicant_name', ";
	$sql .= "applicant_bDate='$applicant_bDate', ";
	$sql .= "name='$name', ";
	$sql .= "bDate='$bDate', ";
	$sql .= "sex='$sex', ";
	$sql .= "mys_phone01='$mys_phone01', ";
	$sql .= "mys_phone02='$mys_phone02', ";
	$sql .= "mys_phone03='$mys_phone03', ";
	$sql .= "name2='$name2', ";
	$sql .= "gr_phone01='$gr_phone01', ";
	$sql .= "gr_phone02='$gr_phone02', ";
	$sql .= "gr_phone03='$gr_phone03', ";
	$sql .= "jiwon='$jiwon', ";
	$sql .= "zipcode='$zipcode', ";
	$sql .= "addr01='$addr01', ";
	$sql .= "addr02='$addr02', ";
	$sql .= "university='$university', ";
	$sql .= "major='$major', ";
	$sql .= "fn_name='$fn_name', ";
	$sql .= "bank_nm='$bank_nm', ";
	$sql .= "bank_ac='$bank_ac', ";

	if($upfile01){
	$sql .= "upfile01='$upfile01', ";
	$sql .= "realfile01='$realfile01', ";
	}
	if($upfile02){
		$sql .= "upfile02='$upfile02', ";
		$sql .= "realfile02='$realfile02', ";
	}
	if($upfile03){
		$sql .= "upfile03='$upfile03', ";
		$sql .= "realfile03='$realfile03', ";
	}
	if($upfile04){
		$sql .= "upfile04='$upfile04', ";
		$sql .= "realfile04='$realfile04', ";
	}
	if($upfile05){
		$sql .= "upfile05='$upfile05', ";
		$sql .= "realfile05='$realfile05', ";
	}
	if($upfile06){
		$sql .= "upfile06='$upfile06', ";
		$sql .= "realfile06='$realfile06', ";
	}
	if($upfile07){
		$sql .= "upfile07='$upfile07', ";
		$sql .= "realfile07='$realfile07', ";
	}
	if($upfile08){
		$sql .= "upfile08='$upfile08', ";
		$sql .= "realfile08='$realfile08', ";
	}
	if($upfile09){
		$sql .= "upfile09='$upfile09', ";
		$sql .= "realfile09='$realfile09', ";
	}

	$sql .= "progress='$progress', ";
	$sql .= "student_id='$student_id', ";
	$sql .= "memo='$memo' ";

	$sql .= "where uid=$uid";
	$result = mysql_query($sql);


	if($sub03=='1'){
?>
	<script>
		alert("수정이 완료되었습니다.");
		location.href="/sub03/sub03.php";
	</script>
<?
	} else {	

		Msg::GblMsgBoxParent("수정이 완료되었습니다.","location.href='/adm/bangab2/up_index.php';");
		exit;

	}

	exit;
	


}elseif($type == 'del'){
	$sql = "select * from ks_bangab2 where uid='$uid'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	for($i=1; $i<=$tot_num; $i++){
		$file_num = sprintf("%02d",$i);
		$del_file = $row["upfile".$file_num];

		if($del_file)	@unlink($UPLOAD_DIR."/".$del_file);
	}
			
	$sql = "delete from ks_bangab2 where uid='$uid'";
	$result = mysql_query($sql);

	Msg::goKorea("/adm/bangab2/up_index.php");
	exit;
		
}elseif($type == 'all_del'){

	for($k=0; $k<count($chk); $k++){
		$uid = $chk[$k];

		$sql = "select * from ks_bangab2 where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		for($i=1; $i<=$tot_num; $i++){
			$file_num = sprintf("%02d",$i);
			$del_file = $row["upfile".$file_num];

			if($del_file)	@unlink($UPLOAD_DIR."/".$del_file);
		}

			$sql = "delete from ks_bangab2 where uid='$uid'";
			$result = mysql_query($sql);
	}

	Msg::goKorea('/adm/');
	exit;
} elseif($type == 'self_del'){
	
	$sql = "select * from ks_bangab2 where uid='$uid'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	$applicant_name = $row['applicant_name'];
	$applicant_bDate = $row['applicant_bDate'];
	$name = $row['name'];
	$bDate = $row['bDate'];
	$mys_phone01 = $row['mys_phone01'];
	$mys_phone02 = $row['mys_phone02'];
	$mys_phone03 = $row['mys_phone03'];
	$name2 = $row['name2'];
	$gr_phone01 = $row['gr_phone01'];
	$gr_phone02 = $row['gr_phone02'];
	$gr_phone03 = $row['gr_phone03'];
	$jiwon = $row['jiwon'];
	$zipcode = $row['zipcode'];
	$addr01 = $row['addr01'];
	$addr02 = $row['addr02'];
	$university = $row['university'];
	$major = $row['major'];
	$fn_name = $row['fn_name'];
	$bank_nm = $row['bank_nm'];
	$bank_ac = $row['bank_ac'];
	$upfile01 = $row['upfile01'];
	$realfile01 = $row['realfile01'];
	$upfile02 = $row['upfile02'];
	$realfile02 = $row['realfile02'];
	$upfile03 = $row['upfile03'];
	$realfile03 = $row['realfile03'];
	$upfile04 = $row['upfile04'];
	$realfile04 = $row['realfile04'];
	$upfile05 = $row['upfile05'];
	$realfile05 = $row['realfile05'];
	$upfile06 = $row['upfile06'];
	$realfile06 = $row['realfile06'];
	$upfile07 = $row['upfile07'];
	$realfile07 = $row['realfile07'];
	$upfile08 = $row['upfile08'];
	$realfile08 = $row['realfile08'];
	$upfile09 = $row['upfile09'];
	$realfile09 = $row['realfile09'];
	$student_id = $row['student_id'];
	$memo = $row['memo'];
	$rDate = $row['rDate'];
	$rTime = $row['rTime'];

	for($i=1; $i<=$tot_num; $i++){
		$file_num = sprintf("%02d",$i);
		$del_file = $row["upfile".$file_num];

		if($del_file)	@unlink($UPLOAD_DIR."/".$del_file);
	}
	

	$userip = $_SERVER['REMOTE_ADDR'];
	$cDate = date('Y-m-d H:i:s');
	$cTime = time();

	$sql = "insert into ks_bangab2_del (applicant_name,applicant_bDate,name,bDate,mys_phone01,mys_phone02,mys_phone03,name2,gr_phone01,gr_phone02,gr_phone03,jiwon,zipcode,addr01,addr02,university,major,fn_name,bank_nm,bank_ac,upfile01,realfile01,upfile02,realfile02,upfile03,realfile03,upfile04,realfile04,upfile05,realfile05,upfile06,realfile06,upfile07,realfile07,upfile08,realfile08,upfile09,realfile09,student_id,rDate,rTime,cDate,cTime,userip,memo) values";
	$sql .= "('$applicant_name','$applicant_bDate','$name','$bDate','$mys_phone01','$mys_phone02','$mys_phone03','$name2','$gr_phone01','$gr_phone02','$gr_phone03','$jiwon','$zipcode','$addr01','$addr02','$university','$major','$fn_name','$bank_nm','$bank_ac','$upfile01','$realfile01','$upfile02','$realfile02','$upfile03','$realfile03','$upfile04','$realfile04','$upfile05','$realfile05','$upfile06','$realfile06','$upfile07','$realfile07','$upfile08','$realfile08','$upfile09','$realfile09','$student_id','$rDate','$rTime','$cDate','$cTime','$userip','$memo')";
	$result = mysql_query($sql);


	$sql = "delete from ks_bangab2 where uid='$uid'";
	$result = mysql_query($sql);


	Msg::GblMsgBoxParent("신청이 취소되었습니다.","location.href='/sub03/sub03.php';");

}
*/
?>