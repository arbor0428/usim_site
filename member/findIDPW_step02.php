<?
	include '../header.php';

	$phone = $_GET['mobile'];

	$sql = "select * from ks_member where phone='$phone'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);

	if($num){
		$row = mysql_fetch_array($result);
		
		$uid = $row['uid'];
		$email = $row['email'];
		$rTime = $row['rTime'];
		$rDate = date('y.m.d', $rTime);
	}
	
?>


	<div class="subWrap02">
		<div class="wht01 m-100 p-50 p_50 m-m0">
			<div class="l_center">
				<p class="joinSubTit">아이디 / 비밀번호 찾기</p>
				<div class="textBox m_20">
					<p>아래 계정이 등록하신 계정이 맞으신가요?</p>
					<p>아이디를 확인하고 지금 로그인 하세요.<br>
						비밀번호를 재설정하려면 이메일 인증을 진행하세요.
					</p>
				</div>
				<div class="e_infoChk dp_f dp_c">
					<input type="checkbox" name="c_box1" id="chk1" onclick="c_box1(this.name,0);">
					<label for="chk1" class="f18">
						<span class="dp_b m_15 bold2"><?=$email?></span>
						<span class="e_nmInfo dp_b">한패스<br>
							<?=$rDate?>
						</span>
					</label>
				</div>
				<a class="submitBtn gradient c_w disable" href="javascript:void(0)" title="비밀번호 재설정 인증 코드 보내기">비밀번호 재설정 인증 코드 보내기</a>
			</div>
		</div>
	</div>


<script>
	function c_box1(obj,chk){
		
		eChk = document.getElementsByName(obj);

		if(eChk[0].checked){
			$('.e_infoChk > label').addClass('active');
			$('.submitBtn').prop('href', './emailProc.php?uid=<?=$uid?>'); //이메일 맞는지 체크 후 다음 단계 진행
			$('.submitBtn').removeClass('disable');
		}else{
			$('.e_infoChk > label').removeClass('active');
			$('.submitBtn').prop('href', 'javascript:void(0)'); //다음 단계 진행 disable
			$('.submitBtn').addClass('disable');
		}
	}
</script>


<?
	include '../footer.php';
?>