<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-svg lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-svg lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-svg lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<?php // CUSTOMIZATION
	$spine_options = get_option( 'spine_options' );
	$grid_style = $spine_options['grid_style'];
	$spine_color = $spine_options['spine_color'];
	$large_format = $spine_options['large_format'];
	$binder_broken = $spine_options['broken_binding'];
	if ($binder_broken == true) { $binder_broken = " broken"; } else { $binder_broken = ""; }
	?>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?> Washington State University</title>	
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="http://repo.wsu.edu/spine/1/favicon.ico" />
	
	<!-- STYLESHEETS -->
	<link href="http://www.nbj.me/spine/1/styles/styles.css" rel="stylesheet" type="text/css" />
	<!-- Your custom stylesheets here -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
	
	<!-- RESPOND -->
	<meta name="viewport" content="width=device-width, user-scalable=yes">
	
	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://repo.wsu.edu/spine/1/spine.min.js"></script>
	<!-- Your supplementary scripts here -->
	
	<!-- COMPATIBILITY -->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
	
	<!-- DOCS -->
	<link type="text/plain" rel="author" href="http://repo.wsu.edu/spine/1/authors.txt" />
	<link type="text/html" rel="docs" href="http://brand.wsu.edu/media/web" />
	
	<!-- ANALYTICS -->
	<!-- Your analytics code here -->
	
	<?php wp_head(); ?>
	<script>$ = jQuery;</script>

</head>

<body <?php body_class(); ?>>

<div id="jacket">
<div id="binder" class="<?php echo $grid_style; echo $large_format; echo $binder_broken; ?>">