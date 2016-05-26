	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables/js/dataTables.responsive.js"></script>
	<script src="/assets/js/table-manage-responsive.demo.min.js"></script>
	<script src="/assets/js/dashboard.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
<?php

// Inits
$initApp = 
	"<script>
		$(document).ready(function() {
			App.init();
		});
	</script>";
	
$initDashboard = 
	"<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>";
			
			
$initTableResponsive =
	"<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
		});
	</script>";
	

    if	($_GET['p'] == 'user')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'users')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'fok')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'foks')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'forum')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'forums')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'frontpage')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'frontpages')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'game')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'games')  { echo $initTableResponsive; }
elseif	($_GET['p'] == 'sport')  { echo $initTableResponsive; } 	
elseif	($_GET['p'] == 'sports')  { echo $initTableResponsive; }
elseif	($_GET['p'] == 'jubileums')  { echo $initApp; } 	
else	{ echo $initDashboard; } 

?>