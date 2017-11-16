<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<div class="wrapper">
<table width="900" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td height="20" align="left" valign="top">&nbsp;</td>
						 </tr>
						  <tr>
							<td align="left" valign="top">	</td>
						  </tr>
						  <tr>
							<td width="700" align="left" valign="top"><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="" width="301" height="64" border="0" /></a></td>
							<td width="210" align="right" valign="top">
								<table width="210" border="0" cellspacing="0" cellpadding="0">
								  <tr>
									<td  width="50"height="20" align="left" valign="top">&nbsp;</td>
									<td width="130" align="left" valign="top">&nbsp;</td>
								  </tr>
								  <tr>
									<td width="60" align="left" valign="top"><img src="<?php bloginfo('template_directory'); ?>/images/mail.jpg" alt=""  /></td>
									<td width="150" align="left" valign="top" class="mailb">Mail :<br/><span class="mail"><a href="mailto:info@auromaxadvertising.in">info@auromaxadvertising.in</a></span> </td>
								  </tr>
								</table>							</td>
						  </tr>
					  </table>
</div>
