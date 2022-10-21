<script>
function reg_list(){
	form = document.frm01;
	form.type.value = 'list';
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}

function check_form(){
	form = document.frm01;

	if(isFrmEmptyModal(form.title,"쿠폰명을 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.price,"할인금액을 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.eDate,"사용기한을 입력해 주십시오."))	return;

	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function checkDel(){
	GblMsgConfirmBox("해당 쿠폰을 삭제하시겠습니까?\n삭제후에는 복구가 불가능합니다.","checkDelOk()");
}

function checkDelOk(){
	form = document.frm01;
	form.type.value = 'del';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}
</script>