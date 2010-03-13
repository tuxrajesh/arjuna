<?php
/**
 * @package WordPress
 * @subpackage Arjuna_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" /> 
	<meta name="blogname" content="<?php bloginfo('name'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/jquery-1.4.2.min.js"></script>
	<script language="javascript">
		$(document).ready(function(){
			$("#top-nav > li").find("a").each(function(){
				$href = $(this).attr('href');
				if($href == window.location.href){
					$(this).addClass("current");
				}
			});	
		});
	</script>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div id="page-container">
		<div id="header" class="clearfix">
			<span class="blog-title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></span>
			<span class="blog-description"><?php bloginfo('description'); ?></span>
		</div>
		<div id="top-nav">
			<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li=' ); ?>
			<?php wp_list_categories("orderby=count&order=desc&title_li="); ?>
		</div>