<?
	include '../head.php';

	//달력
	include '../../module/datepicker/Calendar.php';

	if($GBL_MTYPE != 'A'){
		Msg::goMsg('접근오류','/');
		exit;
	}

	$cType = $_POST['cType'];

	$f_status = $_POST['f_status'];
	$f_level = $_POST['f_level'];
	$f_userid = $_POST['f_userid'];
	$f_name = $_POST['f_name'];
?>

<style>
.zTable{border-bottom:0;}
.zTable th, .zTable td{height:30px;}
</style>

<script>
function check_form(){
	form = document.frm01;

	if(isFrmEmpty(form.title,"쿠폰명을 입력해 주십시오."))	return;
	if(isFrmEmpty(form.price,"할인금액을 입력해 주십시오."))	return;
	if(isFrmEmpty(form.eDate,"사용기한을 입력해 주십시오."))	return;

	$('#sendBtn').html("<a href='javascript://;' class='big cbtn green'>발급중</a>");

	form.target = 'coupon_frame';
	form.action = 'modalProc.php';
	form.submit();
}
</script>

<iframe name='coupon_frame' src='about:blank' style='width:0;height:0;display:none;'></iframe>

<form name='frm01' method='post' action=''>
<input type='text' style='display:none;'>
<input type='hidden' name='cType' value="<?=$cType?>">

<?foreach($chk as $k => $v){?>
<input type="hidden" name="chk[]" value="<?=$v?>">
<?}?>

<table cellpadding='0' cellspacing='0' border='0' width='100%' class='zTable'>
	<tr>
		<th width='17%'><span class='eqc'>*</span> 쿠폰명</th>
		<td width='83%'><input type="text" name="title" id="title" class="form-control" style="width:50%;" value=""></td>
	</tr>

	<tr>
		<th><span class='eqc'>*</span> 할인금액</th>
		<td><input type="text" name="price" id="price" class="form-control numberOnly" style="width:120px;display:inline-block;" value=""> 원</td>
	</tr>

	<tr>
		<th><span class='eqc'>*</span> 사용기한</th>
		<td><input type="text" name="eDate" class="form-control fpicker" value="" style='width:140px;' placeholder=''></td>
	</tr>

</table>

<p style='width:100%;text-align:center;margin-top:10px;' id='sendBtn'><a href="javascript:check_form();" class="big cbtn blue">발급하기</a></p>

</form>