<?php
	/* Template Name: Главная */
	get_header();
?><?php
	$currentlang = get_bloginfo( 'language' );
?>
    <div class="video-bg">
        <div class="bgcolor"></div>
        <div class="bgimg"></div>
        <video autoplay muted loop id="myVideo">
            <source src="<?php the_field( 'video' ); ?>" type="video/mp4">
        </video>

        <div class="info">
            <h1><?php the_field( 'slider_h1' ); ?></h1>
            <p>
                <span style="    letter-spacing: -4px; margin-right:10px;">---</span><?php the_field( 'slider_h2' ); ?>
                <span style="letter-spacing: -4px;  margin-left:10px;">---</span>
            </p>
            <a class="go-to-services" href="#uslugi" class="hidden-xs">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.webp" alt="">
            </a>
        </div>

        <div class="bottom-info">
            <div class="container">
                <div class="address-bar">
                    <p class="location">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ic1.png" alt="">
                        <span><?php the_field( 'adress' ); ?></span>
                    </p>
                    <p class="mail">
                        <a href="mailto:<?php the_field( 'mail' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ic2.png" alt="">
                            <span><?php the_field( 'mail' ); ?></span>
                        </a>
                    </p>
                    <p class="phone">
						<?php $phone = get_field( 'phone_2', 'options' ); ?>

                        <a href="tel:<?php echo clear_phone( $phone ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ic3.png" alt="">
                            <span>
                                <?php echo $phone; ?>
                            </span>
                        </a>
                    </p>

                    <a href="<?php the_field( 'facebookurl', 'options' ); ?>" target="_blank" class="facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section id="uslugi">
        <h1><?php pll_e( 'УСЛУГИ' ); ?></h1>
        <div class="container">
            <div class="row">
                <div class="services-grid">
					<?php
						$wp_query = new WP_Query();
						$wp_query->query( 'showposts=16' );
						while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <div class="item">
								<?php $service_link = ''; ?>
								<?php if ( $currentlang == "ro-RO" ): ?><?php $service_link = '/ro/serviciile-noastre/'; ?><?php elseif ( $currentlang == "en-US" ): ?><?php $service_link = '/en/our-services/'; ?><?php else: ?><?php $service_link = '/nashi-uslugi/'; ?><?php endif; ?>
                                <a class="services__link" href="<?php echo $service_link; ?>">
                                    <div class="img">
                                        <img src="<?php the_field( 'usl_image' ); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </a>
                                <div class="content">
                                    <a href="<?php echo $service_link; ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <div class="exc"><?php the_excerpt(); ?></div>
                                    <a href="<?php echo $service_link; ?>">
                                        <span><?php pll_e( 'Узнать больше' ); ?> ></span>
                                    </a>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					<?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="left">
            <div class="content">
                <h2><?php pll_e( 'О КОМПАНИИ' ); ?></h2>
				<?php the_field( 'about_info' ); ?>
            </div>
        </div>
    </section>

    <section id="numbers">
        <div class="container">
            <div class="row">
				<?php
					if ( have_rows( 'numbers' ) ):
						while ( have_rows( 'numbers' ) ) : the_row();
							?>
                            <div class="col-xs-4 col-md-4 col-sm-4 nums">
                                <div class="item">
                                    <p><?php the_sub_field( 'num' ); ?></p>
                                    <span><?php the_sub_field( 'desription' ); ?></span>
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
                        <h2><?php pll_e( 'НАШИ' ); ?><br><?php pll_e( 'ФИЛИАЛЫ' ); ?></h2>
                        <p><?php pll_e( 'ОБСЛУЖИВАНИЕ ВСЕЙ' ); ?> <br><?php pll_e( 'ТЕРРИТОРИИ МОЛДОВЫ' ); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="carta">
						<?php if ( $currentlang == "ro-RO" ): ?>
                            <img class="map-with-line" src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
                            <img class="map-clear" src="<?php echo get_template_directory_uri(); ?>/img/map-clear_trim.png" alt="">

                            <div class="city balti">
                                <p>
                                    <a href="tel:+37379244899">BALTI</a>
                                </p>
                                <a href="tel:+37379244899">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 244 899</span>
                                </a>
                            </div>

                            <div class="city ungeni">
                                <p>
                                    <a href="tel:+37378634903">UNGHENI</a>
                                </p>
                                <a href="tel:+37378634903">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">078 634 903</span>
                                </a>
                            </div>

                            <div class="city chisinau">
                                <p>
                                    <a href="tel:+37379557587">CHISINAU</a>
                                </p>
                                <a href="tel:+37379557587">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 557 587</span>
                                </a>
                            </div>

                            <div class="city cahul">
                                <p>
                                    <a href="tel:+37369994759">CAHUL</a>
                                </p>
                                <a href="tel:+37369994759">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">069 994 759</span>
                                </a>
                            </div>

						<?php elseif ( $currentlang == "en-US" ): ?>
                            <img class="map-with-line" src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
                            <img class="map-clear" src="<?php echo get_template_directory_uri(); ?>/img/map-clear_trim.png" alt="">
                            <div class="city balti">
                                <p>
                                    <a href="tel:+37379244899">BALTI</a>
                                </p>
                                <a href="tel:+37379244899">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 244 899</span>
                                </a>
                            </div>
                            <div class="city ungeni">
                                <p>
                                    <a href="tel:+37378634903">UNGHENI</a>
                                </p>
                                <a href="tel:+37378634903">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">078 634 903</span>
                                </a>
                            </div>
                            <div class="city chisinau">
                                <p>
                                    <a href="tel:+37379557587">CHISINAU</a>
                                </p>
                                <a href="tel:+37379557587">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 557 587</span>
                                </a>

                            </div>
                            <div class="city cahul">
                                <p>
                                    <a href="tel:+37369994759">CAHUL</a>
                                </p>
                                <a href="tel:+37369994759">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">069 994 759</span>
                                </a>
                            </div>
						<?php elseif ( $currentlang == "ru-RU" ): ?>
                            <img class="map-with-line" src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="">
                            <img class="map-clear" src="<?php echo get_template_directory_uri(); ?>/img/map-clear_trim.png" alt="">
                            <div class="city balti">
                                <p>
                                    <a href="tel:+37379244899">Бельцы</a>
                                </p>
                                <a href="tel:+37379244899">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 244 899</span>
                                </a>
                            </div>
                            <div class="city ungeni">
                                <p>
                                    <a href="tel:+37378634903">Унгены</a>
                                </p>
                                <a href="tel:+37378634903">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">078 634 903</span>
                                </a>
                            </div>
                            <div class="city chisinau">
                                <p>
                                    <a href="tel:+37379557587">Кишинев</a>
                                </p>
                                <a href="tel:+37379557587">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">079 557 587</span>
                                </a>

                            </div>
                            <div class="city cahul">
                                <p>
                                    <a href="tel:+37369994759">Кагул</a>
                                </p>
                                <a href="tel:+37369994759">
                                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                    <span class="phone-number">069 994 759</span>
                                </a>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partners">
        <h1><?php pll_e( 'ПАРТНЕРЫ' ); ?></h1>
        <div class="container">
            <div class="row">
                <div class="partners-carousel owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0">


					<?php
						$images = get_field( 'partners' );
						if ( $images ): ?><?php foreach ( $images as $image ): ?>
                            <img src="<?php echo $image; ?>" alt=""/>
						<?php endforeach; ?><?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();