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

		</div><!-- .container-footer
</footer> #colophon-->



</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
	$(window).ready(function(){
		var footerAccord = function() {
			if($(window).width() <= 640){
				$('.recent-activity').find('h1').next().hide();
			} else {
				$('.recent-activity').find('h1').next().show();
			}
			if($(window).width() <= 640){
				$('.recent-activity h1').on('click', function(){
					if(!$(this).hasClass('active')){
						$(this).parents('.recent-activity').find('h1').removeClass('active').next().slideUp();
						$(this).addClass('active').next().slideToggle();
					} else {
						$(this).removeClass('active').next().slideToggle();
					}
				});
			}
		}
		footerAccord();
		$(window).bind('resize', footerAccord);

		var headingButton = function(){
			if($(window).width() <= 640){
				$('.main-navigation').hide();
			} else {
				$('.main-navigation').show();
			}
			if($(window).width() <= 640){
				$('header.site-header .nav-button').on('click', function(){
					if(!$(this).hasClass('active')){
						$(this).addClass('active').next().slideToggle();
					} else {
						$(this).removeClass('active').next().slideToggle();
					}
				});
			}
		}
		headingButton();
		$(window).bind('resize', headingButton);
	});
</script>

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
