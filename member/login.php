<?
	include '../header.php';
?>

<script>
function check_form(){
	
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
	
	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오."))	return;

	form.type.value = 'login';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}
</script>


<form name='FRM' id='FRM' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='' id='' value=''>

	<div class="subWrap02">
		<div class="wht01 p_50">
			<div class="l_center">
				<h3 class="sub_tit bold2">로그인</h3>
				<div class="inputWrap l_inputWrap">
					<label for="id">아이디(이메일)</label>
					<input id="id" type="text" name="userid" placeholder="아이디(이메일)">
				</div>
				<div class="inputWrap l_inputWrap">
					<label for="password">비밀번호</label>
					<input id="password" type="password" name="passwd" placeholder="비밀번호">
				</div>
				<a class="submitBtn gradient c_w" href="javascript:check_form();" title="로그인">로그인</a>
				<div class="loginBotWrap01 dp_sb">
					<div class="idChkWrap bold">
						<input id="idChk" type="checkbox">
						<label for="idChk">로그인 유지하기</label>
					</div>
					<div class="find_idpwWrap">
						<a class="findPw bold" href="./findIDPW_step01.php">
							아이디
							<span>/</span>
							비밀번호 찾기
						</a>
					</div>
				</div>
				<div class="loginBotWrap02 dp_sb">
					<p class="bold">한패스모바일 회원이 아니세요?</p>
					<a class="bold" href="./join1.php" title="">회원 가입</a>
				</div>
			</div>
		</div>
	</div>
</form>

<?
	include '../footer.php';
?>