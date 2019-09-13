<?php
/* Template Name: Главная */
get_header();
?>
				<?php
    $currentlang = get_bloginfo('language');
?>
<div class="video-bg">
	<div class="bgcolor"></div>
	<div class="bgimg"></div>
	<video autoplay muted loop id="myVideo">
	  <source src="<?php the_field('video'); ?>" type="video/mp4">
	</video>

	<div class="info">
	  <h1><?php the_field('slider_h1'); ?></h1>
	  <p><span style="    letter-spacing: -4px; margin-right:10px;">---</span><?php the_field('slider_h2'); ?><span style="letter-spacing: -4px;  margin-left:10px;">---</span></p>  
	  <a href="#uslugi" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.webp" alt=""></a>
	</div>
	
	<div class="bottom-info">
		<div class="container">
			<p class="location">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ic1.png" alt="">
				<span><?php the_field('adress'); ?></span>
			</p>
			<p class="mail">
				<a href="mailto:<?php the_field('mail'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ic2.png" alt="">
					<span><?php the_field('mail'); ?></span>
				</a>
			</p>
			<p class="phone">
				<a href="tel:<?php the_field('phone', 'options'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ic3.png" alt="">
					<span><?php the_field('phone', 'options'); ?></span>
				</a>
			</p>

			<a href="<?php the_field('facebookurl', 'options'); ?>" target="_blank" class="facebook">
				<i class="fab fa-facebook"></i>
			</a>
		</div>
	</div>
</div>

 


<section id="uslugi">
	<h1><?php pll_e('УСЛУГИ'); ?></h1>
	<div class="container">
		<div class="row">
        <?php
        $wp_query = new WP_Query(); 
        $wp_query->query('showposts=16');
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 			<div class="col-md-4 col-xs-12 col-sm-4 usl_parent">
				<div class="item">

				<?php if($currentlang=="ro-RO"): ?>
				<a href="/ro/serviciile-noastre/">
				<?php elseif($currentlang=="en-US"): ?>
				<a href="/en/our-services/">
				<?php elseif($currentlang=="ru-RU"): ?>
				<a href="/nashi-uslugi/">
				<?php endif; ?>
						<div class="img">
							<img src="<?php the_field('usl_image'); ?>" alt="<?php the_title(); ?>">
						</div>
						<div class="content">
							<h3><?php the_title(); ?></h3>
							<div class="exc"><?php the_excerpt(); ?></div>
							<span><?php pll_e('Узнать больше'); ?> ></span>
						</div>
					</a>
				</div>
			</div>
        <?php endwhile; ?> 
        <?php wp_reset_query(); ?>
        <?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section id="about">
	<div class="left">
		<div class="content">
			<h2><?php pll_e('О КОМПАНИИ'); ?></h2>
			<?php the_field('about_info'); ?>
		</div>
	</div>
</section>

<section id="numbers">
	<div class="container">
		<div class="row">
<?php
if( have_rows('numbers') ):
    while ( have_rows('numbers') ) : the_row();
?>
			<div class="col-md-4 col-sm-4 col-xs-12 nums">
				<div class="item">
				<p><?php the_sub_field('num'); ?></p>
				<span><?php the_sub_field('desription'); ?></span>
				</div>
			</div>
<?php
endwhile;
else :
endif;
?>
		</div>
	</div>
</section>

<section id="filial">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="item">
					<h1><?php pll_e('НАШИ'); ?><br><?php pll_e('ФИЛИАЛЫ'); ?></h1>
					<p><?php pll_e('ОБСЛУЖИВАНИЕ ВСЕЙ'); ?> <br><?php pll_e('ТЕРРИТОРИИ МОЛДОВЫ'); ?></p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="carta">
					<?php if($currentlang=="ro-RO"): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
										<div class="balti">
						<p><a href="tel:+37379244899">BALTI</a></p>
						<a href="tel:+37379244899"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 244 899</a>
					</div>
					<div class="ungeni">
						<p><a href="tel:+37378634903">UNGHENI</a></p>
						<a href="tel:+37378634903"><i class="fas fa-phone-alt" aria-hidden="true"></i> 078 634 903</a>
					</div>
					<div class="chisinau">
						<p><a href="tel:+37379557587">CHISINAU</a></p>
						<a href="tel:+37379557587"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 557 587</a>
						
					</div>
					<div class="cahul">
						<p><a href="tel:+37369994759">CAHUL</a></p>
						<a href="tel:+37369994759"><i class="fas fa-phone-alt" aria-hidden="true"></i> 069 994 759</a>
					</div>
					<?php elseif($currentlang=="en-US"): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
					<div class="balti">
						<p><a href="tel:+37379244899">BALTI</a></p>
						<a href="tel:+37379244899"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 244 899</a>
					</div>
					<div class="ungeni">
						<p><a href="tel:+37378634903">UNGHENI</a></p>
						<a href="tel:+37378634903"><i class="fas fa-phone-alt" aria-hidden="true"></i> 078 634 903</a>
					</div>
					<div class="chisinau">
						<p><a href="tel:+37379557587">CHISINAU</a></p>
						<a href="tel:+37379557587"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 557 587</a>
						
					</div>
					<div class="cahul">
						<p><a href="tel:+37369994759">CAHUL</a></p>
						<a href="tel:+37369994759"><i class="fas fa-phone-alt" aria-hidden="true"></i> 069 994 759</a>
					</div>
					<?php elseif($currentlang=="ru-RU"): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
					<div class="balti">
						<p><a href="tel:+37379244899">Бельцы</a></p>
						<a href="tel:+37379244899"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 244 899</a>
					</div>
					<div class="ungeni">
						<p><a href="tel:+37378634903">Унгены</a></p>
						<a href="tel:+37378634903"><i class="fas fa-phone-alt" aria-hidden="true"></i> 078 634 903</a>
					</div>
					<div class="chisinau">
						<p><a href="tel:+37379557587">Кишинев</a></p>
						<a href="tel:+37379557587"><i class="fas fa-phone-alt" aria-hidden="true"></i> 079 557 587</a>
						
					</div>
					<div class="cahul">
						<p><a href="tel:+37369994759">Кагул</a></p>
						<a href="tel:+37369994759"><i class="fas fa-phone-alt" aria-hidden="true"></i> 069 994 759</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="partners">
	<h1><?php pll_e('ПАРТНЕРЫ'); ?></h1>
	<div class="container">
		<div class="row">
			<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0">



<?php 
$images = get_field('partners');
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
                     <img src="<?php echo $image; ?>" alt="" />
        <?php endforeach; ?>
<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>

<?php
get_footer();