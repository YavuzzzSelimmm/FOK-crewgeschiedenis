<?php ob_start(); ?>
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
			var data_type='<?php echo htmlentities($_GET['type']); ?>';
			
			$(document).ready(function() {
				if(document.location.hash) {
					handleLocationHash(document.location.hash);
				}
			});
			
			handleLocationHash = function(location_hash) {
				if(location_hash.length > 0) {
					var hash = location_hash.substr(1);
					var hash_parts = hash.split('&');
					var post_vars = {};
					
					for(var a in hash_parts) {
						var hash_sub_parts = hash_parts[a].split('=', 2);
						if(hash_sub_parts.length === 2) {
							post_vars[hash_sub_parts[0]] = hash_sub_parts[1]
						}
					}
					
					if(post_vars.id != undefined) {
						if(data_type == 'user') {
							selectUser(post_vars.id);
						}
					}
				}
			};
			
			function selectUser(user_id) {
				$("#userselect").hide();
				$("#userinfo").show();
				$("#userid").show(); $("#userid").html(user_id);
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
		elseif( isset( $_GET['admin']) && file_exists( "content/admin/" . str_replace( "../", "", $_GET['admin'] ) . ".php" ) ) {
			require_once( "content/admin/" . $_GET['admin'] . ".php" );
		}
		else
		{ require_once( "content/home.php" ); 	}
		?>

		
		<!-- Bootstrap core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php ob_end_flush(); ?>