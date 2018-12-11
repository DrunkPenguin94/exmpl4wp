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
<div class="pages news-details-page fon1 vh100">
    <div class="container">
        <h1 class="g-title title"><?=$post->post_title?></h1>
        <div class="row">
            <div class="img">
                <? $img_link=wp_get_attachment_image_src( get_field('img_news'),'full' ) ?>
                <div class="ramka">
                    <img src="<?echo $img_link[0]?>">
                    <div class="fon-purple"></div>
                </div>

            </div>
            <div class="date">
                <?=date("d.m.Y",strtotime($post->post_date))?>
            </div>
            <div class="info">
                <?=$post->post_content?>
            </div>

            <div class="button-back">
                <a href="<?=translater_custom(["/new","/en/new-2"])?>">
                    <div class="button button-c white-cl purple-bg">
                        <?=translater_custom(["Обратно к списку новостей","Back"])?>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
