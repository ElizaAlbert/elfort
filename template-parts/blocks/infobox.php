<?php 
// Information Box Block Template

$icon = get_field('icon') ?: "Icon...";
$title = get_field('title') ?: "Title...";
$text = get_field('text') ?: "Text...";
$link = get_field('link') ?: "Link...";
?>

<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="<?php echo $icon; ?>"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle"><?php echo $title; ?></h1>
					<p>
                        <?php echo $text; ?>
					</p>
					<p class="text-center">
						<a href="#"><?php echo $link; ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
