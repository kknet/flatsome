<?php
/**
 * The Template for previewing blocks.
 *
 * @package flatsome
 */

show_admin_bar(false);
if ( ! current_user_can( 'edit_posts' ) ) die;
?>
<!DOCTYPE html>
<!--[if lte IE 9 ]><html class="ie lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('flatsome_before_page' ); ?>
<?php do_action('flatsome_after_header'); ?>
<div id="wrapper">

	<div id="main" class="<?php flatsome_main_classes();  ?>">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>

	</div><!-- #main -->

</div><!-- #wrapper -->
<?php do_action( 'flatsome_after_page' ); ?>

<?php wp_footer(); ?>
<style>.demo_store{display: none!important} html{margin-top: 0px!important}</style>

</body>
</html>