<?
	include 'header.php';
?>

<div class="fixed-bnr">
	<ul class="fixed-menu dp_f dp_c dp_sb">
		<li>
			<a class="dp_f dp_cc dp_fc" href="/" title="">
				<img src="./images/home.svg" alt="home">
				<p>HOME</p>
			</a>
		</li>
		<li>
			<a class="dp_f dp_cc dp_fc" href="/sub05/sub01.php" title="">
				<img src="./images/mypage.svg" alt="마이페이지">
				<p>마이페이지</p>
			</a>
		</li>
		<li>
			<a class="dp_f dp_cc dp_fc" href="/sub06/sub01.php" title="">
				<img src="./images/phone.svg" alt="고객센터">
				<p>고객센터</p>
			</a>
		</li>
		<li>
			<a class="dp_f dp_cc dp_fc" href="/sub07/sub01.php" title="">
				<img src="./images/message.svg" alt="1:1 문의">
				<p>1:1 문의</p>
			</a>
		</li>
	</ul>
</div>

<div class="container">
	<section class="sec01">
		<div class="c_center">
			<div class="slickslider">
				<div class="slickBox">
					<div class="slickImg"><img src="./images/event1.jpg" alt=""></div>
				</div>
				<div class="slickBox">
					<div class="slickImg"><img src="./images/event2.jpg" alt=""></div>
				</div>
			</div>
			<div class="v_twoBtn dp_sb">
				<a class="gry03 c_w dp_f dp_c dp_cc" href="/sub01/sub01.php" title="">유심칩이 없어요</a>
				<a class="gradient c_w dp_f dp_c dp_cc" href="/sub02/sub01.php" title="../member/joinPrice_step1.php">유심침을 가지고 있어요</a>
			</div>
		</div>
		<script>
			$('.slickslider').slick({ 
				infinite : true, 
				autoplay : true,			// 자동 스크롤 사용 여부
				autoplaySpeed : 3000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
				arrows : false,
				dots:true,
				fade: true,
			});
		</script>
	</section>
	<section class="sec02 gry01">
		<div class="c_center">
			<h3 class="sub_tit bold2 c_blk">
				베스트요금제
				<span class="regular c_gry">많은 고객들이 가입한 최고 인기 요금제를 제안합니다!</span>
			</h3>
			<div class="slickslider02">
				<div class="whtBox">
					<div class="whtInner whtBox_top dp_sb dp_c">
						<div class="dp_f dp_c">
							<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
							<p class="pay_tit bold2">요금제명 - 티티고 플러스</p>
						</div>
						<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
					</div>
					<div class="whtInner threeBox dp_sb">
						<div class="sBox blue02">
							<p class="sDet01 c_blk">데이터</p>
							<p class="sDet02 bold2 c_blk">15GB</p>
							<span class="sDet03 c_gry">(+3Mbps 무제한)</span>
						</div>
						<div class="sBox blue03">
							<p class="sDet01 c_blk">음성통화</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
							<span class="sDet03 c_gry">(영상부가 +300분)</span>
						</div>
						<div class="sBox gry01">
							<p class="sDet01 c_blk">SMS</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
						</div>
					</div>
					<div class="whtInner">
						<div class="condition">
							<div class="condi_scroll">
								<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. </p>
							</div>
						</div>
					</div>
					<div class="whtInner whtBox_bot blue01">
						<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
							<p class="monPrice c_w">월요금<span class="c_w">36,300원</span></p>
							<div class="discount dp_f dp_c">
								<span class="disc01 c_w bold2">20%↓</span>
								<span class="disc02 c_w bold2">월 29,000원</span>
								<span class="lnr lnr-chevron-right c_w"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="whtBox">
					<div class="whtInner whtBox_top dp_sb dp_c">
						<div class="dp_f dp_c">
							<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
							<p class="pay_tit bold2">요금제명 - 티티고 플러스</p>
						</div>
						<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
					</div>
					<div class="whtInner threeBox dp_sb">
						<div class="sBox blue02">
							<p class="sDet01 c_blk">데이터</p>
							<p class="sDet02 bold2 c_blk">15GB</p>
							<span class="sDet03 c_gry">(+3Mbps 무제한)</span>
						</div>
						<div class="sBox blue03">
							<p class="sDet01 c_blk">음성통화</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
							<span class="sDet03 c_gry">(영상부가 +300분)</span>
						</div>
						<div class="sBox gry01">
							<p class="sDet01 c_blk">SMS</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
						</div>
					</div>
					<div class="whtInner">
						<div class="condition">
							<div class="condi_scroll">
								<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다.</p>
							</div>
						</div>
					</div>
					<div class="whtInner whtBox_bot blue01">
						<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
							<p class="monPrice c_w">월요금<span class="c_w">36,300원</span></p>
							<div class="discount dp_f dp_c">
								<span class="disc01 c_w bold2">20%↓</span>
								<span class="disc02 c_w bold2">월 29,000원</span>
								<span class="lnr lnr-chevron-right c_w"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="whtBox">
					<div class="whtInner whtBox_top dp_sb dp_c">
						<div class="dp_f dp_c">
							<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
							<p class="pay_tit bold2">요금제명 - 티티고 플러스</p>
						</div>
						<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
					</div>
					<div class="whtInner threeBox dp_sb">
						<div class="sBox blue02">
							<p class="sDet01 c_blk">데이터</p>
							<p class="sDet02 bold2 c_blk">15GB</p>
							<span class="sDet03 c_gry">(+3Mbps 무제한)</span>
						</div>
						<div class="sBox blue03">
							<p class="sDet01 c_blk">음성통화</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
							<span class="sDet03 c_gry">(영상부가 +300분)</span>
						</div>
						<div class="sBox gry01">
							<p class="sDet01 c_blk">SMS</p>
							<p class="sDet02 bold2 c_blk">무제한</p>
						</div>
					</div>
					<div class="whtInner">
						<div class="condition">
							<div class="condi_scroll">
								<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다.</p>
							</div>
						</div>
					</div>
					<div class="whtInner whtBox_bot blue01">
						<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
							<p class="monPrice c_w">월요금<span class="c_w">36,300원</span></p>
							<div class="discount dp_f dp_c">
								<span class="disc01 c_w bold2">20%↓</span>
								<span class="disc02 c_w bold2">월 29,000원</span>
								<span class="lnr lnr-chevron-right c_w"></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('.slickslider02').slick({ 
				infinite : true, 
				autoplay : false,			// 자동 스크롤 사용 여부
				arrows : true,
				dots: false,
				fade: false,
			});
		</script>
	</section>
	<section class="sec03" id="secMove01">
		<div class="c_center">
			<div class="whtBox">
				<h3 class="sub_tit bold2 c_blk">
					내게 맞는 요금제 찾기
					<span class="regular c_gry">쓰던 폰 그대로 유심만 바꾸세요.</span>
				</h3>
				<div class="whtInner payBtnWrap dp_sb">
					<label class="dp_sb dp_c dp_cc" for="m_box1_1"><input type="radio" name='m_box1' id="m_box1_1" onclick="m_box1(this.name,0);">선불</label>
					<label class="dp_sb dp_c dp_cc" for="m_box1_2"><input type="radio" name='m_box1' id="m_box1_2" onclick="m_box1(this.name,1);">후불</label>
				</div>
				<div class="slider-cont">
					<p class="slider_tit">월 기본 요금</p>
					<input id="ser01" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-value="[0, 400]" data-slider-lock-to-ticks="true"/>
					<ul class="slidebar_tit dp_sb">
						<li class="txt-c">~5천원</li>
						<li class="txt-c">~10,000원</li>
						<li class="txt-c">~20,000원</li>
						<li class="txt-c">~30,000원</li>
						<li class="txt-c">30,000원<br>이상</li>
					</ul>
				</div>
				<div class="slider-cont">
					<p class="slider_tit">월 데이터</p>
					<input id="ser02" type="text" data-slider-ticks="[0, 100, 200, 300, 400, 500]" data-slider-value="[0, 500]" data-slider-lock-to-ticks="true"/>
					<ul class="slidebar_tit dp_sb widdif">
						<li class="txt-c">1GB<br> 미만</li>
						<li class="txt-c">1~2GB</li>
						<li class="txt-c">2~5GB</li>
						<li class="txt-c">5~10GB</li>
						<li class="txt-c">10GB<br>이상</li>
						<li class="txt-c">무제한</li>
					</ul>
				</div>
				<div class="slider-cont">
					<p class="slider_tit">월 통화량</p>
					<input id="ser03" type="text" data-slider-ticks="[0, 100, 200, 300, 400, 500]" data-slider-value="[0, 500]" data-slider-lock-to-ticks="true"/>
					<ul class="slidebar_tit dp_sb widdif">
						<li class="txt-c">0</li>
						<li class="txt-c">100분</li>
						<li class="txt-c">200분</li>
						<li class="txt-c">300분</li>
						<li class="txt-c">400분</li>
						<li class="txt-c">무제한</li>
					</ul>
				</div>
				<a class="moreBtn" href="" title="조회하기">조회하기</a>
			</div>
		</div>
		<script src="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/bootstrap-slider.js"></script>
		<link href="https://www.jqueryscript.net/demo/Highly-Customizable-Range-Slider-Plugin-For-Bootstrap-Bootstrap-Slider/dist/css/bootstrap-slider.css" rel="stylesheet" type="text/css">

		<style>
			.slider .tooltip.top {display: none;}
			.slider-track {
				background-image: none;
				background-color: #ddd;
				border-radius: 0;
			}
			.slider-handle {
				background-image: none;
				box-shadow: 0;
				border: 1px solid #959CA9;
				background-color: #fff;
				width: 35px;
				height: 35px;
			}
			.slider-selection {
				background: #1A6ECA;
				border-radius: 0;
			}
			.slider-selection.tick-slider-selection {
				background-image: none;
				background-color: #1A6ECA;
			}
			.slider.slider-horizontal {margin: 0 auto; width: 90%; display: block !important;}
			.slider.slider-horizontal .slider-tick {
				margin-top: 0;
				height: 10px;
				width:2px;
				margin-left: 0 !important;
				background-color: #fff;
				background-image: none;
				box-shadow: none;
			}
			.slider.slider-horizontal .slider-handle {
				margin-top: -16px;
			}
			.slider.slider-horizontal .slider-tick, .slider.slider-horizontal .slider-handle {
				margin-left: -12px;
			}
			.slider.slider-horizontal .slider-tick.round {
				border-radius: 0;
			}
			.slider-track-low, .slider-track-high {
				border-radius: 0;
			}
			@media (max-width:540px) { 
				.slider.slider-horizontal .slider-track {
					height: 5px;
				}
				.slider-handle {
					width: 20px;
					height: 20px;
				}
				.slider.slider-horizontal .slider-handle {
					margin-top: -8px;
				}
			}
		</style>
		<script>
			$("#ser01").slider({
				value: [0, 400],
				ticks: [0, 100, 200, 300, 400],
				lock_to_ticks: true
			});
			$("#ser02").slider({
				ticks: [0, 100, 200, 300, 400, 500],
				lock_to_ticks: true
			});
			$("#ser03").slider({
				ticks: [0, 100, 200, 300, 400, 500],
				lock_to_ticks: true
			});
			
			function m_box1(obj,chk){
				eChk = document.getElementsByName(obj);

				for(var i=0;i<eChk.length;i++){
					var h=i+1
					if(i == chk){
						eChk[i].checked = true;
						$('#m_box1_'+h).parent().addClass('active');
					}else{
						eChk[i].checked = false;
						$('#m_box1_'+h).parent().removeClass('active');
					}
				}
			}
		</script>
	</section>
	<section class="sec04 blue02">
		<div class="c_center">
			<h3 class="sub_tit bold2 c_blk">
				내게 맞는 요금제
				<span class="regular c_gry">쓰던 폰 그대로 유심만 바꾸세요.</span>
			</h3>
			<div class="whtBox mb30">
				<div class="whtInner whtBox_top dp_sb dp_c">
					<div class="dp_f dp_c">
						<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
						<p class="pay_tit bold2">요금제명 - 티티고 플러스</p>
					</div>
					<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
				</div>
				<div class="whtInner threeBox dp_sb">
					<div class="sBox blue02">
						<p class="sDet01 c_blk">데이터</p>
						<p class="sDet02 bold2 c_blk">15GB</p>
						<span class="sDet03 c_gry">(+3Mbps 무제한)</span>
					</div>
					<div class="sBox blue03">
						<p class="sDet01 c_blk">음성통화</p>
						<p class="sDet02 bold2 c_blk">무제한</p>
						<span class="sDet03 c_gry">(영상부가 +300분)</span>
					</div>
					<div class="sBox gry01">
						<p class="sDet01 c_blk">SMS</p>
						<p class="sDet02 bold2 c_blk">무제한</p>
					</div>
				</div>
				<div class="whtInner">
					<div class="condition">
						<div class="condi_scroll">
							<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다.</p>
						</div>
					</div>
				</div>
				<div class="whtInner whtBox_bot blue01">
					<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
						<p class="monPrice c_w">월요금<span class="c_w">36,300원</span></p>
						<div class="discount dp_f dp_c">
							<span class="disc01 c_w bold2">20%↓</span>
							<span class="disc02 c_w bold2">월 29,000원</span>
							<span class="lnr lnr-chevron-right c_w"></span>
						</div>
					</a>
				</div>
			</div>
			<!-- <div class="whtBox mb30">
				<div class="whtInner whtBox_top dp_sb dp_c">
					<div class="dp_f dp_c">
						<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
						<p class="pay_tit bold2">요금제명 - 티티고 플러스2</p>
					</div>
					<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
				</div>
				<div class="whtInner threeBox dp_sb">
					<div class="sBox blue02">
						<p class="sDet01 c_blk">데이터</p>
						<p class="sDet02 bold2 c_blk">15GB</p>
						<span class="sDet03 c_gry">(+1Mbps 무제한)</span>
					</div>
					<div class="sBox blue03">
						<p class="sDet01 c_blk">음성통화</p>
						<p class="sDet02 bold2 c_blk">무제한</p>
						<span class="sDet03 c_gry">(영상부가 +200분)</span>
					</div>
					<div class="sBox gry01">
						<p class="sDet01 c_blk">SMS</p>
						<p class="sDet02 bold2 c_blk">100건</p>
					</div>
				</div>
				<div class="whtInner">
					<div class="condition">
						<div class="condi_scroll">
							<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이</p>
						</div>
					</div>
				</div>
				<div class="whtInner whtBox_bot blue01">
					<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
						<p class="monPrice c_w">월요금<span class="c_w">26,300원</span></p>
						<div class="discount dp_f dp_c">
							<span class="disc01 c_w bold2">20%↓</span>
							<span class="disc02 c_w bold2">월 21,000원</span>
							<span class="lnr lnr-chevron-right c_w"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="whtBox">
				<div class="whtInner whtBox_top dp_sb dp_c">
					<div class="dp_f dp_c">
						<div class="dp_f dp_c dp_cc prepay c_blue">선불</div>
						<p class="pay_tit bold2">요금제명 - 티티고 플러스3</p>
					</div>
					<div class="dp_f dp_c dp_cc best purple01 c_w">BEST</div>
				</div>
				<div class="whtInner threeBox dp_sb">
					<div class="sBox blue02">
						<p class="sDet01 c_blk">데이터</p>
						<p class="sDet02 bold2 c_blk">15GB</p>
						<span class="sDet03 c_gry">(+1Mbps 무제한)</span>
					</div>
					<div class="sBox blue03">
						<p class="sDet01 c_blk">음성통화</p>
						<p class="sDet02 bold2 c_blk">무제한</p>
						<span class="sDet03 c_gry">(영상부가 +200분)</span>
					</div>
					<div class="sBox gry01">
						<p class="sDet01 c_blk">SMS</p>
						<p class="sDet02 bold2 c_blk">100건</p>
					</div>
				</div>
				<div class="whtInner">
					<div class="condition">
						<div class="condi_scroll">
							<p class="c_gry">요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이 들어갑니다. 요금제 / 티티고 내용 / 할인 조건 등 개요 내용이</p>
						</div>
					</div>
				</div>
				<div class="whtInner whtBox_bot blue01">
					<a class="dp_sb dp_c dp_wrap" href="sub08/priceChoice.php" title="">
						<p class="monPrice c_w">월요금<span class="c_w">26,300원</span></p>
						<div class="discount dp_f dp_c">
							<span class="disc01 c_w bold2">20%↓</span>
							<span class="disc02 c_w bold2">월 21,000원</span>
							<span class="lnr lnr-chevron-right c_w"></span>
						</div>
					</a>
				</div>
			</div>
			<a class="moreBtn" href="" title="더보기">더보기</a> -->
		</div>
	</section>
	<section class="sec05" id="secMove02">
		<div class="c_center">
			<div class="whtBox">
				<h3 class="sub_tit02 regular">
					개통을 위한 준비물,
					<span class="bold2 dp_b">한패스 모바일 유심</span>
				</h3>
				<div class="whtInner">
					<div class="cardSlide">
						<div class="cardBox">
							<div class="cardImg"><img src="./images/card1.png" alt=""></div>
						</div>
						<div class="cardBox">
							<div class="cardImg"><img src="./images/card2.png" alt=""></div>
						</div>
					</div>
					<a class="submitBtn gradient c_w" href="/sub02/sub01.php" title="유심 구매 하기">유심 구매 하기</a>
					<p class="wht_detail">또는 공용유심을 구매하여 개통을 준비합니다.</p>
				</div>
			</div>
		</div>
		<script>
			$('.cardSlide').slick({ 
				infinite : true, 
				autoplay : true,			// 자동 스크롤 사용 여부
				autoplaySpeed : 3000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
				arrows : false,
				dots:true,
				fade: true,
			});
		</script>
	</section>
	<section class="sec06 gry01" id="secMove03">
		<div class="c_center">
			<div class="whtBox">
				<h3 class="sub_tit bold2 c_blk">
					USIM 카드 충전하기
					<span class="regular c_gry">고객님이 가입한 요금제 USIM 카드를 충전합니다.</span>
				</h3>
				<div class="whtInner">
					<div class="phoneWrap">
						<label class="normalTit" for="phone">휴대폰 번호</label>
						<input id="phone" type="text" placeholder="USIM 충전할 휴대폰 번호 입력">
					</div>
					<div class="remPhone">
						<input id="remPhone" type="checkbox">
						<label class="c_gry" for="remPhone">
							내 휴대폰 번호 입력하기
						</label>
					</div>
					<a class="submitBtn gradient c_w" href="" title="요금제 조회">요금제 조회</a>
					<div class="dp_sb">
						<p class="normalTit">요금제 가격</p>
						<div class="priceResult">
							<p class="priceRes01 c_blue bold2">36,300원</p>
							<p class="priceRes02 c_red01">선불 정액제 충전시</p>
						</div>
					</div>
					<p class="normalTit">입금 방식 선택</p>
					<ul class="payWay dp_sb">
						<li>
							<a class="dp_f dp_c dp_cc dp_wrap" href="" title="">가상계좌 충전</a>
						</li>
						<li>
							<a class="dp_f dp_c dp_cc dp_wrap" href="" title="">신용카드 결제</a>
						</li>
						<li>
							<a class="dp_f dp_c dp_cc dp_wrap" href="" title="">한패스 결제</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="sec07" id="secMove04">
		<div class="c_center">
			<h3 class="sub_tit bold2 c_blk">
				이벤트
			</h3>
			<div class="eventImg">
				<img src="./images/event1.jpg" alt="">
			</div>
			<div class="eventImg">
				<img src="./images/event2.jpg" alt="">
			</div>
			<a class="moreBtn" href="" title="더보기">더보기</a>
		</div>
	</section>
	<section class="sec08 gry01">
		<div class="c_center">
			<div class="newsBox">
				<div class="newsTop dp_sb dp_end">
					<p class="bold2">공지사항</p>
					<a class="n_moreBtn dp_b" href="" title=""><img src="./images/more_plus.svg" alt=""></a>
				</div>
				<ul class="newsCont">
					<li>
						<a class="dp_sb dp_c" href="" title="">
							<div class="newsTit">
								<span class="c_blk02 dp_b tit">회원가입하고 더 많은 혜택을 누리세요.</span>
								<span class="c_gry dp_b date">2022-08-01</span>
							</div>
							<span class="lnr lnr-chevron-right c_gry02"></span>
						</a>
					</li>
					<li>
						<a class="dp_sb dp_c" href="" title="">
							<div class="newsTit">
								<span class="c_blk02 dp_b tit">회원가입하고 더 많은 혜택을 누리세요.</span>
								<span class="c_gry dp_b date">2022-08-01</span>
							</div>
							<span class="lnr lnr-chevron-right c_gry02"></span>
						</a>
					</li>
					<li>
						<a class="dp_sb dp_c" href="" title="">
							<div class="newsTit">
								<span class="c_blk02 dp_b tit">회원가입하고 더 많은 혜택을 누리세요.</span>
								<span class="c_gry dp_b date">2022-08-01</span>
							</div>
							<span class="lnr lnr-chevron-right c_gry02"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="sec09">
		<div class="c_center">
			<a class="qnaBtn" href="" title="">
				<span class="bold2">자주하는 질문과 답변</span>
			</a>
		</div>
	</section>
</div>

	<script>

		//상단 고정 메뉴 해당 영역 스크롤 이동
		$('.fav_menu > li > a').click(function (event){
			event.preventDefault();

			const idname = $(this).attr('data_seq');
			const offset = $("#" + idname).offset();
			const wid = $('html, body').width();

			if(wid < 600){
				$('html, body').animate({scrollTop: offset.top - 100}, 300);
			}else {
				$('html, body').animate({scrollTop: offset.top - 150}, 300);
			}
		});
	</script>


<script>
    // Add a .touch or .no-touch class to <html> based on device capability
    document.documentElement.setAttribute('class',
        'ontouchend' in document ? 'touch' : 'no-touch');
</script>



<?
	include 'footer.php';
?>

