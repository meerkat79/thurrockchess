<?php wp_footer(); ?>
		</section>

		<div class="clearfix"></div>

		<footer class="row">
			<div class="col-md-12 col-sm-12 col-xs-12"><?php wp_nav_menu(); ?></div>
			<div class="col-md-12 col-sm-12 col-xs-12">Copyright <?=date('Y')?>: <a href="http://www.webpartner.co">WebPartner</a></div>
		</footer>

	<script>
	$(document).ready(function(){
		$('.widgettitle').parent().addClass('bar-content col-md-4');
		$('footer').find('ul').addClass('breadcrumb');
	});
	</script>

	</body>
</html>