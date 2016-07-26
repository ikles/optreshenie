<?php get_header(); ?>
<video autoplay loop poster="img/bg_z.jpg">
	<source src="<? bloginfo('template_url') ?>/video/video_z.ogv.ogv" type='video/ogg; codecs="theora, vorbis"'>
		<source src="<? bloginfo('template_url') ?>/video/video_z.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			<source src="<? bloginfo('template_url') ?>/video/video_z.webm.webm" type='video/webm; codecs="vp8, vorbis"'> 
			</video>
			<div class="body_color">
				<div class="main">
					<div class="header">
						<div class="logo">
						</div>
						<?php dynamic_sidebar('logo_text'); ?>
						<?php dynamic_sidebar('telephone'); ?>					
					</div>
					<div class="image hid_sm">
					</div>
					<div class="text">
						<?php dynamic_sidebar('text_a'); ?>
						<?php dynamic_sidebar('text_b'); ?>					
						<?php dynamic_sidebar('button1'); ?>					
						<?php dynamic_sidebar('text_c'); ?>										
					</div>
				</div>
				</div>	
				<?php dynamic_sidebar('modal-dialog'); ?>		
				<?php get_footer(); ?>