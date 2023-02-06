<?
	include '../header.php';
?>

<script>
function checkID(c){
	form = document.FRM;

	if(isFrmEmptyModal(form.userid,"아이디(이메일)를 입력해 주십시오."))	return true;

	ID = form.userid.value;
	exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;

	if(exptext.test(ID)==false){
		//이메일 형식이 알파벳+숫자@알파벳+숫자.알파벳+숫자 형식이 아닐경우			
		GblMsgBox("이메일형식이 올바르지 않습니다.");
		form.email.focus();

		return false;
	}


	if(c){
		userid = $('#id').val();

		$.post('/module/common/UserIdCheck.php',{'userid':userid}, function(cnt){
			if(cnt != 0){
				GblMsgBox('사용할 수 없는 아이디입니다.','');
				form.userid.focus();

			}else{
				GblMsgBox('사용 가능한 아이디입니다.','');
				form.pwd.focus();
			}
		});
	}
}


function chkPW(){

		var pw = $("#pw").val();
		var pwpast= $("#pw").val();
		var num = pw.search(/[0-9]/g);
		var eng = pw.search(/[a-z]/ig);
		var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

		 if(pw.length < 8 || pw.length > 20){

			$(".pwstaus").text("ⓘ 8자리 ~ 20자리 이내로 입력해주세요.");

			return false;

		}else if(pw.search(/\s/) != -1){

			$(".pwstaus").text("ⓘ 비밀번호는 공백 없이 입력해주세요.");

			return false;

		 }else if(num < 0 || eng < 0 || spe < 0 ){

			$(".pwstaus").text("ⓘ 영문,숫자, 특수문자를 혼합하여 입력해주세요.");

			return false;

		}else {

			$(".pwstaus").text("");

			return true;

		 }

	}

	//비밀번호 & 비밀번호 확인 일치 하지 않을 때
	function rechkPW(){

		var pw = $("#pw").val();
		var pwpast= $("#re_pw").val();

		
		 if(pw != pwpast){

			$(".pwpaststaus").text("ⓘ 비밀번호가 다릅니다.");
			
			return false;

		}else {
			
			$(".pwpaststaus").text("");
			
			return true;
		 }

	}


function check_form(){

	form = document.FRM;

	if(checkID())	return;

	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.re_pw,"비밀번호 확인을 입력해 주십시오."))	return;

	passwd = form.passwd.value;
	re_pw = form.re_pw.value;

	if(passwd || re_pw){
		if(isFrmEmptyModal(form.passwd,"신규 비밀번호를 입력해 주십시오."))	return;
		if(isFrmEmptyModal(form.re_pw,"신규 비밀번호를 한번더 입력해 주십시오."))	return;

		if(form.passwd.value != form.re_pw.value){
			GblMsgBox("비밀번호를 확인해 주십시오.");
			form.re_pw.focus();
			return;
		}

		if(passwd.length < 6 || passwd.length > 10){
			GblMsgBox("비밀번호는 6~10자 이내입니다.");
			form.passwd.focus();
			return;
		}
	}

	if(isFrmEmptyModal(form.name,"이름을 입력해 주십시오."))	return;
	
	if (!form.yesChk01.checked) {
      GblMsgBox("통신서비스 이용약관을 동의 주십시오.");
      form.yesChk01.focus();
      return false;
	};

   if (!form.yesChk02.checked) {
      GblMsgBox("개인정보 수집 및 이용약관을 동의해 주십시오.");
      form.yesChk02.focus();
      return false;
    };

    if (!form.yesChk04.checked) {
      GblMsgBox("개인정보 제3자 제공약관을 동의해 주십시오.");
      form.yesChk04.focus();
      return false;
    };


	form.type.value = 'write';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}
</script>

<form name='FRM' id='FRM' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='' id='' value=''>

	<div class="subWrap02">
		<div class="wht01 p-50 p_50">
			<div class="l_center">
				<p class="joinSubTit">회원 가입</p>
				<div class="inputWrap l_inputWrap idInputWrap">
					<label for="id">아이디(이메일)</label>
					<div class="dp_sb dp_c">
						<input id="id" type="text" name="userid" placeholder="아이디(이메일)" onkeypress="if(event.keyCode==13){check_form();}">
						<a class="doubleChk dp_f dp_c dp_cc gradient c_w" onclick="checkID(1);">중복체크</a>
					</div>
					<span class="status c_red idstaus"></span>
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="pw">비밀번호</label>
					<input id="pw" type="password" name="passwd" placeholder="비밀번호" onkeyup ="chkPW()" >
					<span class="status c_red pwstaus"></span>
				</div>
				<div class="inputWrap l_inputWrap">
					<input id="re_pw" type="password" name="re_pw" placeholder="비밀번호 확인" onkeyup ="rechkPW()">
					<span id="pwdTxt" class="status c_red pwpaststaus"></span>
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="nm">이름</label>
					<input id="nm" type="text" name="name" placeholder="이름" readonly>
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="">휴대폰 번호</label>
					<div class="dp_sb dp_c">
						<input class="wid31" id="" type="text" name="phone01" value="010" readonly>
						-
						<input class="wid31" id="" type="text" name="phone02" value="1234" readonly>
						-
						<input class="wid31" id="" type="text" name="phone03" value="5678" readonly>
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
								<input id="yesChk01" type="checkbox" name="yesChk01" autocomplete="off">
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
								<input id="yesChk02" type="checkbox" name="yesChk02" autocomplete="off">
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
								<input id="yesChk04" type="checkbox" name="yesChk04" autocomplete="off">
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