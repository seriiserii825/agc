<?php
	$currentlang = get_bloginfo( 'language' );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
    <meta name="author" content="https://vk.com/id303535913">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3af180e171.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" id="js-header">
    <div class="header-container">
        <ul class="nav navbar-nav navbar-right">
            <ul class="drop-menu">
				<?php pll_the_languages(); ?>
            </ul>
        </ul>
        <div class="header-line container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <div class="sandwitch-wrap">
                    <div class="sandwitch">
                        <div class="sandwitch__line sandwitch__line--top"></div>
                        <div class="sandwitch__line sandwitch__line--middle"></div>
                        <div class="sandwitch__line sandwitch__line--bottom"></div>
                    </div>
                </div>

                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php the_field( 'logo', 'options' ); ?>" alt="" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="header-bottom" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navus">
					<?php if ( $currentlang == "ro-RO" ): ?><?php
						if ( have_rows( 'menu_md', 'options' ) ):
							while ( have_rows( 'menu_md', 'options' ) ) : the_row();
								?>
                                <li>
                                    <a href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'name' ); ?></a>
                                </li>
							<?php
							endwhile;
						else :
						endif;
						?><?php elseif ( $currentlang == "en-US" ): ?><?php
						if ( have_rows( 'menu_en', 'options' ) ):
							while ( have_rows( 'menu_en', 'options' ) ) : the_row();
								?>
                                <li>
                                    <a href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'name' ); ?></a>
                                </li>
							<?php
							endwhile;
						else :
						endif;
						?><?php elseif ( $currentlang == "ru-RU" ): ?><?php
						if ( have_rows( 'menu', 'options' ) ):
							while ( have_rows( 'menu', 'options' ) ) : the_row();
								?>
                                <li>
                                    <a href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'name' ); ?></a>
                                </li>
							<?php
							endwhile;
						else :
						endif;
						?><?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>