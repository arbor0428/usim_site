<?
	$record_count = 30;  //한 페이지에 출력되는 레코드수

	$link_count = 10; //한 페이지에 출력되는 페이지 링크수

	if(!$record_start){
		$record_start = 0;
	}

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	//쿼리조건
	$query_ment = "where uid>0";

	//담당자
	if($f_name)	 $query_ment .= " and (userid like '%$f_name%' or name like '%$f_name%')";

	//작성일 시작
	if($f_sDate){
		$f_sTime = strtotime($f_sDate);
		$query_ment .= " and rTime>='$f_sTime'";
	}

	//작성일 종료
	if($f_eDate){
		$f_eTime = strtotime($f_eDate);
		$query_ment .= " and rTime<='$f_eTime'";
	}

	$sort_ment = "order by rTime desc";

	$query = "select * from ks_review $query_ment $sort_ment";

	$result = mysql_query($query) or die("연결실패");

	$total_record = mysql_num_rows($result);

	$total_page = (int)($total_record / $record_count);

	if($total_record % $record_count){
		$total_page++;
	}

	$query2 = $query." limit $record_start, $record_count";

	$result = mysql_query($query2);
?>

<link href ="/module/lightbox-master/ekko-lightbox.css" rel = "stylesheet" crossorigin="anonymous">
<script src="/module/lightbox-master/ekko-lightbox.js" crossorigin="anonymous"></script>

<script>
function checkDel(uid){
	GblMsgConfirmBox("해당 리뷰를 삭제하시겠습니까?\n삭제후에는 복구가 불가합니다.","delOK('"+uid+"')");
}

function delOK(uid){
	form = document.frm01;
	form.type.value = 'del';
	form.uid.value = uid;
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
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
</script>

<style>
.listTable td{text-align:center;}
.listTable td p{margin:0;}
.btn-success{height:1.1rem !important;width:1.1rem !important;font-size:0.75rem !important;}
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
						<th>작성자</th>
						<th width='100'>별점</th>
						<th>내용</th>
						<th width='140'>주문번호</th>
						<th width='90'>사진</th>
						<th width='180'>작성일시</th>
						<th width='120'>삭제</th>
					</tr>
	<?
	if($total_record){
		$i = $total_record - ($current_page - 1) * $record_count;

		while($row = mysql_fetch_array($result)){

			$uid = $row["uid"];
			$userid = $row["userid"];
			$name = $row["name"];
			$score = $row["score"];
			$ment = $row["ment"];
			$orderNum = $row['orderNum'];
			$rDate =$row['rDate'];

			//주문내역 uid값
			$orderUid = sqlRowOne("select uid from ks_order where rTime='".$orderNum."'");
	?>
					<tr class='grayLine'>
						<td><?=$i?></td>
						<td><?=$name?> (<?=$userid?>)</td>
						<td>
						<?
							for($s=0; $s<$score; $s++){
								echo ("<img src='/images/star.png' alt='star'>");
							}
						?>
						</td>
						<td><?=strip_tags($ment)?></td>
						<td><?=$orderNum?> <a href="javascript:orderView('<?=$orderUid?>');" class='btn btn-success btn-circle btn-sm' title='주문서보기'><i class="fas fa-info-circle"></i></a></td>
						<td>
						<?
							$camera = "<i class='fas fa-camera' style='font-size:1.5em;'></i>";
							for($f=1; $f<=6; $f++){
								$n = sprintf('%02d',$f);
								$upfile = $row['upfile'.$n];
								if($upfile){
						?>
							<a href="/upfile/review/<?=$upfile?>" data-toggle="lightbox" data-gallery="gallery<?=$uid?>" data-title="" data-footer="" data-max-width="1000" data-max-height="1000"><?=$camera?></a>
						<?
									$camera = '';
								}
							}
						?>
						</td>
						<td><?=$rDate?></td>
						<td>
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
						<td colspan='8' style='padding:50px 0;text-align:center;'>작성된 리뷰가 없습니다.</td>
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



<!-- ** Lightbox Script ** -->
<script>
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
	event.preventDefault();
	$(this).ekkoLightbox();
});
</script>