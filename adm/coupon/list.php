<?
	$record_count = 30;  //한 페이지에 출력되는 레코드수

	$link_count = 10; //한 페이지에 출력되는 페이지 링크수

	if(!$record_start){
		$record_start = 0;
	}

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	//쿼리조건
	$query_ment = "where c.uid>0";

	//상품명
	if($f_title)	 $query_ment .= " and c.title like '%$f_title%'";

	//아이디
	if($f_userid)	 $query_ment .= " and c.userid like '%$f_userid%'";

	$sort_ment = "order by c.rTime desc";

	$query = "select c.*, m.rCode, m.gender from ks_coupon as c left join ks_member as m on c.userid=m.userid $query_ment $sort_ment";

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
function checkDel(uid){
	GblMsgConfirmBox("해당 쿠폰을 삭제하시겠습니까?\n삭제후에는 복구가 불가합니다.","delOK('"+uid+"')");
}

function delOK(uid){
	form = document.frm01;
	form.type.value = 'del';
	form.uid.value = uid;
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function prdEdit(uid){
	form = document.frm01;
	form.type.value = 'edit';
	form.uid.value = uid;
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}

function prdWrite(){
	form = document.frm01;
	form.type.value = 'write';
	form.uid.value = '';
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}

function orderView(uid){
	form = document.frm01;
	form.type.value = 'view';
	form.uid.value = uid;
	form.target = '';
	form.action = '../orderList/';
	form.submit();
}

function reg_list(){
	form = document.frm01;
	form.type.value = 'list';
	form.target = '';
	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}

function excelModal(){
	$("#multiBox").css({"width":"90%","max-width":"750px"});
	$('#multi_ttl').text('쿠폰등록 엑셀 업로드');
	$('#multiFrame').html("<iframe src='ExcelUpload.php' name='excelFrame' style='width:100%;height:480px;' frameborder='0' scrolling='auto'></iframe>");

	$('.multiBox_open').click();
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
.listTable td p{margin:0;}
</style>

<form name='frm01' id='frm01' method='post' action="<?=$_SERVER['PHP_SELF']?>">
<input type="text" style="display: none;">  <!-- 텍스트박스 1개이상 처리.. 자동전송방지 -->
<input type='hidden' name='type' value=''>
<input type='hidden' name='uid' value=''>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">

<div class="card shadow mb-4" style='margin-top:10px;'>
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
	<?
		include 'search.php';
	?>
	</div>

	<div class="card-body">
		<a href="javascript:prdWrite();" class="btn btn-sm btn-info btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-check"></i>
			</span>
			<span class="text">쿠폰발급</span>
		</a>

		<a href="javascript:excelModal();" class="btn btn-sm btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-upload"></i>
			</span>
			<span class="text">엑셀업로드</span>
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
						<th width='110'>상태</th>
						<th>쿠폰명</th>
						<th>할인금액</th>
						<th width='120'>사용기한</th>
						<th>아이디</th>
						<th>성별</th>
						<th>주문번호</th>
						<th width='120'>발급일</th>
						<th width='120'>편집</th>
					</tr>
<?
	$nTime = time();
	if($total_record){
		$i = $total_record - ($current_page - 1) * $record_count;

		while($row = mysql_fetch_array($result)){

			$uid = $row["uid"];
			$orderNum = $row["orderNum"];
			$title = $row["title"];
			$userid = $row["userid"];
			$price = $row["price"];
			$title = $row["title"];
			$memo = $row["memo"];
			$rCode = $row["rCode"];
			$gender = $row["gender"];

			$eDate = date('Y-m-d',$row['eTime']);			
			$rDate = date('Y-m-d',$row['rTime']);

			if($orderNum){
				$status = '사용';
				//주문내역 uid값
				$orderUid = sqlRowOne("select uid from ks_order where rTime='".$orderNum."'");

			}else{
				$status = '미사용';
				$orderUid = '';

				//만료확인
				if($nTime > $row["eTime"])		$status = '만료';
			}

			$genderTxt = '';
			if($gender == '1')			$genderTxt = "<span class='ico06'>남</span>";
			elseif($gender == '2')	$genderTxt = "<span class='ico09'>여</span>";

			$fc = '#777';

			if($rCode)	$fc = '#17a673';		//추천했으면 초록색
			else{				
				$rChk = sqlRowOne("select count(*) from ks_member where rCode='".$userid."'");
				if($rChk)	$fc = '#17a673';	//추천받았어도 초록색
			}
	?>
					<tr class='grayLine'>
						<td><?=$i?></td>
						<td><?=$status?></td>
						<td style='text-align:left;'><?=$title?></td>
						<td><?=number_format($price)?>원</td>
						<td><?=$eDate?></td>
						<td><span style='color:<?=$fc?>;'><?=$userid?> (<?=$sArr[$userid]?>)</span></td>
						<td><?=$genderTxt?></td>
						<td><?if($orderNum){?><?=$orderNum?> <a href="javascript:orderView('<?=$orderUid?>');" class='btn btn-success btn-circle btn-sm' style='height:1.1rem !important;width:1.1rem !important;font-size:0.75rem !important;' title='주문내역'><i class="fas fa-info-circle"></i></a><?}?></td>
						<td><?=$rDate?></td>
						<td>
							<a href="javascript:prdEdit('<?=$uid?>');" class="btn btn-success btn-circle btn-sm" title='수정'>
								<i class="fas fa-info-circle"></i>
							</a>
							<a href="javascript:checkDel('<?=$uid?>');" class="btn btn-danger btn-circle btn-sm" title='삭제'>
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
						<td colspan='10' style='padding:50px 0;text-align:center;'>쿠폰정보가 없습니다.</td>
					</tr>
	<?
	}
	?>
				</table>
			</div>
		</div>
	</div>
<?
	$fName = 'frm01';
	include '../../module/pageNum.php';
?>
</div>
</form>



