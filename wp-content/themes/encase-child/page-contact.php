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
		$linkedin_image = get_field("linkedin_image");
		$size = "medium";
		$logo_size = "small";
?>


<div class="contact-page">
		<div class="profile-pic">	
			<?php echo wp_get_attachment_image($david_image, $size); ?>
		</div><!--profile pic-->
	
		<div class="contact-info">
			<?php echo $david_phone; ?><br>
		
			<span style="text-decoration: underline; color: #0000ff;">
				<a style="color: #0000ff; text-decoration: underline; font-size: 2em;" href="mailto:<?php echo $david_email; ?>"> 
					<?php echo $david_email ?>
				</a>
			</span>
		</div><!--contact-info-->
		
	<div class="social-links">	
		<a href="http://www.imdb.com/name/nm8554950/" target="_blank">
			<?php echo wp_get_attachment_image($imdb_image, $logo_size); ?>
		</a>
		<a href="https://www.linkedin.com/in/david-olsen-813a0b30/" target="_blank">
			<?php echo wp_get_attachment_image($linkedin_image, $logo_size); ?>
		</a>
	</div><!--social-links-->

</div><!--contact-page-->



<?php
get_footer(); ?>