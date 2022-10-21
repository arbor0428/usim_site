<?
	include '../header.php';
?>

<script>

window.name ="Parent_window";

function niceCheck(t){
	if(t == 'mobile')	act = 'moduleCheck1.php';

	id = setTimeout(function(){	
		$.post('/module/niceID/mobile/'+act,{}, function(result){ //여기까지 페이지
			if(result){
				parData = JSON.parse(result);
				msg = parData.msg;

				if(msg){
					GblMsgBox(msg,'');
					return;
				}else{
					data = parData.data;

					if(t == 'mobile'){
						window.open('', 'popupChk', 'width=500, height=550, top=100, left=100, fullscreen=no, menubar=no, status=no, toolbar=no, titlebar=yes, location=no, scrollbar=no');
						document.form_chk.EncodeData.value = data;
						document.form_chk.action = "https://nice.checkplus.co.kr/CheckPlusSafeModel/checkplus.cb";
						document.form_chk.target = "popupChk";
						document.form_chk.submit();
					}
				}
			}else{
				GblMsgBox('통신오류','');
				return;
			}
		});	
	}, 500);
}

</script>


<form name='FRM' id='FRM' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='' id='' value=''>

	<div class="subWrap02">
		<div class="wht01 p-50 p_50">
			<div class="l_center">
				<p class="joinSubTit">휴대폰인증 서비스</p>

				<ul class="gry01 pwChnBox joinExplain">
					<li class="dp_f dp_c">휴대폰번호는 나이스평가정보에서 인증 받은 휴대폰번호를 사용하고 있습니다.</li>
					<li class="dp_f dp_c">개인정보보호법에 따라 인터넷에서 주민등록번호를 대체하는 본인확인 수단인 휴대폰인증서비스를 사용하여 실명인증을 실시하고 있으며, 휴대폰인증서비스는 본인명의의 휴대폰이 아닌경우 인증이 어려우니 이점 참고해 주시기 바랍니다.</li>
				</ul>

				<a class="submitBtn gradient c_w m-50" href="javascript:niceCheck('mobile');" title="휴대폰 인증">휴대폰 인증</a>
			</div>
		</div>
	</div>

</form>


<?
	include '../footer.php';
?>