<?php 
	if (have_posts() ): while( have_posts()): the_post();
	the_content();
	endwhile; else: endif; 
	
?>

<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
							<?php if(have_rows('details_section')): ?>
									<?php while(have_rows('details_section')): the_row(); 
											$image = get_sub_field("picture");
											$picture = $image["sizes"]["thumbnail"];
									?>
			<div class="col-md-4">
				<div class="col editContent">	
									
							<span class="numberstep"><img src="<?php echo $picture; ?>"></i></span>
							<h3 class="numbertext"><?php the_sub_field('title');?> </h3>
							<p>
								<?php the_sub_field("content"); ?>
							</p>
						</div>
					</div>
					<?php endwhile; ?>
			<?php endif; ?>
				</div>
			</div>
		</div>