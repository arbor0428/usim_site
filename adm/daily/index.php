<?
include '../head.php';
include '../../module/loading.php';

//달력
include '../../module/datepicker/Calendar.php';

if(!$GBL_USERID){
	header('Location:/');
	exit;
}

if(!$f_year)		$f_year = date('Y');
if(!$f_month)	$f_month = date('m');

if(!$f_ym)	$f_ym = date('Y-m');
?>




<div id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<?
			$sideArr[2] = 'active';
			include '../sidemenu.php';
		?>
		
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">
				<?
					include '../nav.php';
				?>
				<!-- Page Content -->
				<div class="container-fluid">
					<form name='frm01' id='frm01' method='post' action='/adm/daily/'>
					<input type='text' style='display:none;'>

                    <!-- Content Row -->
                    <div class="row">
						<div id="areaChartWrap" class="col-xl-8 col-lg-7">
						<?
							//상태별 판정현황
							if(!$f_status)	$f_status = 'A';
							include 'areaChart.php';
						?>
                        </div>
                        <div id="pieChartWrap" class="col-xl-4 col-lg-5">
						<?
							//접수현황
							$chartNum = 1;
							include 'pieChart.php';
						?>
                        </div>
                    </div>

					</form>

					<?
						$countData = "count(status) as dataCnt";	//총 갯수
						$countData .= ", count(case when status='C' then 1 end) as cnt01";						//음성 갯수
						$countData .= ", count(case when status='A' then 1 end) as cnt02";						//양성 갯수
						$countData .= ", count(case when status='T' or status='N' then 1 end) as cnt03";	//오류 갯수

						$f_sTime = strtotime($f_ym."-01");
						$lastDay = date('t', $f_sTime);
						$f_eTime = strtotime($f_ym."-".$lastDay) + 86399;

						$qMent = "where rTime>=$f_sTime and rTime<=$f_eTime";

						$cRow = sqlRow("select $countData from ks_userList $qMent");
						$dataCnt = $cRow['dataCnt'];

						$cnt01 = 0;						$cnt02 = 0;						$cnt03 = 0;
						$bar01 = 0;						$bar02 = 0;						$bar03 = 0;

						if($dataCnt){
							$cnt01 = $cRow['cnt01'];
							$cnt02 = $cRow['cnt02'];
							$cnt03 = $cRow['cnt03'];

							$bar01 = round(($cnt01 / $dataCnt) * 100,1);
							$bar02 = round(($cnt02 / $dataCnt) * 100,1);
							$bar03 = round(($cnt03 / $dataCnt) * 100,1);
						}
					?>


					<h6 class="m-0 font-weight-bold text-info"><i class="far fa-calendar-check"></i> <?=date('Y',$f_sTime)?>년 <?=date('m',$f_sTime)?>월 누계 (<?=number_format($dataCnt)?>건)</h6>
                    <div class="row" style="margin-top:10px;">
					<?
						$sType = 'C';	//음성
						include 'boxChart.php';

						$sType = 'A';	//양성
						include 'boxChart.php';

						$sType = 'E';	//오류
						include 'boxChart.php';
					?>
                    </div>


				</div>
				<!-- End of Page Content -->
			</div>
			<!-- End of Main Content -->			

			<?
				include '../footer.php';
			?>
		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

</div>