<?
//제이쿼리 로드함수를 이용해 페이지가 로딩된 경우
if($_GET['jQueryLoad']){
	include '../../module/class/class.DbCon.php';
}

	$countData = "count(status) as dataCnt";	//총 갯수
	$countData .= ", count(case when status='C' then 1 end) as cnt01";							//음성 갯수
	$countData .= ", count(case when status='A' then 1 end) as cnt02";							//양성 갯수
	$countData .= ", count(case when status='T' or status='N' then 1 end) as cnt03";		//오류 갯수

	//월을 선택한 경우
	if($f_month){
		$fDay = $f_year."-".$f_month."-";
		$f_sTime = strtotime($fDay."01");				//선택한 월의 1일(타임값)
		$f_eDate = $fDay.date('t', $f_sTime);
		$f_eTime = strtotime($f_eDate) + 86399;	//선택한 월의 마지막일(타임값)

	}else{
		$f_sTime = strtotime($f_year."-01-01");
		$f_eTime = strtotime($f_year."-12-31") + 86399;
	}

	$qMent = "where rTime>=$f_sTime and rTime<=$f_eTime";

	$cRow = sqlRow("select $countData from ks_userList $qMent");
	$dataCnt = $cRow['dataCnt'];

	if($dataCnt){
		$cnt01 = $cRow['cnt01'];
		$cnt02 = $cRow['cnt02'];
		$cnt03 = $cRow['cnt03'];

		$bar01 = round(($cnt01 / $dataCnt) * 100,1);
		$bar02 = round(($cnt02 / $dataCnt) * 100,1);
		$bar03 = round(($cnt03 / $dataCnt) * 100,1);
	}
?>

<script>
$(function(){
	$('#f_month').change(function(){
		f_year = $('#f_year').val();
		f_month = $(this).val();

		$('#pieChartWrap').load('pieChart.php?jQueryLoad=1&f_year='+f_year+'&f_month='+f_month);
	});
});
</script>

<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-info"><i class="fas fa-chart-pie"></i> 월별 접수 현황 (<?=number_format($dataCnt)?>건)</h6>
			<select name="f_month" id="f_month" class="form-control" style='width:120px;'>
				<option value=''><?=$f_year?>년</option>
			<?
				for($i=1; $i<=12; $i++){
					if($f_month == $i)	$chk = 'selected';
					else					$chk = '';
			?>
				<option value="<?=$i?>" <?=$chk?>><?=$i?>월</option>
			<?
				}
			?>
			</select>
	<!--
		<div class="dropdown no-arrow">
			<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
				aria-labelledby="dropdownMenuLink">
				<div class="dropdown-header">Dropdown Header:</div>
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	-->

	</div>
	<!-- Card Body -->
	<div class="card-body">
		<div class="chart-pie pt-4 pb-2">
			<canvas id="PieChart-<?=$chartNum?>"></canvas>
		</div>

		<div class="mt-4 text-center small">
			<span class="mr-2">
				<i class="fas fa-circle text-primary"></i> 음성 (<?=number_format($cnt01)?>건)
			</span>
			<span class="mr-2">
				<i class="fas fa-circle text-danger"></i> 양성 (<?=number_format($cnt02)?>건)
			</span>
			<span class="mr-2">
				<i class="fas fa-circle text-secondary"></i> 오류 (<?=number_format($cnt03)?>건)
			</span>
		</div>
	</div>
</div>

<?
	if($dataCnt){
?>
<script>
$(document).ready(function(){
	var ctx = document.getElementById("PieChart-<?=$chartNum?>");
	var PieChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
		labels: ["음성", "양성", "오류"],
		cnt:["<?=number_format($cnt01)?>","<?=number_format($cnt02)?>","<?=number_format($cnt03)?>"],
		datasets: [{
			data: [<?=$bar01?>,<?=$bar02?>,<?=$bar03?>],
			backgroundColor: ['#4e73df','#e74a3b','#858796'],
			hoverBackgroundColor: ['#224abe','#be2617','#60616f'],
			hoverBorderColor: "rgba(234, 236, 244, 1)",
		}],
	},
	options: {
		maintainAspectRatio: false,
		tooltips: {
			backgroundColor: "rgb(255,255,255)",
			bodyFontColor: "#858796",
			borderColor: '#dddfeb',
			borderWidth: 1,
			xPadding: 15,
			yPadding: 15,
			displayColors: false,
			caretPadding: 10,
			callbacks: {
				label: function(tooltipItem, data) {
					var label = data.labels[tooltipItem.index];
					return label+' : '+data.cnt[tooltipItem.index]+'건';
				}
			}
		},
		legend: {
			display: false
		},
		cutoutPercentage: 20,
		},
	});

	$("#eNum-<?=$chartNum?>").text("<?=number_format($cnt03)?>");

	usNum = number_format_reset($("#eNum-US").text());
	epNum = number_format_reset($("#eNum-EP").text());
	cnNum = number_format_reset($("#eNum-CN").text());
	jpNum = number_format_reset($("#eNum-JP").text());

	total = parseInt(usNum) + parseInt(epNum) + parseInt(cnNum) + parseInt(jpNum);

	$("#eNum-total").text(number_format(total));
});
</script>
<?
	}else{
?>
	<script>
$(document).ready(function(){
	var ctx = document.getElementById("PieChart-<?=$chartNum?>");
	var PieChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
		labels: ["No Data"],
		datasets: [{
			data: [100],
			backgroundColor: ['#eaecf4'],
			hoverBackgroundColor: ['#eaecf4'],
			hoverBorderColor: "rgba(234, 236, 244, 1)",
		}],
	},
	options: {
		maintainAspectRatio: false,
		tooltips: {
			backgroundColor: "rgb(255,255,255)",
			bodyFontColor: "#858796",
			borderColor: '#dddfeb',
			borderWidth: 1,
			xPadding: 15,
			yPadding: 15,
			displayColors: false,
			caretPadding: 10,
			enabled:false
		},
		legend: {
			display: false
		},
		cutoutPercentage: 20,
		},
	});
});
</script>
<?
	}
?>