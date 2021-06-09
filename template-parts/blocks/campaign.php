<?php 
// Campaign Block Template

$name = get_field('campaign_name') ?: "Campaign name...";
$details = get_field('details') ?: "Campaign details...";
$code = get_field('code') ?: "Campaign code...";

?> 

<section class="content-block" style="background-color:#EF8354;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> <?php echo $name; ?> <span class="callactionbutton"><i class="fa fa-gift"></i> <?php echo $code; ?></span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>
