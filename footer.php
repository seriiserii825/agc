<section id="contacts">
	<?php if ( is_front_page() ) { ?>
        <h1><?php pll_e( 'КОНТАКТЫ' ); ?></h1>
	<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-xs-12">
                <div class="item first">
                    <h2 class="phone_head"><?php pll_e( 'Позвоните' ); ?>:
                        <a href="tel:<?php the_field( 'phone_2', 'options' ); ?>"><?php the_field( 'phone_2', 'options' ); ?></a>
                    </h2>
                    <h3><?php pll_e( 'Наш адрес' ); ?>:</h3>
                    <p>
						<?php
							$currentlang = get_bloginfo( 'language' );
						?>
						<?php if ( $currentlang == "ro-RO" ): ?><?php the_field( 'aress_footer_md', 'options' ); ?><?php elseif ( $currentlang == "en-US" ): ?><?php the_field( 'aress_footer_en', 'options' ); ?><?php elseif ( $currentlang == "ru-RU" ): ?><?php the_field( 'aress_footer', 'options' ); ?><?php endif; ?>
						<?php pll_e( 'Телефон' ); ?>:
                        <a href="tel:+373 22 926 162"> +373 22 926 162</a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 footer-form-contacts">
                <div class="item ">
                    <h2><?php pll_e( 'Напишите нам сообщение' ); ?>:</h2>
					<?php if ( $currentlang == "ro-RO" ): ?><?php echo do_shortcode( '[contact-form-7 id="147" title="Контактная форма md"]' ); ?><?php elseif ( $currentlang == "en-US" ): ?><?php echo do_shortcode( '[contact-form-7 id="148" title="Контактная форма en"]' ); ?><?php elseif ( $currentlang == "ru-RU" ): ?><?php echo do_shortcode( '[contact-form-7 id="146" title="Контактная форма 1"]' ); ?><?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="map">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
				<?php if ( $currentlang == "ro-RO" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
				<?php elseif ( $currentlang == "en-US" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
				<?php elseif ( $currentlang == "ru-RU" ): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.2967.0/node_modules/wix-santa/static/external/googleMap.html?language=ru&amp;lat=47.04084899999999&amp;long=28.891227999999956&amp;address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&amp;addressInfo=Р. Молдова, мун. Кишинев, блв. Мирча чел Бэтрын 8/1&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <p><?php the_field( 'copy', 'options' ); ?></p>
                <a href="<?php the_field( 'facebookurl', 'options' ); ?>"
                " target="_blank" class="facebook"> <i class="fab fa-facebook"></i>                </a>
            </div>
        </div>
    </div>
</footer></body>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body></html>