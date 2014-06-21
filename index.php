<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>FOK!crewgeschiedenis</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/navbar-static-top.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<!-- Load Google Charts jsapi -->
		<script type="text/javascript" src="js/jsapi"></script>
		<script type="text/javascript" src="js/googlecharts.js"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				if(document.location.hash) {
					var hash_str_parts = document.location.hash.replace('#','').split('=');
					if(hash_str_parts[0] == 'id') { selectUser(hash_str_parts[1]); }
				}
			});

			function selectUser(user_id) {
				document.location.hash = 'id='+user_id;
				$("#userselect").hide();
				drawItems(user_id);
			}
		</script>
	</head>
	
	<body>
		<!-- Static navbar -->
		<?php require_once('content/navbar.php'); ?>
		
		<?php
		if( isset( $_GET['type']) && file_exists( "content/" . str_replace( "../", "", $_GET['type'] ) . ".php" ) ) {
			require_once( "content/" . $_GET['type'] . ".php" );
		}
		else
		{ require_once( "content/home.php" ); 	}
		?>

		
		<!-- Bootstrap core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>