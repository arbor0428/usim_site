<?
	include '../class/class.DbCon.php';

	$userid = $_POST['userid'];
	$record_cnt = '100';

	if($userid != 'admin'){
		$sql = "select count(*) from ks_member where userid='$userid'";
		$result = mysql_query($sql);
		$record_cnt = mysql_result($result,0,0);
	}

	echo $record_cnt;
?>

