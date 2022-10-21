<?
	include '../../module/class/class.DbCon.php';
	include '../../module/class/class.Util.php';

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



	$file_name = date('YmdHis');
	$xls_name = '스타일리스트_'.$file_name;
	header("Content-Type: application/vnd.ms-excel"); 
	header("Content-Disposition: attachment; filename=$xls_name.xls"); 
?>






<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


<style>
br{mso-data-placement:same-cell;}
</style>


<table border="1" cellspacing="0" cellpadding="5" style="border-collapse:collapse;" bordercolor="cccccc" frame="hsides">
	<tr align='center'>
		<td bgcolor='f5f5f5'>아이디</td>
		<td bgcolor='f5f5f5'>이름</td>
		<td bgcolor='f5f5f5'>연락처</td>
		<td bgcolor='f5f5f5'>이메일</td>
		<td bgcolor='f5f5f5'>가입일시</td>
	</tr>


<?
$nTime = time();

$no = $total_record;

if($total_record){
	while($row = mysql_fetch_array($result)){
		$userid = $row["userid"];
		$name = $row["name"];
		$phone = $row["phone"];
		$email = $row['email'];
		$rDate = $row['rDate'];
?>

	<tr align='center' height='30'>
		<td><?=$userid?></td>
		<td><?=$name?></td>
		<td style=mso-number-format:'\@'><?=$phone?></td>
		<td><?=$email?></td>
		<td><?=$rDate?></td>
	</tr>
<?
		$no--;
	}
}
?>

</table>