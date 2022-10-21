<?
if($type == 'edit' && $uid){
	$row = sqlRow("select * from ks_faq where uid='".$uid."'");
	$title = $row['title'];
	$ment = Util::TextAreaDecodeing($row['ment']);
}
?>

<script>
function check_form(){
	form = document.frm01;

	if(isFrmEmptyModal(form.title,"질문(Q)을 입력해 주십시오"))	return;
	if(isFrmEmptyModal(form.ment,"답변(A)을 입력해 주십시오"))	return;

	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function reg_list(){
	form = document.frm01;
	form.type.value = '';
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}


function checkDel(){
	GblMsgConfirmBox("해당 데이터를 삭제하시겠습니까?\n삭제후에는 복구가 불가능합니다.","checkDelOk()");
}

function checkDelOk(){
	form = document.frm01;
	form.type.value = 'del';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}
</script>


<!-- / 팝업위치 미리보기 -->

<form name='frm01' method='post' action='proc.php'>
<input type='hidden' name='type' value='<?=$type?>'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type="hidden" name="record_start" value="<?=$record_start?>">

<div class="card shadow mb-4" style='margin-top:10px;width:100%;max-width:1000px;'>
	<div class="card-body">
		<div class="tbl-st-wrap01" style="clear:both;border-top:0;">
			<div class="mb20 clearfix">

				<table cellpadding='0' cellspacing='0' border='0' width='100%' class='zTable' style='min-width:900px;'>
					<tr>
						<th width='17%' style='text-align:center;padding:0;'><span class='btn-primary btn-circle'>Q</span></th>
						<td width='83%'><input type="text" name="title" id="title" class="form-control" value="<?=$title?>"></td>
					</tr>
					<tr> 
						<th style='text-align:center;padding:0;'><span class='btn-secondary btn-circle'>A</span></th>
						<td><textarea name="ment" id="ment" class="form-control" style='width:100%;height:400px;resize:none;'><?=$ment?></textarea></td>
					</tr>
				</table>


			<?
				if($type == 'write'){
			?>
				<table cellpadding='0' cellspacing='0' border='0' width='100%'>
					<tr>
						<td align='center' style='padding:30px 0;'>
							<a href="javascript:check_form();" class='big cbtn blue'>등록</a>&nbsp;&nbsp;
							<a href="javascript:reg_list();" class='big cbtn black'>목록보기</a>
						</td>
					</tr>
				</table>

			<?
				}else{
			?>

				<table cellpadding='0' cellspacing='0' border='0' width='100%'>
					<tr>
						<td width='20%'></td>
						<td width='40%' align='center' style='padding:30px 0;'>
							<a href="javascript:check_form();" class='big cbtn blue'>수정</a>&nbsp;&nbsp;
							<a href="javascript:reg_list();" class='big cbtn black'>목록보기</a>
						</td>
						<td width='20%' align='right'><a href="javascript:checkDel();" class='big cbtn blood'>삭제</a></td>
					</tr>
				</table>

			<?
				}
			?>
			</div>
		</div>
	</div>
</div>
		


</form>


