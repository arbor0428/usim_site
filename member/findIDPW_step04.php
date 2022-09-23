<?
	include '../header.php';
?>

<div class="subWrap02">
	<div class="wht01 m-100 p-50 p_50 m-m0">
		<div class="l_center">
			<p class="joinSubTit">아이디 / 비밀번호 찾기</p>
			<div class="inputWrap l_inputWrap">
				<label for="newPassword">새로운 비밀번호 설정</label>
				<input id="newPassword" type="text" placeholder="비밀번호">
				<span class="c_red status">ⓘ 영문/숫자/특수문자 중 2개 이상을 이용하여 8자 이상 입력해주세요.</span>
			</div>
			<div class="inputWrap l_inputWrap">
				<input id="newPasswordChk" type="text" placeholder="비밀번호 확인">
			</div>
			<a class="submitBtn gradient c_w" href="./findIDPW_step05.php" title="비밀번호 변경">비밀번호 변경</a>
		</div>
	</div>
</div>

<?
	include '../footer.php';
?>