<script>
function check_form(){

	form = document.FRM;

	if(isFrmEmptyModal(form.userid,"아이디(이메일)을 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.re_pw,"비밀번호 확인을 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.name,"이름을 입력해 주십시오."))	return;

	form.type.value = 'write';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}




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
/*
	//아이디 기존 사용자 이메일 일 경우
	function chkID(){

		var id = $("#id").val();
		var idpast = //기존 사용자 이메일'

	

		 if(id != idpast){

			$(".idstaus").text("ⓘ 이미 가입한 사용자 아이디(이메일) 입니다.");
			
			return false;

		}else {
			
			$(".idstaus").text("");
			
			return true;
		 }

	}
*/

	//비밀번호 영문 숫자 특수문자 혼합
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

</script>