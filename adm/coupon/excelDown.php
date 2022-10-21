<?
	include '../../module/class/class.DbCon.php';
	include '../../module/class/class.Util.php';
	include '../../module/lib.php';

	//쿼리조건
	$query_ment = "where uid>0";

	//상품명
	if($f_title)	 $query_ment .= " and title like '%$f_title%'";

	//아이디
	if($f_userid)	 $query_ment .= " and userid like '%$f_userid%'";

	$sort_ment = "order by rTime desc";

	$query = "select * from ks_coupon $query_ment $sort_ment";

	$result = mysql_query($query) or die("연결실패");

	$total_record = mysql_num_rows($result);

	$total_page = (int)($total_record / $record_count);



	$file_name = date('YmdHis');
	$xls_name = '쿠폰내역_'.$file_name;
	header("Content-Type: application/vnd.ms-excel"); 
	header("Content-Disposition: attachment; filename=$xls_name.xls"); 
?>






<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


<style>
br{mso-data-placement:same-cell;}
</style>


<table border="1" cellspacing="0" cellpadding="5" style="border-collapse:collapse;" bordercolor="cccccc" frame="hsides">
	<tr align='center'>
		<td bgcolor='f5f5f5'>상태</td>
		<td bgcolor='f5f5f5'>쿠폰명</td>
		<td bgcolor='f5f5f5'>아이디</td>
		<td bgcolor='f5f5f5'>이름</td>
		<td bgcolor='f5f5f5'>할인금액</td>
		<td bgcolor='f5f5f5'>주문번호</td>
		<td bgcolor='f5f5f5'>사용기한</td>
		<td bgcolor='f5f5f5'>발급일</td>
	</tr>



<?
$no = $total_record;
if($total_record){
	while($row = mysql_fetch_array($result)){
		$orderNum = $row["orderNum"];
		$title = $row["title"];
		$userid = $row["userid"];
		$price = $row["price"];
		$title = $row["title"];
		$memo = $row["memo"];

		$eDate = date('Y-m-d',$row['eTime']);
		
		$rDate = date('Y-m-d',$row['rTime']);

		if($orderNum){
			$status = '사용';

		}else{
			$status = '미사용';
			$orderNum = '';
		}
?>

	<tr align='center' height='30'>
		<td><?=$status?></td>
		<td><?=$title?></td>
		<td><?=$userid?></td>
		<td><?=$sArr[$userid]?></td>
		<td style=mso-number-format:'\@'><?=number_format($price)?></td>
		<td><?=$orderNum?></td>
		<td><?=$eDate?></td>
		<td><?=$rDate?></td>
	</tr>
<?
		$no--;
	}
}
?>

</table>