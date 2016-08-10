<?php wp_footer(); ?>
</div>
<footer>
<?php wp_nav_menu(); ?>
Copyright <?=date('Y')?>: <a href="http://www.webpartner.co">WebPartner</a>
</footer>
<script>
$(document).ready(function(){
	$('.widgettitle').parent().addClass('bar-content');
	$('footer').find('ul').addClass('breadcrumb');
});
</script>
</body>
</html>