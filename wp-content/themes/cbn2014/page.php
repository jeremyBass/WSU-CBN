<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id="primary" class="content-area row">
	<div id="content" class="site-content <?=(is_front_page()?"eight":"twelve")?> twelve columns" role="main">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php edit_post_link( __( 'Edit', 'cbn2014' ), '<span class="edit-link">', '</span>' ); ?>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'cbn2014' ) . '</span>', 
												'after' => '</div>',
												'link_before' => '<span>',
												'link_after' => '</span>' ) ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post -->
		<?php endwhile; ?>
	</div><!-- #content -->
	<?php if ( is_front_page() ) { //NOTE this is to be replaced by the ad manager ?>
		<!--<aside id="adspace_home" class="four columns">
			<a href="https://www.applyonlinenow.com/USCCapp/Ctl/entry?sc=VABJ6K&mboxSession=1357690082163-219380"><img src="/wp-content/themes/cbn/img/sponsors/AlaskaAirlines.png" alt="Alaska Airlines Cougar Visa" title="Alaska Airlines Cougar Visa"></a>
			<a href="http://www.ryanswansonlaw.com/"><img src="/wp-content/themes/cbn/img/sponsors/RyanSwanson.png" alt="Ryan, Swanson &amp; Cleveland, PLLC" title="Ryan, Swanson &amp; Cleveland, PLLC"></a>
			<a href="http://www.griffinmaclean.com/"><img src="/wp-content/themes/cbn/img/sponsors/GriffinMacLean.jpg" alt="Griffin MacLean Insurance Brokers" title="Griffin MacLean Insurance Brokers"></a>
			<a href="http://omba.wsu.edu/landingform_jun2011_b/?Access_Code=WSU-MBA-ALUMBANFEB2013&utm_source=ALUMBANFEB2013&utm_medium=internetadvertising"><img src="/wp-content/themes/cbn/img/sponsors/OnlineMBA.png" alt="WSU Online MBA Program" title="WSU Online MBA Program"></a>
			<a href="https://www.libertymutual.com/wsu-alumni"><img src="/wp-content/themes/cbn/img/sponsors/LibertyMutual.png" alt="liberty mutual" title="liberty mutual"></a>
		</aside>--><!--#right-col-->
	<?php }  // This is a homepage  ?>
</div><!-- #primary -->
    

    
    
<?php get_sidebar(); ?>

<?php if ( !is_front_page() ) { ?>
<div style="clear:both;"></div>
<div id="details">
    <hr/>
	<p><b>PLEASE NOTE:</b></p>
    <p> Cougar-owned or -managed businesses are defined as businesses clearly owned by alumni or friends of WSU, or a business where alumni are the principal executive(s) in a leadership role. Businesses in question will be reviewed and considered by the WSUAA Executive Committee. The WSUAA reserves the right to determine if a business is deemed appropriate for the WSU alumni audience.</p>
</div>
<?php }  // This is a homepage  ?>
<?php get_footer(); ?>