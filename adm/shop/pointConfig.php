<?
	include '../head.php';

	if(!$GBL_USERID){
		Msg::backMsg('접근오류');
		exit;
	}

	$row = sqlRow("select * from ks_shopConfig");
?>

<style>
.th{font-size:14px;color:#666;}
.input-30{width:30%;display:inline-block;}
.form-group{margin-bottom:0 !important;}
.text-white-50{padding-top:10px !important;}

@media (max-width: 768px){
	.input-30{width:30% !important;}
}
</style>

<script>
function formChk(){
	form = document.frm01;

	if(isFrmEmpty(form.joinPoint,"회원가입 포인트를 입력해 주십시오."))	return;
	if(isFrmEmpty(form.reviewPoint,"리뷰작성 포인트를 입력해 주십시오."))	return;

	setTimeout(function(){
		var params = jQuery("#frm01").serialize();
		jQuery.ajax({
			url: 'pointProc.php',
			type: 'POST',
			data:params,
			dataType: 'html',
			success: function(result){
				parent.$('.multiBox_close').click();
			},
			error: function(error){
				alert('통신오류');
				return;
			}
		});
	}, 100);
}
</script>

<form name='frm01' id='frm01' class="user" method='post' action=''>
<input type='text' style='display:none;'>
<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">

<div class="tbl-st">
	<div class="cols">
		<div class="cols_30 cols_ th">회원가입 포인트</div>
		<div class="cols_70 cols_">
			<div class="form-group">
				<input type="text" name="joinPoint" id="joinPoint" class="form-control numberOnly input-30" value="<?=number_format($row['joinPoint'])?>"> P
			</div>
		</div>
	</div>

	<div class="cols">
		<div class="cols_30 cols_ th">리뷰작성 포인트</div>
		<div class="cols_70 cols_">
			<div class="form-group">
				<input type="text" name="reviewPoint" id="reviewPoint" class="form-control numberOnly input-30" value="<?=number_format($row['reviewPoint'])?>"> P
			</div>
		</div>
	</div>

	<div class="cols">
		<div class="cols_30 cols_ th">포인트 자동소멸</div>
		<div class="cols_70 cols_">
			<div class="form-group">
				<select name="pointDelDay" id="pointDelDay" class="form-control input-30">
					<option value='' <?if($pointDelDay == ''){echo 'selected';}?>>없음</option>
					<option value='30' <?if($pointDelDay == '30'){echo 'selected';}?>>30일</option>
					<option value='60' <?if($pointDelDay == '60'){echo 'selected';}?>>60일</option>
					<option value='90' <?if($pointDelDay == '90'){echo 'selected';}?>>90일</option>
					<option value='150' <?if($pointDelDay == '150'){echo 'selected';}?>>150일</option>
					<option value='180' <?if($pointDelDay == '180'){echo 'selected';}?>>180일</option>
					<option value='365' <?if($pointDelDay == '365'){echo 'selected';}?>>365일</option>
				</select>
			</div>
		</div>
	</div>

</div>

<div style='width:100%;margin:40px 0;text-align:center;'>
	<a href="javascript:formChk();" class="btn btn-secondary btn-icon-split">
		<span class="icon text-white-50">
			<i class="fas fa-check"></i>
		</span>
		<span class="text">저장</span>
	</a>
</div>