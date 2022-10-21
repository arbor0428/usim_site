<?
	if($type=='edit' && $uid){
		$row = sqlRow("select * from ks_coupon where uid='".$uid."'");

		$title = $row["title"];
		$price = number_format($row["price"]);
		$userid = $row["userid"];
		$eDate = $row["eDate"];
	}

	include 'script.php';
?>

<form name='frm01' action="<?=$_SERVER['PHP_SELF']?>" method='post'>
<input type='hidden' name='type' value='<?=$type?>'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='next_url' value='<?=$_SERVER['PHP_SELF']?>'>

<!-- 검색관련 -->
<input type='hidden' name='f_title' value='<?=$f_title?>'>
<input type='hidden' name='f_userid' value='<?=$f_userid?>'>
<!-- /검색관련 -->

<div class="card shadow mb-4" style='margin-top:10px;width:100%;max-width:1000px;'>
	<div class="card-body">
		<div class="tbl-st-wrap01" style="clear:both;border-top:0;">
			<div class="mb20 clearfix">
				<table cellpadding='0' cellspacing='0' border='0' width='100%' class='zTable' style='min-width:900px;'>
					<tr>
						<th width='17%'><span class='eqc'>*</span> 쿠폰명</th>
						<td width='83%'><input type="text" name="title" id="title" class="form-control" style="width:50%;" value="<?=$title?>"></td>
					</tr>

					<tr>
						<th><span class='eqc'>*</span> 할인금액</th>
						<td><input type="text" name="price" id="price" class="form-control numberOnly" style="width:120px;display:inline-block;" value="<?=$price?>"> 원</td>
					</tr>

					<tr>
						<th><span class='eqc'>*</span> 발급대상</th>
						<td>
						<?
							if($type == 'write'){
						?>
							<input type="text" name="userid" id="userid" class="form-control" style="width:30%;" value="<?=$userid?>" list="userList" placeholder="전체회원">
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
						<?
							}else{
								echo $userid;
							}
						?>
						</td>
					</tr>

					<tr>
						<th><span class='eqc'>*</span> 사용기한</th>
						<td><input type="text" name="eDate" class="form-control fpicker" value="<?=$eDate?>" style='width:140px;' placeholder=''></td>
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
							<a href="javascript:check_form();" class='big cbtn blue'>정보수정</a>&nbsp;&nbsp;
							<a href="javascript:reg_list();" class='big cbtn black'>목록보기</a>
						</td>
						<td width='20%' align='right'><a href="javascript:checkDel();" class='big cbtn blood'>쿠폰삭제</a></td>
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