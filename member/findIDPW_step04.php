<?
	include '../header.php';
?>

<script>
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

	form.type.value = 'changePW';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

</script>
<form name='FRM' id='FRM' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='uid' id='uid' value='<?=$_GET['uid']?>'>

	<div class="subWrap02">
		<div class="wht01 m-100 p-50 p_50 m-m0">
			<div class="l_center">
				<p class="joinSubTit">아이디 / 비밀번호 찾기</p>
				<div class="inputWrap l_inputWrap">
					<label for="newPassword">새로운 비밀번호 설정</label>
					<input id="pw" type="password" name="passwd" placeholder="비밀번호" onkeyup ="chkPW()" >
					<span class="status c_red pwstaus"></span>
				</div>
				<div class="inputWrap l_inputWrap">
					<input id="re_pw" type="password" name="re_pw" placeholder="비밀번호 확인" onkeyup ="rechkPW()">
					<span id="pwdTxt" class="status c_red pwpaststaus"></span>
				</div>
				<a class="submitBtn gradient c_w" href="javascript:check_form();" title="비밀번호 변경">비밀번호 변경</a>
			</div>
		</div>
	</div>
<form>

<?
	include '../footer.php';
?>