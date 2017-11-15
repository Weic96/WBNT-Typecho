<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	</div>
</div>
<footer class="footer">
	<p>Copyright © 2015-2016 <a class="down-a" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>&nbsp;|&nbsp;<a class="down-a" target="_blank" href="http://www.miitbeian.gov.cn/">陇ICP备15000332号</a></p>
	<p>Powered by <a class="down-a" target="_blank" href="http://typecho.org">Typecho</a>,Themes <a class="down-a" target="_blank" href="http://weic96.cn">WBNT-Typecho</a>.</p>
</footer>
<?php $this->footer(); ?>
	<script src="<?php $this->options->themeUrl('js/jquery-2.2.4.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/highlight.pack.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/headroom.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/layout.js'); ?>"></script>
	<script type="text/javascript">
		// Other();
		// $(document).pjax('a', 'body', {fragment:'body', timeout:8000});
		// $(document).on('pjax:send', function() {
		// 	$(".pjax_loading").css("display", "block");
		// });
		// $(document).on('pjax:complete', function() {
		// 	$('.simple-menu').sidr();
		// 	$("#sidr").css("left","");
		// 	$("body").css("left", "");
		// 	Other();
		// 	setTimeout(function () { 
		// 	$(".pjax_loading").css("display", "none");
		// 	}, 2000);
		// });
		var myElement = document.getElementById("header-bar");
		var headroom  = new Headroom(myElement);
		headroom.init();
		Other();
	</script>
	
</body>
</html>
