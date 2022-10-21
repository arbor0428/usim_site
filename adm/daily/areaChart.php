<?
//제이쿼리 로드함수를 이용해 페이지가 로딩된 경우
if($_GET['jQueryLoad']){
	include '../../module/class/class.DbCon.php';
	include '../../module/datepicker/Calendar.php';
}

$mtArr = Array();
$mTot = 0;

//해당연월의 일별 현황
$fDay = $f_ym."-";
$firstTime = strtotime($fDay."01");				//선택한 월의 1일(타임값)
$lastDay = date('t', $firstTime);

$xList = '';		//그래프 x값
$dataList = '';	//그래프 데이터
$maxTicksLimit = '1';	//그래프 y최대값
if($f_status == 'E')		$qMent = " where (status='T' or status='N')";
elseif($f_status)			$qMent = " where status='$f_status'";

for($i=1; $i<=$lastDay; $i++){
	if($i > 1)	{
		$xList .= ',';
		$dataList .= ',';
	}
	$xList .= '"'.$i.'일"';

	$f_sTime = strtotime($fDay.$i);	//일별(타임값)
	$f_eTime = $f_sTime + 86399;	//일별(타임값)

	$mtCnt = sqlRowOne("select count(*) from ks_userList $qMent and rTime>=$f_sTime and rTime<=$f_eTime");

	$dataList .= $mtCnt;
	$mTot += $mtCnt;

	if($mtCnt > $maxTicksLimit)	$maxTicksLimit = $mtCnt;
}

$maxTicksLimit += 1;
if($maxTicksLimit > 10)	$maxTicksLimit = 10;

if($f_status == 'C'){
	$areaTitle = '음성 판정 현황 ('.number_format($mTot).'건)';
	$ct = 'primary';
	$lineColor = '#4e73df';
	$areaColor = 'rgba(78, 115, 223, 0.05)';

}elseif($f_status == 'A'){
	$areaTitle = '양성 판정 현황 ('.number_format($mTot).'건)';
	$ct = 'danger';
	$lineColor = '#e74a3b';
	$areaColor = 'rgba(255, 100, 90, 0.05)';

}elseif($f_status == 'E'){
	$areaTitle = '오류 현황 ('.number_format($mTot).'건)';
	$ct = 'secondary';
	$lineColor = '#858796 ';
	$areaColor = 'rgba(125, 125, 150, 0.05)';
}
?>

<script>
$(function(){
	$('#f_status').change(function(){
		f_status = $(this).val();
		f_ym = $('#f_ym').val();

		$('#areaChartWrap').load('areaChart.php?jQueryLoad=1&f_status='+f_status+'&f_ym='+f_ym);
	});

	$('#f_ym').change(function(){
		$('#frm01').submit();
	});
});
</script>

<div class="card shadow mb-4">
	<!-- Card Header - Dropdown -->
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-<?=$ct?>"><i class="fas fa-chart-area me-1"></i> <?=$areaTitle?></h6>
		<div>
			<select name="f_status" id="f_status" class="form-control" style='width:120px;display:inline-block;'>
				<option value='C' <?if($f_status == 'C'){echo 'selected';}?>>음성 (C)</option>
				<option value='A' <?if($f_status == 'A'){echo 'selected';}?>>양성 (A)</option>
				<option value='E' <?if($f_status == 'E'){echo 'selected';}?>>오류 (E)</option>
			</select>
			<input type="text" name="f_ym" id="f_ym" value="<?=$f_ym?>" class="form-control monthpicker" style="display:inline-block;width:140px;">
		</div>

	<!--
		<div class="dropdown no-arrow">
			<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
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
		<div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
			<canvas id="myAreaChart" width="1037" height="320" style="display: block; width: 1037px; height: 320px;" class="chartjs-render-monitor"></canvas>
		</div>
	</div>
</div>

<script>
function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    //labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
	labels: [<?=$xList?>],
    datasets: [{
      label: "",
      lineTension: 0.1,
      backgroundColor: "<?=$areaColor?>",
      borderColor: "<?=$lineColor?>",
      pointRadius: 3,
      pointBackgroundColor: "<?=$lineColor?>",
      pointBorderColor: "<?=$lineColor?>",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "<?=$lineColor?>",
      pointHoverBorderColor: "<?=$lineColor?>",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      //data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
	  data: [<?=$dataList?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: <?=$lastDay?>
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: <?=$maxTicksLimit?>,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            //return '$' + number_format(value);
			 return '' + number_format(value) + '명';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
//          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
			return number_format(tooltipItem.yLabel)+'명';
        }
      }
    }
  }
});

</script>