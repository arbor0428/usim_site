<?
	include 'head.php';

	if($GBL_MTYPE == 'A'){
		header('Location: /adm/user/');

	}elseif($GBL_MTYPE == 'S'){
		header('Location: /adm/orderList/');

	}else{
		include 'login.php';	//로그인 페이지
	}
?>