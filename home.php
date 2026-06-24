  <?php 
    // template Name: Home;
?>

<?php get_header(); ?>

<!-- =============== main-slider =============== -->
	<section class="s-main-slider">
		<div class="main-slide-navigation"></div>
		<ul class="main-soc-list">
			<li><a target="_blank" href="https://www.tiktok.com/@inmi.by">Tiktok</a></li>
			<li><a target="_blank" href="https://www.youtube.com/@inmi_bioproduct">YuoTube</a></li>

			<li><a target="_blank" href="https://invite.viber.com/?g2=AQBraLupPo8rSk2YPoN%2Bzo70k8QbxSBkOzKJG%2BMsZDnRDZS2JDAB2O%2FKSmRkYEkg&lang=ru">Viber</a></li>
			
		</ul>
		<div class="main-slider">
			<!-- <div class="main-slide">
				
					<div class="main-slide-info">
						<h2 class="title">Антойл+ (лидер продаж)</h2>
						<p>Для очистки коммунально-бытовых сточных вод – биоактиватор для очистных сооружений любого типа</p>
						<div class="slide-btn more-box"><a href="#">Подробнее</a></div>
						
					</div>
					<div class="slide-img-cover">
						<a href="#" class="lable-bike">
							<div class="lable-bike-img"><img src="assets/my-img/clean.png" alt="img"></div>
							<div class="lable-bike-item">
								<div class="model">Для физ/юр лиц</div>
								<div class="price">15 BYN</div>
							</div>
						</a>
						<img src="assets/my-img/антойл+.png" alt="img" class="slide-img">
					</div>
				</div>
			</div> -->
			

			<?php
				global $post;
				
				$myposts = get_posts([ 
					'numberposts' => -1,
					'category_name'    => 'slider'
				]);
				
				if( $myposts ){
					foreach( $myposts as $post ){
						setup_postdata( $post );
				?>
					<div class="main-slide">
					
						<div class="container">
							<div class="main-slide-info">
								<h2 class="title"><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<ul class="main-slide-benefits" aria-label="Преимущества биопрепаратов">
									<li>
										<span class="benefit-number">20+</span>
										<span class="benefit-text">лет научных разработок</span>
									</li>
									<li>
										<span class="benefit-number">ЭКО</span>
										<span class="benefit-text">решения для дома и бизнеса</span>
									</li>
									<li>
										<span class="benefit-number">BY</span>
										<span class="benefit-text">производство в Беларуси</span>
									</li>
								</ul>
									<div class="slide-btn more-box"><a href="<?php the_field('slide-link') ?>">Подробнее</a></div>
								<!-- <a href="#" class="btn"><span>buy now</span></a> -->
							</div>
							<div class="slide-img-cover">
								<a href="#" class="lable-bike">
									<div class="lable-bike-img"><img src="<?php the_field('cath-sign') ?>" alt="img"></div>
									<div class="lable-bike-item">
										<div class="model"><?php the_field('face-type') ?></div>
										
										<div class="price"></div>
									</div>
								</a>
								<img src="<?php the_field('slide-img') ?>" alt="img" class="slide-img">
							</div>
						</div>
				</div>
				
			<?php } } wp_reset_postdata(); ?>
			<!-- <div class="main-slide">	
				<div class="container">
					<div class="main-slide-info">
						<h2 class="title">Флебиопин</h2>
						<p>Биопрепарат для ограничения вредоносности корневой губки в сосновых насаждениях
							при проведении рубок ухода и санитарно-оздоровительных мероприятий</p>
							<div class="slide-btn more-box"><a href="#">Подробнее</a></div>

					</div>
					<div class="slide-img-cover">
						<a href="#" class="lable-bike">
							<div class="lable-bike-img"><img src="assets/my-img/plants.png" alt="img"></div>
							<div class="lable-bike-item">
								<div class="model">Для юр. лиц</div>
		
							</div>
						</a>
						<img src="assets/my-img/flebiopin.png" alt="img" class="slide-img">
					</div>
				</div>
			</div>
			<div class="main-slide">

				<div class="container">
					<div class="main-slide-info">
						<h2 class="title">Грамисил</h2>
						<p>Для обработки семян и вегетирующих растений озимой пшеницы с целью стимуляции роста и повышения
							продуктивности зерновой культуры</p>
							<div class="slide-btn more-box"><a href="#">Подробнее</a></div>
				
					</div>
					<div class="slide-img-cover">
						<a href="#" class="lable-bike">
							<div class="lable-bike-img"><img src="assets/my-img/plants.png" alt="img"></div>
							<div class="lable-bike-item">
								<div class="model">Для юр. лиц</div>
						
							</div>
						</a>
						<img src="assets/my-img/gramisil.png" alt="img" class="slide-img">
					</div>
				</div>
			</div>
			
			<div class="main-slide">
	
				<div class="container">
					<div class="main-slide-info">
						<h2 class="title">Румибакт</h2>
						<p>Кормовая добавка для нормализации рубцового пищеварения у жвачных животных, повышения молочной продуктивности и качества молока у крупного рогатого скота, снижения риска возникновения ацидозов</p>
						<div class="slide-btn more-box"><a href="#">Подробнее</a></div>
				
					</div>
					<div class="slide-img-cover">
						<a href="#" class="lable-bike">
							<div class="lable-bike-img"><img src="assets/my-img/feed.png" alt="img"></div>
							<div class="lable-bike-item">
								<div class="model">Для юр. лиц</div>
							
							</div>
						</a>
						<img src="assets/my-img/rumibakt.png" alt="img" class="slide-img">
					</div>
				</div>
			</div> -->
		</div>
	</section>



	<!--================== S-PRODUCTS ==================-->
	<section id="fiz-prod" class="s-products s-products-fiz">
		<div class="container">
			<div class="tab-wrap">
				<div class="products-title-cover fiz-products-title-cover">
					<div>
						<p class="section-kicker">Каталог для дома и хозяйства</p>
						<h2 class="title">Биопрепараты для физических лиц</h2>
						<p class="section-lead">Профессиональные биотехнологические решения с понятным назначением, ценой и быстрым добавлением в корзину.</p>
					</div>
					<ul class="tab-nav product-tabs ">
						<li class="item none" rel="tab1"><span>All</span></li>
						<li class="item none" rel="tab2"><span>Road bike</span></li>
						<li class="item none" rel="tab3"><span>City bike</span></li>
						<li class="item none" rel="tab4"><span>BMX bike</span></li>
					</ul>
				</div>
				<div class="tabs-content">
					<div class="tab tab1">
						<div class="row my-row product-cover fiz-product-cover ">
							<?php
				global $post;
				
				$myposts = get_posts([ 
					'numberposts' => -1,
					'category_name'    => 'fiz-cards'
				]);
				
				if( $myposts ){
					foreach( $myposts as $post ){
						setup_postdata( $post );
				?>
					<div class="prod-container">
								<div class="product-item fiz-product-card" id="<?php the_field('id-prod') ?>">
									<!-- <span class="top-sale">лидер продаж</span> -->
									<div class="product-card-badge">Для физ. лиц</div>

									<a href="<?php the_field('fiz-prod-link') ?>" class="product-img fiz-product-img">
										<img class="lazy" src="<?php the_field('card-img') ?>" data-src="<?php the_field('card-img') ?>" alt="product">
									</a>

									<div class="product-item-cover">
										<div class="price-cover">
											<div class="new-price"><?php the_field('price') ?> BYN</div>
											
										</div>


										<h6 class="prod-title fiz-prod-title">
											<a href="<?php the_field('fiz-prod-link') ?>">
												<?php the_title(); ?><br>
											</a>
										</h6>
										<div class="btn btn-buy"><span>Купить</span></div>

										<span class="in-basket-p none">В корзине <span  class="in-basket-span">1</span> шт.</span>

										<div class="add-to-card-box none">
											<input min="1" type="number" class="add-to-card-input" value="1">
											<div class="btn-to-card">Добавить в корзину</div>
										</div>
									</div>
									<div class="prod-info my-prod-info">
										<p class="prod-info-label">Назначение</p>
										<ul class="prod-list">
											<li><?php the_content(); ?></li>
										
										</ul>
									</div>
								</div>
							</div>
				
			<?php } } wp_reset_postdata(); ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ S-PRODUCTS END ================-->



	<!--================== S-CONTACTS ==================-->
	<section id="contacts" class="s-subscribe contacts-section" style="background-image: url(assets/my-img/12.png);">
		<span class="mask"></span>
		<div class="container contacts-container">
			<div class="contacts-panel wow fadeInLeftBlur lazy" data-wow-duration=".8s" data-wow-delay=".1s">
				<p class="contacts-eyebrow">Связаться с нами</p>
				<h2 class="title contacts-title"><span>Контакты</span></h2>
				<p class="contacts-lead">Получите консультацию по препаратам, условиям заказа и сотрудничеству с Институтом микробиологии НАН Беларуси.</p>

				<div class="contacts-list">
					<div class="contact-card">
						<span class="contact-card-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<div>
							<span class="contact-card-label">Телефон</span>
							<a href="tel:+375447507890">+375 (44) 750-78-90</a>
						</div>
					</div>

					<div class="contact-card">
						<span class="contact-card-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<div>
							<span class="contact-card-label">Email</span>
							<a href="mailto:inmisale@mail.ru">inmisale@mail.ru</a>
						</div>
					</div>

					<div class="contact-card">
						<span class="contact-card-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<div>
							<span class="contact-card-label">Адрес</span>
							<span>г. Минск, ул. Академика Купревича, 2</span>
						</div>
					</div>
				</div>

				<div class="contacts-schedule">
					<span class="contact-card-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
					<div>
						<span class="contact-card-label">График работы</span>
						<p>Пн-Чт: 9:00 - 18:00, обед: 13:00 - 13:35</p>
						<p>Пт: 9:00 - 15:55, обед: 13:00 - 13:35</p>
						<p>Сб-Вс: выходной</p>
					</div>
				</div>
			</div>

			<div class="contacts-map wow fadeInRightBlur lazy" data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="contacts-map-top">
					<div>
						<span class="contact-card-label">Мы на карте</span>
						<p>Институт микробиологии НАН Беларуси</p>
					</div>
					<a class="contacts-map-link" href="https://www.google.com/maps/search/?api=1&query=%D0%B3.+%D0%9C%D0%B8%D0%BD%D1%81%D0%BA,+%D1%83%D0%BB.+%D0%90%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D0%BA%D0%B0+%D0%9A%D1%83%D0%BF%D1%80%D0%B5%D0%B2%D0%B8%D1%87%D0%B0,+2" target="_blank" rel="noopener">Открыть маршрут</a>
				</div>
				<div class="contacts-map-frame">
					<iframe title="Институт микробиологии НАН Беларуси на карте" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18794.367081731318!2d27.683449!3d53.926487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcebb4d6f6d2b%3A0x1c24ca875beb668c!2z0JjQvdGB0YLQuNGC0YPRgiDQvNC40LrRgNC-0LHQuNC-0LvQvtCz0LjQuCDQndCQ0J0g0JHQtdC70LDRgNGD0YHQuA!5e0!3m2!1sru!2sby!4v1737573509389!5m2!1sru!2sby" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!--================ S-CONTACTS END ================-->
	


	<!--================== S-INMI-KNOWLEDGE ==================-->
	<section id="inmi-knowledge" class="s-inmi-knowledge">
		<div class="container">
			<div class="knowledge-head wow fadeInUp lazy" data-wow-duration=".8s" data-wow-delay=".1s">
				<div>
					<p class="knowledge-eyebrow">Экспертная библиотека</p>
					<h2 class="title knowledge-title">InMi-знания</h2>
					<p class="knowledge-lead">Практические материалы о микробиологических решениях для растениеводства, животноводства, экологии и промышленной биотехнологии.</p>
				</div>
				<?php
					$knowledge_category = get_category_by_slug('inmi-znaniya');
					$knowledge_archive_url = $knowledge_category ? get_category_link($knowledge_category->term_id) : home_url('/category/inmi-znaniya/');
				?>
				<a class="knowledge-all-link" href="<?php echo esc_url($knowledge_archive_url); ?>">Все статьи <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			</div>

			<?php
				$knowledge_posts = get_posts([
					'numberposts' => 5,
					'category_name' => 'inmi-znaniya',
					'post_status' => 'publish',
				]);

				if (!$knowledge_posts) {
					$knowledge_posts = get_posts([
						'numberposts' => 5,
						'post_status' => 'publish',
						'category__not_in' => array_filter([
							get_cat_ID('slider'),
							get_cat_ID('fiz-cards'),
						]),
					]);
				}
			?>

			<?php if ($knowledge_posts) : ?>
				<div class="knowledge-grid">
					<?php foreach ($knowledge_posts as $index => $post) : setup_postdata($post); ?>
						<article class="knowledge-card<?php echo $index === 0 ? ' knowledge-card-featured' : ''; ?> wow fadeInUp lazy" data-wow-duration=".8s" data-wow-delay="<?php echo esc_attr(0.12 + ($index * 0.06)); ?>s">
							<a class="knowledge-card-link" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
								<span class="knowledge-card-number"><?php echo esc_html(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></span>
								<span class="knowledge-card-meta"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo esc_html(get_the_date('d.m.Y')); ?></span>
								<h3><?php the_title(); ?></h3>
								<p><?php echo esc_html(wp_trim_words(get_the_excerpt() ? get_the_excerpt() : wp_strip_all_tags(get_the_content()), 24, '...')); ?></p>
								<span class="knowledge-read-more">Читать материал <i class="fa fa-angle-right" aria-hidden="true"></i></span>
							</a>
						</article>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			<?php else : ?>
				<div class="knowledge-empty wow fadeInUp lazy" data-wow-duration=".8s" data-wow-delay=".15s">
					<p>Скоро здесь появятся экспертные материалы InMi о применении биотехнологий в агросекторе и экологических проектах.</p>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<!--================ S-INMI-KNOWLEDGE END ================-->

	<!--================== S-OUR-NEWS ==================-->
	<section class="s-our-news">
		<div class="container">
			<h2 class="title">InMi новости</h2>
			<div class="news-cover row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="#">20 декабря 2024 года в 10.00 состоится заседание Ученого совета</a></h6>
						<div class="news-post-thumbnail">
							<a href="#"><img class="lazy" src="assets/my-img/news/news1.jpg" data-src="assets/my-img/news/news1.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 19.12.2024</span>
							<!-- <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By<a href="#">Samson</a></span> -->
						</div>
						<div class="post-content">
							<p>Рассмотрение вопроса
								о присвоении ученого звания «доцент» по специальности «Биология»
								ведущему научному сотруднику лаборатории «Коллекция микроорганизмов»
								кандидату биологических наук Ладутько Елене Ивановне.</p>
						</div>
						<a href="#" class="btn-news">Подробно</a>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="#">31 октября 2024 в 16.00</a></h6>
						<div class="news-post-thumbnail">
							<a href="#"><img class="lazy" src="assets/my-img/news/news2.jpg" data-src="assets/my-img/news/news2.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 28.10.2024</span>
							<!-- <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Samson</a></span> -->
						</div>
						<div class="post-content">
							<p>Состоится заседание комиссии по противодействию коррупции Института микробиологии НАН Беларуси по адресу г. Минск, ул. акад.В.Ф.Купревича, 2, к. 109.</p>
						</div>
						<a href="#" class="btn-news">Подробно</a>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="#">8 июля 2024 в 14.00</a></h6>
						<div class="news-post-thumbnail">
							<a href="#"><img class="lazy" src="assets/my-img/news/news3.jpg" data-src="assets/my-img/news/news3.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 05.07.2024</span>
							<!-- <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Samson</a></span> -->
						</div>
						<div class="post-content">
							<p>Состоится заседание комиссии по противодействию коррупции Института микробиологии НАН Беларуси по адресу г. Минск, ул. акад.В.Ф.Купревича, 2, к. 109.</p>
						</div>
						<a href="#" class="btn-news">Подробно</a>
					</div>
				</div>
			</div>
			<div class="btn-cover"><a class="btn" href="#"><span>Больше новостей</span></a></div>
		</div>
	</section>
	<!--================ S-OUR-NEWS END ================-->


	<!--================== S-FEEDBACK ==================-->
	<!-- <section class="s-feedback" style="background-image: url(assets/IMG_6508-scaled.jpeg);">

		<span class="mask"></span>
		<div class="container">
			<h2 class="title">Свежие отзывы о нашей работе</h2>
			<div class="feedback-slider">
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>Мне понравилась оперативность реагирования, консультации и подсказки для практического применения. Начали активно добавлять Румибакт в наши кормовые добавки. Потребуется ещё несколько месяцев для определения оптимальных соотношений всех остальных компонентов в добавках в которые мы вводим данный препарат. Видим перспективы дальнейшего сотрудничества и по румибакту и по другим Вашим препаратам.</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-1.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>ООО "ВетАгроГрупп"</span></h5>
								<ul class="rating">
									Дмитрий Кузьменков
						
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>Наша компания уже несколько лет является постоянным клиентом Института микробиологии, и каждый раз остаюсь доволен качеством их товаров и услуг. Ассортимент продукции всегда разнообразен и соответствует нашим ожиданиям. Особенно хочу отметить оперативную доставку и внимательное отношение к клиентам. Сотрудники Института всегда готовы помочь и ответить на все вопросы. Рекомендую Институт микробиологии всем, кто ценит качество и надежность!</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-2.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>ООО "ВБПродЛаб"</span></h5>
								<ul class="rating">
									Василий
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>Пользуюсь препаратом Антойл+, заливаю его в септик на даче. Очень хороший продукт. Работает. Качество всегда отличное. Молодцы, что теперь доступна доставка по Европочте - на много удобнее стало приобретать препарат</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-3.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Виктор</span></h5>
								<ul class="rating">
						
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>Антойл - лучший, мне кажется, препарат для септиков. Радует, что это разработка наших ученых. Рекомендую точно</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-2.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Роман</span></h5>
								<ul class="rating">
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================ S-FEEDBACK END ================-->

	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients">
		<div class="container">
			<div class="clients-cover">
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="http://inmi/wp-content/uploads/2026/05/ipay.png" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="http://inmi/wp-content/uploads/2026/05/erip.png" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="http://inmi/wp-content/uploads/2026/05/gmo.png">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="http://inmi/wp-content/uploads/2026/05/iso.png" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="http://inmi/wp-content/uploads/2026/05/tp.png" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-CLIENTS END =================-->

	 <?php get_footer(); ?>