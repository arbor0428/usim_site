<?
include '../../module/class/class.DbCon.php';
include '../../module/class/class.Util.php';
include '../../module/class/class.Msg.php';

if($type == 'del'){
	$row = sqlRow("select * from ks_review where uid='".$uid."'");

	for($f=1; $f<=6; $f++){
		$n = sprintf('%02d',$f);
		$upfile = $row['upfile'.$n];
		if($upfile)	@unlink("../../upfile/review/".$upfile);
	}

	sqlExe("delete from ks_review where uid='".$uid."'");

	echo ("<script>parent.reg_list();</script>");
	exit;
}
?>