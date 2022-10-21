<?
include '../../module/class/class.DbCon.php';
include '../../module/class/class.Util.php';
include '../../module/class/class.Msg.php';

if($type == 'write'){
	$title = addslashes(trim($_POST['title']));
	$ment = Util::TextAreaEncodeing($_POST['ment']);
	$userip = $_SERVER['REMOTE_ADDR'];
	$rDate = date('Y-m-d H:i:s');
	$rTime = time();

	$sql = "insert into ks_faq (title,ment,userip,rDate,rTime) values ('$title','$ment','$userip','$rDate','$rTime')"; 
	sqlExe($sql);


}elseif($type == 'edit'){
	$title = addslashes(trim($_POST['title']));
	$ment = Util::TextAreaEncodeing($_POST['ment']);

	$sql = "update ks_faq set ";
	$sql .= "title='$title', ";
	$sql .= "ment='$ment' ";
	$sql .= "where uid='$uid'";

	sqlExe($sql);


}elseif($type == 'del'){
	sqlExe("delete from ks_faq where uid='$uid'");

}
?>

<script>parent.reg_list();</script>