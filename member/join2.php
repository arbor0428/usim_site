<?
	include '../header.php';
?>

./join_fin.php
<script>
function check_form(){

	form = document.FRM;

	if(isFrmEmptyModal(form.email,"이메일을 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오."))	return;

}


</script>

<form name='FRM' id='FRM' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='' id='' value=''>

	<div class="subWrap02">
		<div class="wht01 p-50 p_50">
			<div class="l_center">
				<p class="joinSubTit">회원 가입</p>
				<div class="inputWrap l_inputWrap">
					<label for="id">아이디(이메일)</label>
					<input id="id" type="text" name="email" placeholder="아이디(이메일)">
					<span class="status c_red">ⓘ 이미 가입한 사용자 아이디(이메일) 입니다.</span>
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="pw">비밀번호</label>
					<input id="pw" type="text" name="passwd" placeholder="비밀번호">
					<span class="status c_red">ⓘ 영문/숫자/특수문자 중 2개 이상을 이용하여 8자 이상 입력해주세요.</span>
				</div>
				<div class="inputWrap l_inputWrap">
					<input id="re_pw" type="text" placeholder="비밀번호 확인">
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="nm">이름</label>
					<input id="nm" type="text" name="name" placeholder="이름">
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="">휴대폰 번호</label>
					<div class="dp_sb dp_c">
						<input class="wid31" id="" type="text" name="phone">
						-
						<input class="wid31" id="" type="text" name="phone">
						-
						<input class="wid31" id="" type="text" name="phone">
					</div>
				</div>
				<p class="joinSubTit">서비스 이용약관에 동의 해주세요.</p>
				<div class="joinWrap02 wid100">
					<div class="chkAll">
						<input id="chkAll01" type="checkbox" autocomplete="off">
						<label for="chkAll01" class="bold2">(확인) 전체 약관에 모두 동의합니다.</label>
						<p class="chkAllDet">(일괄동의) 주식회사 한패스인터내셔널의 통신가입 서비스 이용약관 및 개인정보 취급 방침, 정보광고전송 및 제33자 제공을 위한 이용. 취급위탁, 제공 및 정보광고 수신동의에 대하여 일괄적으로 동의합니다.</p>
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
								<input id="yesChk04" type="checkbox" autocomplete="off">
								<label for="yesChk04" class="medium c_gry03"><span class="c_red medium">*(필수)</span>개인정보 제3자 제공 동의</label>
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
								<input id="yesChk05" type="checkbox" name="receiveChk" autocomplete="off">
								<label for="yesChk05" class="medium c_gry03"><span class="medium">(선택)</span>마케팅 정보 수신 동의</label>
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
				<a class="submitBtn gradient c_w" href="javascript:check_form();" title="가입">가입</a>
			</div>
		</div>
	</div>

</form>


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