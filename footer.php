
<!----------------------------------- FOOTER  ----------------------------------->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
					<div class="footer-elfort" data-scrollreveal="enter top over 1.5s after 0.1s">
						 elfort
					</div>
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>
						<div class="footer-subtext" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 LET THE SOUND TREMBLE YOUR BONES
					</div>
	</div>
</div>

<!----------------------------------- SCRIPTS  ----------------------------------->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	

 <?php wp_footer();?>
</body>
</html>