<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand-->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
		<div class="sidebar-brand-icon">
			HANPASS
		</div>
	<!--
		<div class="sidebar-brand-text mx-3">PMS</div>
	-->
	</a>
	 

	<!-- Divider -->
	<hr class="sidebar-divider my-0">


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading
	<div class="sidebar-heading">
		Interface
	</div>
	-->


	<?
		if($GBL_MTYPE == 'A')			include '/home/hanpass/www/adm/menuList-A.php';
		elseif($GBL_MTYPE == 'S')	include '/home/hanpass/www/adm/menuList-S.php';
	?>



	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading 
	<div class="sidebar-heading">
		Addons
	</div>

	<!-- Nav Item - Pages Collapse Menu 
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Pages</span>
		</a>
		<div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Login Screens:</h6>
				<a class="collapse-item" href="login.html">Login</a>
				<a class="collapse-item" href="register.html">Register</a>
				<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
				<div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.html">404 Page</a>
				<a class="collapse-item" href="blank.html">Blank Page</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Charts 
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Charts</span></a>
	</li>

	<!-- Nav Item - Tables 
	<li class="nav-item">
		<a class="nav-link" href="tables.html">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
	</li>
	-->


	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

	

</ul>
<!-- End of Sidebar -->

