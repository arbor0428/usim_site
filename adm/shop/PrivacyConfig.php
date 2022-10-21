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
.input-50{width:50%;margin-bottom:3px;}
.form-group{margin-bottom:0 !important;}
.text-white-50{padding-top:10px !important;}

@media (max-width: 768px){
	.input-30{width:30% !important;}
}
</style>

<script>
function formChk(){
	form = document.frm01;

	setTimeout(function(){
		var params = jQuery("#frm01").serialize();
		jQuery.ajax({
			url: 'PrivacyProc.php',
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
		<div class="cols_30 cols_ th">휴면 30일전 메일</div>
		<div class="cols_70 cols_">
			<div class="form-group">
				<label class="switch">
					<input type="checkbox" name="PrivacyMail" id="PrivacyMail" value='1' class="switch-input" <?if($row['PrivacyMail']){echo 'checked';}?> onchange='formChk();'>
					<span class="switch-label" data-on="발송" data-off="발송안함"></span>
					<span class="switch-handle"></span>
				</label>
			</div>
		</div>
	</div>
</div>
<!--
<div style='width:100%;margin:40px 0;text-align:center;'>
	<a href="javascript:parent.$('.multiBox_close').click();" class="btn btn-secondary btn-icon-split">
		<span class="icon text-white-50">
			<i class="fas fa-check"></i>
		</span>
		<span class="text">닫기</span>
	</a>
</div>
-->