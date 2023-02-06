<?
	include './class/class.DbCon.php';
	include './class/class.Util.php';
	include './enc_func.php';

	$f_mobile = trim($_POST['f_mobile']);

	$qMent = "where phone='$f_mobile'";
	$row = sqlRow("select * from ks_member $qMent");

	//비밀번호 초기화 및 메일발송
	if($row){
		echo 'ok';
	}
?>