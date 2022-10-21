<?
	$record_count = 30;  //한 페이지에 출력되는 레코드수

	$link_count = 10; //한 페이지에 출력되는 페이지 링크수

	if(!$record_start){
		$record_start = 0;
	}

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	//쿼리조건
	$query_ment = "where mtype='S'";

	//아이디
	if($f_userid)	 $query_ment .= " and userid like '%$f_userid%'";

	//성명
	if($f_name)	 $query_ment .= " and name like '%$f_name%'";

	$sort_ment = "order by rTime desc";

	$query = "select * from ks_member $query_ment $sort_ment";

	$result = mysql_query($query) or die("연결실패");

	$total_record = mysql_num_rows($result);

	$total_page = (int)($total_record / $record_count);

	if($total_record % $record_count){
		$total_page++;
	}

	$query2 = $query." limit $record_start, $record_count";

	$result = mysql_query($query2);
?>

<script>
function formModal(t,u){
	$("#multiBox").css({"width":"90%","max-width":"750px"});

	if(t == 'w'){
		$('#multi_ttl').text('스타일리스트 등록');
		$('#multiFrame').html("<iframe src='form.php?type=write' name='memberFrame' style='width:100%;height:520px;' frameborder='0' scrolling='auto'></iframe>");
		$('.multiBox_open').click();

	}else if(t == 'e'){
		$('#multi_ttl').text('정보수정');
		$('#multiFrame').html("<iframe src='form.php?type=edit&uid="+u+"' name='memberFrame' style='width:100%;height:520px;' frameborder='0' scrolling='auto'></iframe>");
		$('.multiBox_open').click();
	}
}

function checkDel(name,uid){
	GblMsgConfirmBox("["+name+"]님의 정보를 삭제하시겠습니까?\n삭제후에는 복구가 불가합니다.","delOK('"+uid+"')");
}

function delOK(uid){
	form = document.frm01;
	form.type.value = 'del';
	form.uid.value = uid;
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function ifra_xls(){
	form = document.frm01;
	form.type.value = '';
	form.target = '';
	form.action = 'excelDown.php';
	form.submit();
}
</script>

<style>
.listTable td{text-align:center;}
</style>

<a href="javascript:formModal('w','');" class="btn btn-sm btn-secondary btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-check"></i>
	</span>
	<span class="text">아이디생성</span>
</a>


<a href="javascript:ifra_xls();" class="btn btn-sm btn-success btn-icon-split">
	<span class="icon text-white-50">
		<i class="fas fa-download"></i>
	</span>
	<span class="text">엑셀다운로드</span>
</a>


<div class="mo-hand1 mo-hand" style="float:right;text-align:right;">
	<span class="scorll-hand">
		<img src="/adm/img/scroll_hand.gif" style="max-width:100%;">
	</span>
</div>

<div class="tbl-st-wrap01 @tbl-st-wrap" style="clear:both;border-top:0;">
	<div class="@tbl-st-w01 @tbl-st-w @tbl-st mb20 clearfix">
		<table cellpadding='0' cellspacing='0' border='0' width='100%' class='listTable' style='min-width:900px;margin:5px 0;'>
			<tr>
				<th width='70'>번호</th>
				<th>아이디</th>
				<th>이름</th>
				<th>연락처</th>
				<th>이메일</th>
				<th width='180'>가입일시</th>
				<th width='120'>편집</th>
			</tr>
<?
if($total_record){
	$i = $total_record - ($current_page - 1) * $record_count;

	while($row = mysql_fetch_array($result)){

		$uid = $row["uid"];
		$userid = $row["userid"];
		$name = $row["name"];
		$phone = $row["phone"];
		$email = $row['email'];
		$rDate = $row['rDate'];
?>
			<tr class='grayLine'>
				<td><?=$i?></td>
				<td><?=$userid?></td>
				<td><?=$name?></td>
				<td><?=$phone?></td>
				<td><?=$email?></td>
				<td><?=$rDate?></td>
				<td>
					<a href="javascript:formModal('e','<?=$uid?>');" class="btn btn-success btn-circle btn-sm" title='수정'>
						<i class="fas fa-info-circle"></i>
					</a>
					<a href="javascript:checkDel('<?=$name?>','<?=$uid?>');" class="btn btn-danger btn-circle btn-sm" title='삭제'>
						<i class="fas fa-trash"></i>
					</a>
				</td>
			</tr>


<?
		$i--;
	}

}else{
?>
			<tr>
				<td colspan='8' style='padding:50px 0;text-align:center;'>스타일리스트 정보가 없습니다.</td>
			</tr>
<?
}
?>
		</table>
	</div>
</div>

<?
	$fName = 'frm01';
	include '../../module/pageNum.php';
?>

