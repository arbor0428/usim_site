<?
	include 'head.php';

	if(!$GBL_USERID){
		header('Location:/');
		exit;
	}
?>




<div id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
	<?
		include 'sidemenu.php';
	?>



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
			<?
				include 'nav.php';
			?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
							<i class="fas fa-download fa-sm text-white-50"></i> Generate Report
						</a>
						
                    </div>
					 -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						 -->
                        <!-- Earnings (Monthly) Card Example
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						 -->
                        <!-- Earnings (Monthly) Card Example
                        <div class="col-xl-3 col-md-6 mb-4">-->
						<div class="col-sm mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1 text1">현재 프로젝트 진행률
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						-->
                    </div>

                    <!-- Content Row -->

                    <div class="row">

						<!-- Content Column 
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example 
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">전체 프로젝트</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">정부과제1<span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">정부과제2<span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">정부과제3<span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">정부과제4<span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">정부과제5<span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
						-->

						<div class="col-sm mb-4">
							<div class="card shadow mb-4">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-table me-1"></i> 과제리스트</h6>
								</div>
								<div class="card-body">
									<div class="mo-hand1 mo-hand" style="text-align:right;">
										<span class="scorll-hand">
											<img src="img/scroll_hand.gif" style="max-width:100%;">
										</span>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th width="5%" style="vertical-align:middle;">NO</th>
													<th width="15%">과제영역</th>
													<th width="10%">차수</th>
													<th width="15%">과제번호</th>
													<th width="*%">과제명</th>
												</tr>
											</thead>
											<tbody>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
												<tr>	
													<td>1</td>
													<td>음성/자연어</td>
													<td>2</td>
													<td>4</td>
													<td><a href="./write.php">산업정보 연계 주요국 특허 영-한 데이터</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-chart-area me-1"></i> 월별 참여율</h6>
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
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-chart-pie"></i> 진행사항</h6>
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
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text1"></i> 진행중
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text2"></i> 검수중
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text3"></i> 작업완료
                                        </span>
										<span class="mr-2">
                                            <i class="fas fa-circle text4"></i> 검수완료
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?
				include 'footer.php';
			?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Logout Modal 
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
	-->

</div>


<!-- *** 이부분을.... head.php에 선언하려 했으나... 차트 작동이 안되는 문제로.... *** -->


<!-- Page level custom scripts -->
<script src="/js/demo/chart-area-demo.js"></script>
<script src="/js/demo/chart-pie-demo.js"></script>


 <!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>