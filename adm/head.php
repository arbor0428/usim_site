<?
session_cache_limiter('');
session_start();
Header("p3p: CP=\"CAO DSP AND SO ON\" policyref=\"/w3c/p3p.xml\"");

//글로벌 변수 설정
$GBL_USERID	= $_SESSION['ses_member_id'];
$GBL_NAME	= $_SESSION['ses_member_name'];
$GBL_PASSWORD	= $_SESSION['ses_member_pwd'];
$GBL_MTYPE = $_SESSION['ses_member_type'];		//(A:최고관리자, M:회원)

$SYSTEM_DATE = date('Y-m-d');

include "/home/hanpass/www/module/class/class.DbCon.php";
include "/home/hanpass/www/module/class/class.Msg.php";
include "/home/hanpass/www/module/class/class.Util.php";
include '/home/hanpass/www/module/enc_func.php';
include '/home/hanpass/www/module/lib.php';

if($GBL_MTYPE == 'S'){
	if($_SERVER['PHP_SELF'] != '/adm/index.php' && $_SERVER['PHP_SELF'] != '/adm/orderList/index.php' && $_SERVER['PHP_SELF'] != '/adm/orderList/reMsg.php'){
		Msg::backMsg('접근오류');
		exit;
	}

}elseif($_SERVER['PHP_SELF'] != '/adm/index.php' && $GBL_MTYPE != 'A'){
	Msg::backMsg('접근오류');
	exit;
}

if($_SERVER['SERVER_PORT'] == '443'){
	$siteUrl = "https://".$_SERVER['HTTP_HOST'];
	$siteShortcut = "https://".$_SERVER['HTTP_HOST']."/images/sns_logo.png";
}else{
	$siteUrl = "http://".$_SERVER['HTTP_HOST'];
	$siteShortcut = "http://".$_SERVER['HTTP_HOST']."/images/sns_logo.png";
}
?>

<!doctype html>
	<html lang="ko">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<meta property="og:url" content="<?=$siteUrl?>">
		<meta property="og:title" content="한패스모바일">
		<meta property="og:type" content="website">
		<meta property="og:image" content="<?=$siteShortcut?>">
		<meta property="og:description" content="한패스모바일">

		<title>한패스모바일</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/adm/style.css?v=1.2" rel="stylesheet">


	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">


    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript-->
	<script src="/vendor/jquery/jquery.min.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Core plugin JavaScript-->
	<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>


	<!-- Ubuntu -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">


	<script src="/module/js/common.js?v=1.1"></script>
	<script src="/module/popupoverlay/jquery.popupoverlay.js"></script>
	<link href="/module/popupoverlay/popupoverlay.css" rel="stylesheet">

	<link type='text/css' rel='stylesheet' href='/module/js/placeholder.css?v=1'><!-- 웹킷브라우져용 -->
	<script src="/module/js/jquery.placeholder.js"></script><!-- placeholder 태그처리용 -->
	<link rel="stylesheet" type="text/css" href="/css/button.css?v=1.2">