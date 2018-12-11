<div class="pages about-page fon1 vh100">
    <div class="container">
        <h1 class="g-title"> <?=the_title()?></h1>
        <div class="text-about">
            <?=get_field("text_about")?>
        </div>
        <div class="row-custom">
            <div class="container-points">
                <?php
                    $arr_point=get_field("point_about");
                    if(!empty($arr_point))
                        foreach($arr_point as $value){
                    ?>
                        <div class="container-point">
                            <div class="block-point row">
                                <div class="col-xs-12 head">
                                    <div class="block-title">
                                        <div class="title white-cl">
                                            <?=$value["name_point"]?>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 content">
                                    <div class="block-text">
                                        <?=$value["text_point"]?>
                                    </div>
                                    <div class="img-block">
                                        <?php
                                        $img=wp_get_attachment_image_src( $value["img_point"],'photo-300-230' );
                                        ?>
                                        <img class="" src="<?=$img[0]?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?
                        }
                    ?>
            </div>
        </div>
    </div>
</div>