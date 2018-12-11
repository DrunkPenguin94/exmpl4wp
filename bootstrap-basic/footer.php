<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

        </div><!--.site-content-->


        <footer id="site-footer" role="contentinfo">
            <div class="container">
                <div id="footer-row" class="row site-footer">
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 logo-block">
                       <a href="<?php echo translater_custom(["/","/en/main-2"]); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <div class="logo">
                            <img src="/wp-content/themes/bootstrap-basic/img/logo.png" alt="Патентное Агенство">
                        </div>
                       </a>
                   </div>
                   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12  other" >
                        <div class="menu-block">
                            <?php
                            $menu=translater_custom(["Сайт разработан IT-company ","Site developed by IT-company "]);
                            wp_nav_menu(array('theme_location' => 'second', 'container' => false, 'menu_class' => '', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                        </div>
                       <div class="contacts-block">
                           <div class="line adress">
                              <div class="text ">
                                  <?=translater_custom([ot_get_option( 'adress' ),ot_get_option( 'adress_en' )])?>

                               </div>
                            </div>
                           <div class="line tel">
                               <div class="text ">
                                   <a href="tel:<?php echo ot_get_option( 'code_tel' );?> <?php echo ot_get_option( 'tel' );?>">
                                       <?php echo ot_get_option( 'code_tel' );?>  <span><?php echo ot_get_option( 'tel' );?></span>
                                   </a>
                               </div>
                           </div>
                           <div class="line email">
                               <div class="text">
                                   <a href="mailto:<?php echo ot_get_option( 'e_mail' );?>">
                                   <?php echo ot_get_option( 'e_mail' );?>
                                   </a>
                               </div>
                           </div>
                           <div class="line asmart">
                               <div class="text ">
                                   <a href="https://asmart-group.ru" target="_blank">

                                       <?=translater_custom(["Сайт разработан IT-company ","Site developed by IT-company "])?>
                                       <span>ASMART</span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>




                </div>
            </div>

        </footer>

		<div class="fancybox-hidden" id="callback-window">
                <div id="callback">
                    <?echo do_shortcode(translater_custom([
                        "[contact-form-7 id=\"184\" title=\"Заказать звонок\"  html_class=\"form form-c form-questions\"]",
                        "[contact-form-7 id=\"290\" title=\"Request a call\"  html_class=\"form form-c form-questions\"]"
                        ]));?>


                </div>
        </div>
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>