<?
	include '../header.php';

	$uid = $_GET['uid'];

	$query = "select * from ks_member where uid='$uid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
		$uid = $row['uid'];
		$email = $row['email'];
		$randCode = $row['randCode'];
?>

<script>
function check_form(){

	form = document.frm01;
	
	if(isFrmEmptyModal(form.emailcode,"인증코드를 입력해 주십시오."))	return;

	form.type.value = 'randCodeChk';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
	}
</script>


<form name='frm01' id='frm01' method='post' action='<?=$PHP_SELF?>'>
	<input type='hidden' name='type' id='type' value=''>
	<input type='hidden' name='uid' id='uid' value='<?=$uid?>'>

	<div class="subWrap02">
		<div class="wht01 m-100 p-50 p_50 m-m0">
			<div class="l_center">
				<p class="joinSubTit">아이디 / 비밀번호 찾기</p>
				<div class="inputWrap f_inputWrap">
					<label for="emailcode">이메일 인증코드 입력</label>
					<input id="emailcode" name="emailcode" type="text" placeholder="인증코드" onkeypress="if(event.keyCode==13){check_form();}">
				</div>
				<a class="submitBtn gradient c_w" href="javascript:check_form();" title="인증하기">인증하기</a>
			</div>
		</div>
	</div>
</form>

<?
	include '../footer.php';
?>