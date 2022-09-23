<?
session_cache_limiter('');
session_start();
Header("p3p: CP=\"CAO DSP AND SO ON\" policyref=\"/w3c/p3p.xml\"");

//글로벌 변수 설정
$GBL_USERID	= strtolower($_SESSION['ses_member_id']);
$GBL_NAME	= $_SESSION['ses_member_name'];
$GBL_MTYPE = $_SESSION['ses_member_type'];
$GBL_PASSWORD = $_SESSION['ses_member_pwd'];

$SYSTEM_DATE = date('Y-m-d');

$strRoot = '../';
$boardRoot = '../board/';

?>

<!doctype html>
	<html lang="ko">
		<head>


			<?
				include "/home/hanpass/www/module/login/metaTag.php";
			?>
			

			<link rel="stylesheet" type="text/css" href="/css/reset.css?v=1">
			<link rel="stylesheet" type="text/css" href="/css/style.css?v=7">
			<link rel="stylesheet" type="text/css" href="/css/sub.css?v=3">
			<link rel="stylesheet" type="text/css" href="/css/mediaquery.css?v=12">

			<!-- Noto Sans KR -->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700;900&display=swap" rel="stylesheet">
			
			<!-- Custom styles for this page -->
			<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
			<!-- Bootstrap core JavaScript-->
			<script src="/vendor/jquery/jquery.min.js"></script>
			<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

			<link rel="stylesheet" type="text/css" href="/module/popupoverlay/popupoverlay.css">
			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.11.3.js"></script>	
			<script src="/module/js/common.js"></script>
			<script src="/module/popupoverlay/jquery.popupoverlay.js"></script>
			<script src="/module/js/jquery.easing.min.js"></script>
			<script src="/module/js/script.js"></script>
			
			<!-- <link type="text/css" href="http://jqueryui.com/latest/themes/base/ui.all.css" rel="stylesheet" />
			<script type="text/javascript" src="http://jqueryui.com/latest/ui/ui.core.js"></script>
			<script type="text/javascript" src="http://jqueryui.com/latest/ui/ui.slider.js"></script>
			<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
			<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->

			<!-- aos -->
			<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			
			<!-- font awesome -->
			<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

			<!-- slick 불러오기 -->
			<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
			<!--<script src="/js/slick.min.js"></script>-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
			
			<!--구글번역기-->
			<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css" />
			<script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.ko.82Lpf4DpmPI.O/d=1/exm=el_conf/ed=1/rs=AN8SPfrc5tgvdDNACcA-TQI3UyKfDTa79Q/m=el_main"></script>

			<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-142309327-1"></script>

			<!-- gsap 불러오기 -->
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

			<title>한패스모바일</title>

		</head>
	<body>