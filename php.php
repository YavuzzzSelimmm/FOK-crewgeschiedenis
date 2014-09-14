<?php
	if( isset( $_GET['user']) && file_exists( "p/" . str_replace( "../", "", $_GET['user'] ) . ".php" ) ) {
	require_once( "user/" . $_GET['user'] . ".php" );
	}
	else
	{
	require_once( "user/index.php" );
	}
?>