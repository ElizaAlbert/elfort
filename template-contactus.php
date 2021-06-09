<?php
/*
 * Template Name: Contact Us
 */ 

	$image = get_field("header_image");
	get_header(); 
 	get_header("secondary"); ?>

<!----------------------------------- CONTENT  ----------------------------------->

<?php
  if (have_posts()) : while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
?>

<section class="row" style="text-align:center">

	<h1>Find us:</h1>
    <div class="col-lg-6">

		<?php the_field("telefonnummer", "options"); ?></div>
    <div class="col-lg-6">	
		<?php the_field("adress", "options"); ?></div>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035.0912404012256!2d18.055928615779518!3d59.33143051789662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d608c4a660b%3A0xe25921d993abe8b2!2sVasagatan%201%2C%20111%2020%20Stockholm!5e0!3m2!1sen!2sse!4v1623114294922!5m2!1sen!2sse" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
</section>


<?php get_footer(); ?>