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


<div class="contact-page">
	<div class="david-info">
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
	</div><!--david-info-->
		
	<div class="social-links">	
		<a href="http://www.imdb.com/name/nm8554950/" target="_blank">
			<img src="http://localhost:8888/dgolsen/wp-content/uploads/2017/02/imdb_logo-1-e1488300507400.png"/>
		</a>
		<a href="https://www.linkedin.com/in/david-olsen-813a0b30/" target="_blank">
			<img src="http://localhost:8888/dgolsen/wp-content/uploads/2017/02/LinkedIn_logo_initials-e1486922073301.png"/>
		</a>
	</div><!--social-links-->

</div><!--contact-page-->



<?php
get_footer(); ?>