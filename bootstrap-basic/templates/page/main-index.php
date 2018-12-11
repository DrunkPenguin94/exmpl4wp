<?php
$slider=get_field("silder");
if(!empty($slider)){
    ?>

    <div class="block-slider">
        <div id="slaider" class="owl-carousel">
            <?foreach($slider as $value){?>
                <div class="block-slide">
                    <div class="left-triangle"></div>
                    <?$style="background: url(".$value['img'].");background-position: 50%;background-repeat: no-repeat;background-size: cover;";?>
                    <div class="main-img" style="<?=$style?>">
                        <div class="container">
                            <div class="text" style="text-align:<?=$value['set_text']?>;">
                                <?=$value['text']?>
                            </div>
                        </div>
                    </div>

                    <div class="right-triangle"></div>
                </div>
            <?}?>
        </div>
    </div>
<?}?>

<div class="fon1">
    <div class="block-three-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12   container-block">
                    <?php
                    $threeblock1=get_field("about_us");
                    ?>
                    <div class="block block-info">
                        <div class="name"><?=$threeblock1["name"]?></div>
                        <div class="text"><?=$threeblock1["text"]?></div>
                        <div class="link-block">
                            <a href="<?=$threeblock1["link"]?>">
                                <div class="button_purple_uppercase button purple-bg white-cl"><?=$threeblock1["name_button"]?></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12   container-block">
                    <div class="block block-contact">
                        <div class="name"><?=translater_custom(["Контактная информация","Contact Information"])?></div>
                        <div class="other">
                            <div class="line">
                                <div class="icon">
                                    <i class="fa fa-map-marker purple-cl" aria-hidden="true"></i>
                                </div>
                                <div class="data">
                                    <?=translater_custom([ot_get_option( 'adress' ),ot_get_option( 'adress_en' )])?>
                                </div>
                            </div>
                            <div class="line">
                                <div class="icon">
                                    <i class="fa fa-phone purple-cl" aria-hidden="true"></i>
                                </div>
                                <div class="data">
                                    <?php echo ot_get_option( 'code_tel' );?>  <span><?php echo ot_get_option( 'tel' );?></span>
                                </div>
                            </div>
                            <div class="line">
                                <div class="icon">
                                    <i class="fa fa-envelope purple-cl" aria-hidden="true"></i>
                                </div>
                                <div class="data">
                                    <?php echo ot_get_option( 'e_mail' );?>
                                </div>
                            </div>
                        </div>
                        <div class="link-block">
                            <a href="<?=$threeblock1["link"]?>">
                                <div class="button button_purple_uppercase purple-bg white-cl"><?=$threeblock1["name_button"]?></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12   container-block">

                    <?php
                    $threeblock2=get_field("about_us_2");
                    ?>
                    <div class="block block-info">
                        <div class="name"><?=$threeblock2["name"]?></div>
                        <div class="text"><?=$threeblock2["text"]?></div>
                        <div class="link-block">
                            <a href="<?=$threeblock2["link"]?>">
                                <div class=" button_purple_uppercase button purple-bg white-cl"><?=$threeblock2["name_button"]?></div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="block-timer">
        <?php
        $timer=get_field("timer");
        ?>
        <div class="container">
            <div class="container-timer">
                <div class="orange-owal">
                    <div class="title"><?=translater_custom(["более","more"])?></div>
                    <div class="container-col w30">
                        <div class="number"><?=$timer["1_number"]?></div>
                        <div class="block-text">
                            <div class="text"><?=$timer["1_name"]?></div>
                        </div>
                    </div>
                    <div class="container-col w40">
                        <div class="number"><?=$timer["2_number"]?></div>
                        <div class="block-text">
                            <div class="text"><?=$timer["2_name"]?></div>
                        </div>
                    </div>
                    <div class="container-col w30">
                        <div class="number"><?=$timer["3_number"]?></div>
                        <div class="block-text">
                            <div class="text"><?=$timer["3_name"]?></div>
                        </div>
                    </div>
                </div>
                <div class="block-star">
                    <img class="star" src="/wp-content/themes/bootstrap-basic/img/star.png">
                </div>
            </div>
        </div>

    </div>


    <div class="block-services">
        <?php
        $services_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>0));
        ?>
        <div class="container">
            <div class="title-info">
                <div class="g-title title"><?=translater_custom(["Услуги","Services"])?></div>
                <div class="description">
                    <?$text_service=get_field("main_text_service");?>
                    <?=$text_service?>
                </div>
            </div>



            <div class="row">
                <?foreach($services_query->posts as $value){?>
                    <div class="container-service col-lg-3 col-md-3 col-sm-3">
                        <a href="<?=$value->guid?>">

                            <div class="block-service">
                                <div class="img">
                                    <?php
                                    $img=wp_get_attachment_image_src( get_field('icon',$value->ID),'full' );
                                    ?>
                                    <img class="noactive" src="<?=$img[0]?>">
                                    <?php
                                    $img=wp_get_attachment_image_src( get_field('icon_active',$value->ID),'full' );
                                    ?>
                                    <img class="active" src="<?=$img[0]?>">
                                </div>
                                <div class="text">
                                    <?=  get_field('name',$value->ID)?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?}?>
            </div>
        </div>
    </div>
</div>

<div class="block-test">
    <div class="container">
        <div class="g-title"><?=get_field("title_test")?></div>
        <div class="row">
            <div id="test-plagin" style="display:none;" lang="<?=translater_custom(["ru","en"])?>"> <?
                $test_data=get_field("questions_test");
                if(!empty($test_data))
                    $json = json_encode($test_data);
                else
                    $json="";
                echo $json;
                ?></div>
        </div>
    </div>

</div>


<div class="fon2">
    <? $fraud=get_field("main_fraud");
    if(!empty($fraud)){
    ?>
    <div class="block-fraud-main">
        <div class="container">
            <div class="g-title"><span class="red"><?=translater_custom(["Внимание!","Attention"])?></span><br><?=translater_custom(["Остерегайтесь этих видов мошенничества","Beware of these types of scams"])?></div>
            <div class="row">
                <?php

                foreach ($fraud as $value){
                    ?>
                    <div class="container-fraud  col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="block-fraud">
                            <div class="block-img">
                                <?php
                                $img=wp_get_attachment_image_src( $value["icon"],'photo-270-350' );
                                ?>
                                <div class="bord">
                                    <img src="<?=$img[0]?>">
                                </div>


                            </div>
                            <div class="block-text">
                                <div class="name">
                                    <?=$value["name"]?>
                                </div>
                                <div class="text">
                                    <?=$value["text"]?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?
                }
                ?>
            </div>
            <div class="block-button" style="display:none;">
                <a href="/" target="_blank">
                    <div class="button button-c white-cl purple-bg" >
                        <?=translater_custom(["Смотреть подробнее","View details"])?>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?}?>

    <div class="block-result-work">
        <div class="container">
            <div class="g-title title">
                <?=translater_custom(["Результаты нашей работы","Results of our work"])?>
            </div>
            <div class="row">

                <div class="content-block owl-carousel" id="result-owl">
                    <?php
                    $projects_all_query = new WP_Query(array('post_type'=>'projects', 'post_status'=>'publish', 'posts_per_page'=>12));
                    foreach($projects_all_query->posts as $value){
                        ?>
                        <div class="container-one-project ">
                            <?
                            $link=get_field('project_link',$value->ID);
                            if(!empty($link)) echo "<a href='".$link."' target='_blank'>";
                            ?>
                            <div class="block-one-container">
                                <?php
                                $img=wp_get_attachment_image_src( get_field('project_img',$value->ID),'photo-150-150' );
                                ?>
                                <img src="<?=$img[0]?>">
                            </div>
                            <?if(!empty($link)) echo "</a>";?>
                        </div>

                        <?
                    }
                    ?>
                </div>

            </div>
            <div class="container-button">
                <a href="<?=translater_custom(["/projects-all","/en/projects-all-2"])?>">
                    <div class="button  button-c white-cl purple-bg">

                        <?=translater_custom(["Посмотреть еще","View more"])?>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    $reviewall_query = new WP_Query(array('post_type'=>'review', 'post_status'=>'publish', 'posts_per_page'=>0));
    ?>

    <div class="block-reviews">
        <div class="g-title title">
             <?=translater_custom(["ОТЗЫВЫ","REVIEWS"])?>
        </div>
        <div class="content-reviews">
            <div class="container">

                <div class="row">

                    <div class="all-reviews owl-carousel" id="reviews" >
                        <?foreach($reviewall_query->posts as $value){?>
                            <?php
                            $img=wp_get_attachment_image_src( get_field('img_review',$value->ID),'full' );
                            ?>
                            <a href="<?=$img[0]?>" data-fancybox>
                                <div class="one-review">
                                    <?php
                                    $img=wp_get_attachment_image_src( get_field('img_review',$value->ID),'photo-270-350' );
                                    ?>
                                    <img src="<?=$img[0]?>">
                                    <div class="fon" style=""></div>
                                    <div class="logo" style=""></div>
                                </div>
                            </a>
                        <?}?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="block-form-question-new">
    <div class="container">
        <div class="row">
            <div class="block-form col-lg-7 col-md-7 col-sm-7 col-xs-12">
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

            <div class="block-new col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="fon-grey"></div>
                <div class="container-new">
                    <div class="title g-title">
                        <?=translater_custom(["Новости","News"])?>
                    </div>
                    <div class="list-new">
                        <?php
                        $new_query = new WP_Query(array('post_type'=>'news', 'post_status'=>'publish', 'posts_per_page'=>3));
                        foreach ($new_query->posts as $value){
                            ?>
                            <div class="one-new">
                                <div class="name-block">
                                    <div class="name"><?=$value->post_title?></div>
                                    <div class="date"><?=date("d.m.Y",strtotime($value->post_date))?></div>
                                </div>
                                <div class="text"><?=mb_strimwidth($value->post_content, 0, 300, "...");?></div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="container-button">
                        <a href=" <?=translater_custom(["/new/","/en/new-2/"])?>">
                            <div class="button button-c orange-bg black-cl">
                                <?=translater_custom(["Больше новостей","More news"])?>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<a name="contact"></a>
<div class="block-yandex-map"  >
    <?php
    $koordinat=get_field("map_coordinat");
    $koordinat=explode(",", $koordinat);
    ?>
    <div id="coordinates" latitude="<?=$koordinat[0]?>" longitude="<?=$koordinat[1]?>">
        <div id="map-yandex">

        </div>
    </div>
</div>
