<!-- Footer Section -->
<?php
$appointment_options = theme_setup_data();
$footer_setting      = wp_parse_args(get_option('appointment_options', array()), $appointment_options);

// if(!empty($_GET) && count($_GET) > 0){
// 	echo '<img width="100%" src="http://www.planmob.hexti.com.br/wp-content/uploads/2017/06/rodapé-pb.jpg" alt="">';
// }else{
// 	echo '<img width="100%" src="http://www.planmob.hexti.com.br/wp-content/uploads/2017/06/rodapé.jpg" alt="">';
// }

if (is_active_sidebar('footer-widget-area')) {?>
	<div class="footer-section">

								<div class="container">
									<div class="row footer-widget-section">

	<?php dynamic_sidebar('footer-widget-area');}?>
<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /Footer Section -->
<div class="clearfix"></div>
<!-- Footer Copyright Section -->
<div class="footer-copyright-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="footer-copyright">
<?php if ($footer_setting['footer_menu_bar_enabled'] == 0) {?>
												<?php echo $footer_setting['footer_copyright_text'];?>
	</a>
	<?php }// end if ?>
</div>
			</div>
<?php if ($footer_setting['footer_social_media_enabled'] == 0) {
	$footer_facebook   = $footer_setting['footer_social_media_facebook_link'];
	$footer_twitter    = $footer_setting['footer_social_media_twitter_link'];
	$footer_linkdin    = $footer_setting['footer_social_media_linkedin_link'];
	$footer_googleplus = $footer_setting['footer_social_media_googleplus_link'];
	$footer_skype      = $footer_setting['footer_social_media_skype_link'];
	?>
	<div class="col-md-4">
										<ul class="footer-contact-social">
	<?php if ($footer_setting['footer_social_media_facebook_link'] != '') {?>
																			<li class="facebook"><a href="<?php echo 'https://www.facebook.com/stransthe'?>" <?php if ($footer_setting['footer_facebook_media_enabled'] == 1) {echo "target='_blank'";}?>><i class="fa fa-facebook"></i></a></li>
		<?php }if ($footer_setting['footer_social_media_twitter_link'] != '') {?>
																			<li class="twitter"><a href="<?php echo 'https://twitter.com/strans_teresina';?>" <?php if ($footer_setting['footer_twitter_media_enabled'] == 1) {echo "target='_blank'";}?>><i class="fa fa-twitter"></i></a></li>
		<?php }if ($footer_setting['footer_social_media_linkedin_link'] != '') {?>
																			<li class="linkedin"><a href="<?php echo 'https://www.instagram.com/strans.the/';?>" <?php if ($footer_setting['footer_linkedin_media_enabled'] == 1) {echo "target='_blank'";}?>><i class="fa fa-instagram"></i></a></li>
		<?php }if ($footer_setting['footer_social_media_googleplus_link'] != '' && 1 > 2) {?>
																			<li class="googleplus"><a href="<?php echo esc_url($footer_googleplus);?>" <?php if ($footer_setting['footer_googleplus_media_enabled'] == 1) {echo "target='_blank'";}?>><i class="fa fa-google-plus"></i></a></li>
		<?php }if ($footer_setting['footer_social_media_skype_link'] != '' && 1 > 2) {?>
																			<li class="skype"><a href="<?php echo esc_url($footer_skype);?>" <?php if ($footer_setting['footer_skype_media_enabled'] == 1) {echo "target='_blank'";}?>><i class="fa fa-skype"></i></a></li>
		<?php }?>
	</ul>
										</div>
	<?php }?>
</div>
	</div>
</div>
<!-- /Footer Copyright Section -->
<!--Scroll To Top-->
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
<?php wp_footer();?>
</body>
</html>