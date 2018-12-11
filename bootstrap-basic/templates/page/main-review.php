<div class="pages review-page fon1 vh100">
    <div class="container">
        <h1 class="g-title"> <?=translater_custom(["Отзывы","Reviews"])?></h1>
        <div class="row">
            <?
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $params = array(
            'posts_per_page' => 16, // количество постов на странице
            'post_type'       => 'review', // тип постов
            'paged'           => $current_page // текущая страница
            );
            query_posts($params);

            $wp_query->is_archive = true;
            $wp_query->is_home = false;

            while(have_posts()): the_post();
            $post=get_post();


            ?>
                <?php
                $img=wp_get_attachment_image_src( get_field('img_review',$post->ID),'full' );
                ?>
                <div class="container-one-new">
                    <a href="<?=$img[0]?>" data-fancybox>
                        <div class="one-review">
                            <?php
                            $img=wp_get_attachment_image_src( get_field('img_review',$post->ID),'photo-270-350' );
                            ?>
                            <img src="<?=$img[0]?>">
                            <div class="fon" style=""></div>
                            <div class="logo" style=""></div>
                        </div>
                    </a>
                </div>

            <?
            endwhile;
            ?>
            <div class="col-xs-12 pager">
            <?
            wp_pagenavi();
            ?>
            </div>
        </div>
    </div>
</div>