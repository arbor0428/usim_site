<?
	include '../header.php';
?>
	<style>
		.subWrap02 .joinStepShow li:nth-child(1) {
			padding: 15px 31px;
			background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
			color: #fff;
			box-shadow: 0 3px 5px 0 #dedede;
			-webkit-box-shadow: 0 3px 5px 0 #dedede;
		}
		@media (max-width:1023px){
			.subWrap02 .m_joinStepShow li:nth-child(1) {
				background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
				color: #fff;
				box-shadow: 0 3px 5px 0 #dedede;
				-webkit-box-shadow: 0 3px 5px 0 #dedede;
			}
		}
	</style>
	<div class="subWrap02 gry01">
		<div class="wht01">
			<h3 class="sub_tit bold2">요금제 가입</h3>
			<!--선불 가입일때 보여져야 함-->
			<?
				include 'prePayBar.php';
			?>

<!-- 			후불 가입일때 보여져야 함
			<?
				include 'afterPayBar.php';
			?> -->
			<div class="c_center">
				<p class="step_tit">1. 약관 동의</p>
			</div>
		</div>
		<div class="wht01">
			<div class="c_center">
				<p class="joinSubTit">통신 가입 약관에 동의 해주세요.</p>
			</div>
		</div>
		<div class="joinWrap02">
			<div class="chkAll">
				<input id="chkAll01" type="checkbox" autocomplete="off">
				<label for="chkAll01" class="bold2">(확인) 전체 약관에 모두 동의합니다.</label>
				<p class="chkAllDet">(일괄동의) 주식회사 한패스인터내셔널의 통신가입 서비스 이용약관 및 개인정보 취급 방침, 정보광고전송 및 제33자 제공을 위한 이용. 취급위탁, 제공 및 정보광고 수신동의에 대하여 일괄적으로 동의합니다.<br>
					<span class="c_red">[주의]  최근 대출업자 등 제3자에게 고객명의의 휴대폰을 개통해 주거나, 개통에 필요한 신청서류를 제공하는 경우 휴대폰 대출사기 등에 악용되어 심각한 경제적 피해를 입을 수 있습니다. 이러한 행위는 전기통신사업법에 따라 형사처벌이 될 수 있으니 각별히 주의하시기 바랍니다.</span>
					</p>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk01" type="checkbox" autocomplete="off">
						<label for="yesChk01" class="medium c_gry03"><span class="c_red medium">*(필수)</span>통신서비스 이용약관</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk02" type="checkbox" autocomplete="off">
						<label for="yesChk02" class="medium c_gry03"><span class="c_red medium">*(필수)</span>개인정보 수집 및 이용 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk03" type="checkbox" autocomplete="off">
						<label for="yesChk03" class="medium c_gry03"><span class="c_red medium">*(필수)</span>신용정보 조회 및 제공에 관한 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk04" type="checkbox" autocomplete="off">
						<label for="yesChk04" class="medium c_gry03"><span class="c_red medium">*(필수)</span>서비스 제공을 위한 제3자 제공 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk05" type="checkbox" autocomplete="off">
						<label for="yesChk05" class="medium c_gry03"><span class="c_red medium">*(필수)</span>고유식별정보 처리 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk06" type="checkbox" autocomplete="off">
						<label for="yesChk06" class="medium c_gry03"><span class="c_red medium">*(필수)</span>본인인증 서비스 이용에 대한 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk07" type="checkbox" autocomplete="off">
						<label for="yesChk07" class="medium c_gry03"><span class="c_red medium">*(필수)</span>개인위치정보 수집·이용 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk08" type="checkbox" autocomplete="off">
						<label for="yesChk08" class="medium c_gry03"><span class="medium">(선택)</span>개인정보수집·이용에 관한 사항 동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
			<div class="yesChkWrap">
				<div class="dp_sb dp_wrap">
					<div class="yesChk blackChk">
						<input id="yesChk09" type="checkbox" autocomplete="off">
						<label for="yesChk09" class="medium c_gry03"><span class="gkskmedium">(선택)</span>광고성 정보 전송 위탁 및 수신동의</label>
					</div>
					<a class="yesLnk" href="" title="">
						<span class="showCon c_gry03">내용보기</span>
						<span class="lnr lnr-chevron-up c_gry03"></span>
						<span class="lnr lnr-chevron-down c_gry03"></span>
					</a>
				</div>
				<div class="yesFulldwn">
					<!--약관동의내용보기---->	
				</div>
			</div>
		</div>
		<div class="c_center">
			<a class="submitBtn gradient c_w" href="./joinPrice_step2.php" title="다음">다음</a>
		</div>
	</div>
	<script>
		//동의 상세 펼치기 접기
		$(".yesLnk").on("click",function(event){
			event.preventDefault();

			if($(this).hasClass("on")){

				$(this).removeClass("on");
				$(this).parent().siblings(".yesFulldwn").slideUp();
				$(this).children(".showCon").text("내용보기");

			} else {

				$(this).addClass("on");
				$(this).parent().siblings(".yesFulldwn").slideDown();
				$(this).children(".showCon").text("내용닫기");
			}
		});
		// 체크박스 전체 선택
		$(".joinWrap02").on("click", "#chkAll01", function () {
			var checked = $(this).is(":checked");

			if(checked){
				$(this).parents().parents(".joinWrap02").children(".yesChkWrap").children().children().find('input').prop("checked", true);
			} else {
				$(this).parents().parents(".joinWrap02").children(".yesChkWrap").children().children().find('input').prop("checked", false);
			}
		});
	</script>

<?
	include '../footer.php';
?>