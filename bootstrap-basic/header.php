<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">Вы используете <strong>устаревший</strong> браузер. Пожалуйста обновите браузер</a>.</p>
		<![endif]-->





            <div class="head-container">
			<?php do_action('before'); ?> 
			<header role="banner">
                <div class="first-line white-bg ">
                    <div class="container">
                        <div class="row site-branding">

                            <div class="col-lg-2  col-md-2 col-sm-2 col-xs-12 logo-block ">
                                <div class="font-white white-bg logo-container">
                                    <a href="<?php echo translater_custom(["/","/en/main-2"]); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                        <img class="anim" src="/wp-content/themes/bootstrap-basic/img/logo-animate.gif" alt="Патентное Агенство">
                                        <img class="text" src="/wp-content/themes/bootstrap-basic/img/logo-text.png" alt="Патентное Агенство">
                                    </a>
                                </div>

                                <div class="navbar-header block-mobile-menu ">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                                        <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 search-block ">
                                <div class="collapse navbar-collapse navbar-primary-collapse">
                                    <div class="line line-first language">
                                        <?php pll_the_languages(['hide_if_empty' =>0]);  ?>
                                    </div>
                                    <div class="line line-second search">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 adress-block collapse navbar-collapse navbar-primary-collapse">
                                <div class="line line-first adress">
                                    <div class="block-fa purple-cl">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="text black-cl">
                                        <?=translater_custom([ot_get_option( 'adress' ),ot_get_option( 'adress_en' )])?>
                                    </div>

                                </div>
                                <div class="line">
                                    <div class="block-fa purple-cl phone">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="text black-cl">
                                        <a href="tel:<?php echo ot_get_option( 'code_tel' );?> <?php echo ot_get_option( 'tel' );?>">
                                            <?php echo ot_get_option( 'code_tel' );?>  <span><?php echo ot_get_option( 'tel' );?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 button-block collapse navbar-collapse navbar-primary-collapse">
                                <a href="#callback" class="fancybox-inline">
                                    <button  id="request-call" class="orange-bg "><?=translater_custom(["Заказать звонок","Callback"])?></button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="second-line menu-block">
                    <div class="container">
                        <div class="row main-navigation">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default" role="navigation">


                                    <div class="collapse navbar-collapse navbar-primary-collapse">
                                        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                                        <?php dynamic_sidebar('navbar-right'); ?>
                                    </div><!--.navbar-collapse-->
                                </nav>
                            </div>
                        </div><!--.main-navigation-->
                    </div>
                </div>
			</header>
        </div>
        <div id="button_up" class=" purple-bg" style="display:none">
            <img src="/wp-content/themes/bootstrap-basic/img/row-up.png">
        </div>
        <a href="#callback" class="fancybox-inline">
        <div id="button_call" class="bounce animated infinite orange-bg slower" >
            <img src="/wp-content/themes/bootstrap-basic/img/phone.png">
        </div>
        </a>
        <div id="content" class=" site-content">
