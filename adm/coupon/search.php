<style>
.searchBox .form-control{background-color:#fff;display:inline-block;}
.searchBox .btn-icon-split .text {padding: 0.31rem 0.75rem;}
</style>

<script>
function searchChk(){
	form = document.frm01;
	form.type.value = '';
	form.record_start.value = '';
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}
</script>

<div class='searchBox' style='width:100%;'>
	<div style="float:left;">
		<input type="text" name="f_title" class="form-control" value="<?=$f_title?>" style='width:200px;' placeholder='쿠폰명'onkeypress="if(event.keyCode==13){searchChk();}">
		<input type="text" name="f_userid" id="f_userid" class="form-control" style="width:200px;" value="<?=$f_userid?>" list="userList" placeholder="아이디" onkeypress="if(event.keyCode==13){searchChk();}">
		<datalist id="userList">
		<?
			$uArr = sqlArray("select * from ks_member where mtype='M' order by uid");
			foreach($uArr as $k => $v){
				if($userid == $v['userid'])	$chk = 'selected';
				else								$chk = '';
		?>
			<option value="<?=$v['userid']?>" label="<?=$v['name']?>" <?=$chk?>><?=$v['userid']?></option>
		<?
			}
		?>
		</datalist>
		<a href="javascript:searchChk();" class="btn btn-secondary btn-icon-split" style="margin-top:-2px;">
			<span class="text">검색</span>
		</a>
	</div>
</div>