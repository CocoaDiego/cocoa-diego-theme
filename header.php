<?php
/**
 * @package WordPress
 * @subpackage CocoaDiego
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
			<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

			<!-- Blueprint Framework CSS -->
			<!-- style type="text/css" media="screen, projection">@import url( <?php bloginfo('template_directory'); ?>/css/blueprint/screen.css );</style -->
			<!-- style type="text/css" media="print">@import url( <?php bloginfo('template_directory'); ?>/css/blueprint/print.css );</style -->
			<!--[if IE]>
				<style type="text/css" media="screen, projection">@import url( <?php bloginfo('template_directory'); ?>/css/blueprint/ie.css );</style>
			<![endif]-->
			<!-- Style -->
			
			<style type="text/css" media="screen">@import url( <?php bloginfo('stylesheet_url'); ?> );</style>			
			<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
			<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
			<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			<?php wp_get_archives('type=monthly&format=link'); ?>

			<style type="text/css">img{behavior:url(<?php bloginfo('template_directory'); ?>/lib/iepngfix.htc);}</style>
			
			<?php wp_head(); ?>

	</head>
<body id="page2" onload="new ElementMaxHeight();MM_preloadImages('<?php bloginfo('template_directory'); ?>/images/m1_act.gif','<?php bloginfo('template_directory'); ?>/images/m2_act.gif','<?php bloginfo('template_directory'); ?>/images/m3_act.gif','<?php bloginfo('template_directory'); ?>/images/m4_act.gif','<?php bloginfo('template_directory'); ?>/images/m5_act.gif','<?php bloginfo('template_directory'); ?>/images/m6_act.gif','<?php bloginfo('template_directory'); ?>/images/m7_act.gif')">
<div class="main">
<!--==========header=========== -->
	<div id="header">
		<div class="head"><h1>Real Estate</h1></div>
  		<!-- GLOBAL MENU -->
		<?php require_once('globalmenu.php'); ?>
	</div>
<!--========//header=========== -->
<!-- -->
<!--==========content=========== -->
	<div id="content">
		<div class="container">
<!-- end header -->