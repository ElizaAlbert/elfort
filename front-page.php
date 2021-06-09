<?php
	$image = get_field('header_image');
	$picture = $image['sizes']['2048x2048'];
	get_header();
?> 

<div class="item header margin-top-0" style="background-image: url('<?php echo $picture; ?>')">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						 <?php the_field("header_image_text"); ?>
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 <?php the_field("header_image_sub_text"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<?php get_template_part("/section", "content");?>

<?php
    $args = array(
    'post_type' => 'product',
    'posts_per_page' => 6,
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'tax_query' => array( 
        array(
          'taxonomy' => 'product_cat',
          'field' => 'slug',
          'terms' => array( 'catalogues' ),
          'operator' => 'NOT IN',
        )
    ),
    );
    $bestSelling = new WP_Query( $args );  ?>

	
<!----------------------------------- BEST SELLING ITEMS ----------------------------------->

<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems"><?php the_field("product_title"); ?></h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
<?php while ( $bestSelling->have_posts() ) : $bestSelling->the_post(); global $product;?>
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Description:</h3>
							<p>
								 <?php the_content(); ?>
							</p>
							<p>
								    <a class="learn-more detailslearn" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Details</a>
							</p>
						</div>
						<span class="maxproduct"> 
<?php if (has_post_thumbnail( $bestSelling->post->ID )) echo get_the_post_thumbnail($bestSelling->post->ID, 'shop_catalog'); 
else echo '<p>No image found</p>'; ?></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1><?php the_title(); ?></h1>
						</a>
						<span class="price">
						<span class="edd_price"><?php echo $product->get_price_html(); ?></span>
						</span>
					</div>
				</div>
			</div>
<?php endwhile; ?>
        <?php wp_reset_query(); ?>
</div>
</section>


<!----------------------------------- BUTTON  ----------------------------------->
<div class="item content">
	<div class="container text-center">
		<a href="<?php the_permalink("shop"); ?>" class="homebrowseitems"><?php the_field("button_text"); ?>
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
<br/>


<!----------------------------------- AREA  ----------------------------------->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-microphone infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">General Questions</h1>
					<p>
						 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quasi? Explicabo, veniam earum magnam voluptates dolorum, deleniti enim corrupti eligendi necessitatibus iste iure quam facere porro ex vero dolor ducimus.
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-comments infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Support</h1>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est distinctio neque facilis! Omnis esse consectetur consequuntur accusamus. Ipsam, ipsa assumenda sequi culpa repudiandae explicabo illum voluptate non, facilis rerum iste.
					</p>
					<p class="text-center">
						<a href="#">Get Support</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-bullhorn infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Reclamation</h1>
					<p>
						 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id at ipsa nesciunt excepturi aspernatur velit recusandae quod unde deserunt impedit porro reiciendis, distinctio sed. Ea, magnam laudantium. Eaque, mollitia in?
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!----------------------------------- TESTIMONIAL  ----------------------------------->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Awesome Support</span></h2>
					<img src="" alt="Awesome Support">
					<p>
						 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cumque excepturi, quam nisi cum velit laudantium, nulla aspernatur eius at iste esse laborum aliquam accusamus maiores distinctio incidunt, ex aut?
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
  if (have_posts()) : while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
?>
        </div>



<?php get_footer(); ?>