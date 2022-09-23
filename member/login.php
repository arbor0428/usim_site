<?
	include '../header.php';
?>

<div class="subWrap02">
	<div class="wht01 p_50">
		<div class="l_center">
			<h3 class="sub_tit bold2">로그인</h3>
			<div class="inputWrap l_inputWrap">
				<label for="id">아이디(이메일)</label>
				<input id="id" type="text" placeholder="아이디(이메일)">
			</div>
			<div class="inputWrap l_inputWrap">
				<label for="password">비밀번호</label>
				<input id="password" type="text" placeholder="비밀번호">
			</div>
			<a class="submitBtn gradient c_w" href="" title="로그인">로그인</a>
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
				<a class="bold" href="./join.php" title="">회원 가입</a>
			</div>
		</div>
	</div>
</div>

<?
	include '../footer.php';
?>