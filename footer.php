<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ssnblog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-footer">
			<h3 class="h3 footer__header">Follow Street Support Network</h3>
			<ul class="footer__social-list">
				<li class="footer__social-item"><a class="facebook-follow" href="https://www.facebook.com/streetsupport"></a></li>
				<li class="footer__social-item"><a class="twitter-follow" href="https://twitter.com/streetsupportuk"></a></li>
			</ul><p class="footer__copy">© 2016 Street Support Network</p>
		</div>
	</footer>
</div><!-- #page -->
<div class="nav__overlay js-nav-overlay"></div>
<?php wp_footer(); ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
