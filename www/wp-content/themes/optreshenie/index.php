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
						<div class="text_a">
							ГАРАНТИРОВАННЫЕ КЛИЕНТЫ<br>
							из интернета<br>
							или вернем деньги!
						</div>
						<div class="text_b hid_sm">
							Вы получите эффективную рекламу в Яндекс.Директ и Google AdWords<br>
							Вы получите первый "поток" денег для вашего бизнеса за 72 часа<br>
							Распределим бюджет в зависимости от возможностей Вашего бизнеса
						</div>
						<a href="#openModal">
							<div class="button hid_sm">
								Бесплатный аудит<sup>*</sup> Вашей ниши. ЗАКАЗАТЬ
							</div>
							<div class="button hid_lg">
								ЗАКАЗАТЬ БЕСПЛАТНЫЙ АУДИТ
							</div>
						</a>
						<div class="text_c hid_sm">
							<sup>*</sup>Бесплатный аудит:<br>
							1. Анализ целевой аудитории<br>
							2. Анализ конкурентов<br>
							3. Расчет бюджета<br>
						</div>
					</div>
				</div>
			</div>
			<!--openModal-->
			<div id="openModal" class="modalDialog">		
				<div>
					<a href="#close" title="Закрыть" class="close">X</a>
					<h2>Закажите<br>
						бесплатный аудит
					</h2>
					<div class="hr">
					</div>
					<p>Узнайте какие источники рекламы<br>
						действительно приносят Вам прибыль 
					</p>
					<form>				
						<input class="form_i" type="text" name="email" value=""  placeholder="Введите ваш e-mail:" />				
						<input class="form_i" type="text" name="phone" value=""  placeholder="Введите номер телефона:" />												
						<div class="button_forma">Заказать аудит
						</div>				
						<p class="dan">Ваши данные находятся в безопасности<br>
							и не будут переданы третьим лицам </p>
						</form>
					</div>
				</div>
				<?php get_footer(); ?>