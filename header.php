<?
	include "/home/hanpass/www/module/login/head.php";
	include "/home/hanpass/www/module/class/class.DbCon.php";
	include "/home/hanpass/www/module/class/class.Util.php";
	include "/home/hanpass/www/module/class/class.Msg.php";
?>
<div class="wrap">
	<header class="header">
		<div class="h_top dp_f dp_c">
			<div class="h_center dp_sb dp_c">
				<div id="google_translate_element"></div>

				<h1 class="logo"><a class="dp_f dp_c" href="/" title="logo"><img src="/images/logo.svg" alt="logo"></a></h1>

				<!--모바일메뉴-->
				<div class="m-navWrap">
					<div class="bBg"><!--뒷배경--></div>
					<div class="m-navbox">	
						<h1 class="m_logo"><a href="" title="logo"><img src="/images/logo.svg" alt="logo"></a></h1>
						<ul class="m-nav">
							<li><a href="/sub01/joinPrice_step0.php" title="요금제가입">요금제가입</a></li>
							<li><a href="/sub02/sub01.php" title="유심구매">유심구매</a></li>
							<li><a href="/sub03/sub01.php" title="충전">충전</a></li>
							<li><a href="/sub04/sub01.php" title="이벤트">이벤트</a></li>
							<li><a href="/sub05/sub01.php" title="마이페이지">마이페이지</a></li>
							<li><a href="/sub06/sub01.php" title="고객센터">고객센터</a></li>
							<li><a href="/sub07/sub01.php" title="1:1 상담">1:1 상담</a></li>
						</ul>
						<div class="memberBtnWrap dp_f">
							<a class="dp_f dp_c dp_cc memberBtn blue01 c_w" href="/member/login.php" title="로그인">로그인</a>
							<a class="dp_f dp_c dp_cc memberBtn c_blue" href="/member/join1.php" title="회원가입">회원가입</a>
						</div>
					</div>
				</div>

				<!--모바일메뉴버튼-->
				<button type="button" id="btnFullMenu" class="m-btn">
					메인메뉴 열기
					<span class="bar_top"></span>
					<span class="bar_mid"></span>
					<span class="bar_bot"></span>
				</button>
			</div>
		</div>
		<div class="h_bot">
			<div class="h_center">
				<ul class="fav_menu dp_f">
					<li><a href="/sub01/joinPrice_step0.php" title="요금제가입">요금제가입</a></li>
					<li><a href="/sub02/sub01.php" title="유심구매">유심구매</a></li>
					<li><a href="/sub03/sub01.php" title="충전">충전</a></li>
					<li><a href="/sub04/sub01.php" title="이벤트">이벤트</a></li>
				</ul>
			</div>
		</div>
	</header>

	<div class="callBtn">
		<a class="dp_f dp_c dp_cc" href="" title="">
			<img src="/images/call.svg" alt="">
		</a>
	</div>



