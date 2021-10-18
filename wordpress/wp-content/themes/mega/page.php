<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mega
 */

get_header();
?>

<?php if( !is_front_page() ) { ?>
	<?php if( $post->ID != 121 &&  $post->ID != 202  && $post->ID != 247) { ?>
		<div class="page-head">
			<div class="container">
				<h1><?php wp_title('',true); ?></h1>
			</div>
		</div>
	<?php } ?>
<?php } ?>

			<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>
 
		
			
		
			
	
<?php
get_footer();
