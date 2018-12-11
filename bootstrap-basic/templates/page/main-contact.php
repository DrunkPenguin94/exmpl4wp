<div class="pages contact-page fon1 vh100">
    <div class="container">
        <h1 class="g-title"> <?=the_title()?></h1>
        <div class="row">
            <div class="block-form col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="info-block">
                    <div class="line adress">
                       <span class="labl"><?=translater_custom(["Адрес:","Address:"])?></span>
                        <span class="data">
                             <?=translater_custom([ot_get_option( 'adress' ),ot_get_option( 'adress_en' )])?>
                        </span>


                    </div>

                    <div class="line tel">
                        <span  class="labl"><?=translater_custom(["Телефон:","Telephone:"])?></span>
                        <a class="data" href="tel:<?php echo ot_get_option( 'code_tel' );?> <?php echo ot_get_option( 'tel' );?>">
                            <?php echo ot_get_option( 'code_tel' );?>  <?php echo ot_get_option( 'tel' );?>
                        </a>
                    </div>
                    <div class="line-purple"> </div>
                </div>

                <div class="info-block">
                    <div class="line">
                        <div class="container-form">
                            <?
                            $forminnews=translater_custom([
                                "[contact-form-7 id=\"5\" title=\"Есть вопросы пиши\"  html_class=\"form form-c form-questions\"]",
                                "[contact-form-7 id=\"208\" title=\"Есть вопросы пиши (EN)\" html_class=\"form form-c form-questions\"]"
                            ]);
                            echo do_shortcode($forminnews);

                            ?>
                        </div>
                    </div>
                    <div class="line-purple"> </div>
                </div>
            </div>
            <div class="block-map col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <?php
                $koordinat=get_field("map_coordinat",2);
                $koordinat=explode(",", $koordinat);
                ?>
                <div id="coordinates" latitude="<?=$koordinat[0]?>" longitude="<?=$koordinat[1]?>">
                    <div id="map-yandex">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>