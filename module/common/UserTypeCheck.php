<?
	include '../class/class.DbCon.php';

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$addr01 = $_POST['addr01'];
	$addr02 = $_POST['addr02'];

	//악성고객확인
	$tmpChk = sqlRowOne("select * from ks_member where name='".$name."' and phone='".$phone."' and addr01='".$addr01."' and addr02='".$addr02."' and status='2'");
	echo $tmpChk;
?>