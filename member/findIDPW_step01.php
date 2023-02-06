<?
	include '../header.php';
?>

<form name='frm01' id='frm01' method='post' action='<?=$PHP_SELF?>' onsubmit="return false;">
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='' id='' value=''>

	<div class="subWrap02">
		<div class="wht01 p_50">
			<div class="l_center">
				<p class="joinSubTit">아이디 / 비밀번호 찾기</p>
				<div class="inputWrap f_inputWrap">
					<label for="f_mobile">휴대폰 번호</label>
					<input type="text" id="f_mobile" name="f_mobile" placeholder="휴대폰 번호(- 없이 숫자만 입력)" onkeypress="if(event.keyCode==13){searchPWD();}">
				</div>
				<a class="submitBtn gradient c_w" href="javascript:searchPWD();" title="다음">다음</a>
			</div>
		</div>
	</div>
</form>

<script>
function searchPWD(){
	var phone = $('#f_mobile').val();

	form = document.frm01;
	
	if(isFrmEmptyModal(form.f_mobile,"휴대폰 번호를 입력해 주십시오."))	return;
	mobile = $('#f_mobile').val();
	okMobile = isCellPhone(mobile);
	if(!okMobile){
		GblMsgBox('휴대폰 번호를 정확히 기재해 주시기 바랍니다.');
		$('#f_mobile').focus();
		return;
	}

	sChk = true;

	if(sChk){
		id = setTimeout(function(){
			var params = jQuery("#frm01").serialize();
			jQuery.ajax({
				url: '/module/searchPWD.php',
				type: 'POST',
				data:params,
				dataType: 'html',
				success: function(result){
					if(result == 'ok'){
						location.href='findIDPW_step02.php?mobile='+phone+'';
					}else{
						GblMsgBox('입력하신 정보와 일치하는 회원 정보가 없습니다.','');
						return;
					}
				},
				error: function(error){
					GblMsgBox('전송오류');
					return;
				}
			});
		}, 100);
	}
}
</script>

<?
	include '../footer.php';
?>