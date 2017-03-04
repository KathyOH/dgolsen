<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package encase
 */

get_header(); ?>

	<?php
		$david_image = get_field("david_image");
		$david_phone = get_field("david_phone");
		$david_email = get_field("david_email");
		$imdb_image = get_field("imdb_image");	
		$size = "medium";
?>

<p>Is this working?</p>

<div class="contact-page">
	
	
	
	<?php echo wp_get_attachment_image($david_image, $size); ?>
	<?php echo $david_phone; ?><br>
	<span style="text-decoration: underline; color: #0000ff;">
		<a style="color: #0000ff; text-decoration: underline; font-size: 75%" 
						   href="mailto:<?php echo $david_email; ?>"> 
				<?php echo $david_email ?>
						</a></span>
	
		
		<?php echo $imdb_image ?>
	
	

</div><!--contact-page-->



<?php
get_footer(); ?>