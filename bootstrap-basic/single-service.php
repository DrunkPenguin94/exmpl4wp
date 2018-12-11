<?php
/**
 * Template for displaying single post (read full post page).
 *
 * @package bootstrap-basic
 */

get_header();
$post=get_post();
/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="pages service-page fon1 vh100">
    <div class="container">
        <div class="g-title"><?=translater_custom(["Наши услуги","Services"])?></div>
        <h1 class="title"><?=get_field('name',$post->ID)?></h1>
        <div class="row">

            <div class="text col-xs-12">
                <p>
                <?$img=get_field('img_service',$post->ID);
                if(!empty($img)){
                    ?>
                    <div class="img">
                        <img class="noactive" src="<?=$img?>">
                    </div>

                    <?
                }?>


                    <?=get_field('text_service',$post->ID)?>
                </p>

            </div>




            <div class="menu-service col-xs-12">
                <?php
                $services_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>0));
                foreach($services_query->posts as $value){?>
                   <a href="<?=$value->guid?>">
                        <div class="container-service <?=$value->ID==$post->ID?"active":""?>">
                            <?=  get_field('name',$value->ID)?>
                        </div>
                   </a>
                <?}
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
