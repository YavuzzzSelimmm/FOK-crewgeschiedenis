<!DOCTYPE html>
<html>
    <head>
        <title>FOK!crewgeschiedenis</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="follow, index" />
		
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/isotope.css" />
        <link rel="stylesheet" href="css/color_scheme.css" />
        <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
	<!--[if lte IE 8]>
	    <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
	<![endif]-->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome-ie7.css" />
        <link rel="stylesheet" href="css/flexslider.css" />
		
        <meta name="google" value="notranslate" />
    </head>
    <body>
	
        <div class="top_line"></div>

        <header>
            <div class="container">
                <div class="row">
<?php include("content/header.php"); ?>
                </div>
            </div>          
        </header>
	
        <div class="main-content">
            <div class="container">
                <div class="row show-frid">
                    <div class="span12">

<?php include("content/nav.php") ?>
                    </div>
                </div>
<?php
	if( isset( $_GET['type']) && file_exists( "content/type/" . str_replace( "../", "", $_GET['type'] ) . ".php" ) ) {
	require_once( "content/type/" . $_GET['type'] . ".php" );
	}
	else
	{
	echo "";
	}
?>
<?php
	if( isset( $_GET['user']) && file_exists( "content/user/" . str_replace( "../", "", $_GET['user'] ) . ".php" ) ) {
	require_once( "content/user/" . $_GET['user'] . ".php" );
	}
	else
	{
	echo "";
	}
?>
<?php
	if( isset( $_GET['forum']) && file_exists( "content/forum/" . str_replace( "../", "", $_GET['forum'] ) . ".php" ) ) {
	require_once( "content/forum/" . $_GET['forum'] . ".php" );
	}
	else
	{
	echo "";
	}
?>
            </div>
        </div>
	
<?php include("content/footer.php"); ?>	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8288192-8', 'zevkiselim.nl');
  ga('send', 'pageview');

</script>
	</body>
</html>