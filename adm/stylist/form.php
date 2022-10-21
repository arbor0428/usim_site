<?
	include '../head.php';

	if(!$GBL_USERID){
		Msg::backMsg('접근오류');
		exit;
	}

	if($type == 'edit' && $uid){
		$row = sqlRow("select * from ks_member where uid='$uid'");
		if($row){
			foreach($row as $k => $v){
				${$k} = $v;
			}
		}
	}

?>

<style>
.input-50{width:50%;}
.form-group{margin-bottom:0 !important;}
.text-white-50{padding-top:10px !important;}

@media (max-width: 768px){
	.input-50{width:50% !important;}
}
</style>

<script>
function formChk(){
	form = document.frm01;

	type = form.type.value;

	if(type == 'write'){
		if(isFrmEmpty(form.userid,"아이디를 입력해 주십시오."))	return true;

		ID = form.userid.value;

		for( var i=0 ; i < ID.length ; i++ ){
			if( i == 0 ){
				if( (ID.charAt(i) >= '0' && ID.charAt(i) <= '9') ){
					alert("아이디 첫글자는 영문이어야 합니다.");
					form.userid.focus();
					return true;
				}
			}
		}

		if(!isAlphaModal(form.userid, "아이디는 영문자와 숫자만 입력해 주세요."))	return true;

		if(ID.length < 4 || ID.length > 12){
			alert("아이디는 4~12자 이내입니다.");
			form.userid.focus();
			return true;
		}

		if(isFrmEmpty(form.passwd,"비밀번호를 입력해 주십시오."))	return;
	}

	if(isFrmEmpty(form.name,"이름을 입력해 주십시오."))	return;
	if(isFrmEmpty(form.phone,"연락처를 입력해 주십시오."))	return;
	if(isFrmEmpty(form.email,"이메일을 입력해 주십시오."))	return;

	email = $('#email').val();
	okEmail = isEmailChk(email);
	if(!okEmail){
		alert('이메일을 정확히 기재해 주시기 바랍니다.');
		$('#email').focus();
		return;
	}

	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function userDel(){
	if(confirm('해당 스타일리스트를 삭제하시겠습니까?')){
		form = document.frm01;
		form.type.value = 'del';
		form.target = 'ifra_gbl';
		form.action = 'proc.php';
		form.submit();
	}
}
</script>

<form name='frm01' class="user" method='post' action=''>
<input type='text' style='display:none;'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type='hidden' name='type' id='type' value='<?=$type?>'>

<div class="tbl-st">
<?
	if($type == 'write'){
?>
	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>아이디</div>
		<div class="cols_80 cols_">
			<div class="form-group"><input type="text" name="userid" id="userid" class="form-control input-50" value=""></div>
		</div>
	</div>

	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>비밀번호</div>
		<div class="cols_80 cols_">
			<div class="form-group">
				<input type="password" name="passwd" id="passwd" class="form-control input-50" value="">
			</div>
		</div>
	</div>
<?
	}else{
?>
	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>아이디</div>
		<div class="cols_80 cols_">
			<div class="form-group"><?=$userid?></div>
		</div>
	</div>
	<input type='hidden' name='userid' value='<?=$userid?>'>

	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>비밀번호</div>
		<div class="cols_80 cols_">
			<div class="form-group">
				<input type="password" name="passwd" id="passwd" class="form-control input-50" value="" placeholder="변경시에만 입력">
			</div>
		</div>
	</div>
<?
	}
?>

	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>이 름</div>
		<div class="cols_80 cols_">
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control input-50" value="<?=$name?>">
			</div>
		</div>
	</div>

	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>연락처</div>
		<div class="cols_80 cols_">
			<div class="form-group">
				<input type="text" name="phone" id="phone" class="form-control input-50" value="<?=$phone?>" onkeyup="phoneChk(this);" maxlength='13'>
			</div>
		</div>
	</div>

	<div class="cols">
		<div class="cols_20 cols_ th"><span class='eqc'>*</span>이메일</div>
		<div class="cols_80 cols_">
			<div class="form-group">
				<input type="text" name="email" id="email" class="form-control input-50" value="<?=$email?>">
			</div>
		</div>
	</div>

</div>

<div style='width:100%;margin:40px 0;text-align:center;'>
	<a href="javascript:formChk();" class="btn btn-secondary btn-icon-split">
		<span class="icon text-white-50">
			<i class="fas fa-check"></i>
		</span>
		<?if($type == 'write'){?>
		<span class="text">등록하기</span>
		<?}else{?>
		<span class="text">수정하기</span>
		<?}?>
	</a>
<?
	if($type == 'edit'){
?>
	<a href="javascript:userDel();" class="btn btn-danger btn-icon-split" style="margin-left:20px;">
		<span class="icon text-white-50">
			<i class="fas fa-trash"></i>
		</span>
		<span class="text">삭제하기</span>
	</a>
<?
	}
?>
</div>


<iframe name='ifra_gbl' src='about:blank' width='0' height='0' frameborder='0' scrolling='no' style='display:none;'></iframe>
