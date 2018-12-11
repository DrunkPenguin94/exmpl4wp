<div class="pages news-page fon1 vh100">
    <div class="container">
        <h1 class="g-title"> <?=translater_custom(["Новости","News"])?></h1>
        <div class="row">
            <?
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $params = array(
            'posts_per_page' => 12, // количество постов на странице
            'post_type'       => 'news', // тип постов
            'paged'           => $current_page // текущая страница
            );
            query_posts($params);

            $wp_query->is_archive = true;
            $wp_query->is_home = false;

            while(have_posts()): the_post();
            $post=get_post();


            ?>
            <div class="container-one-new col-lg-3 col-md-3 col-sm-4 ">
                <a href="<?=$post->guid?>">
                    <div class="one-new">
                        <div class="img">
                            <?php
                            $img=wp_get_attachment_image_src( get_field('img_news',$post->ID),'photo-270-205' );
                            ?>
                            <img src="<?=$img[0]?>">
                        </div>
                        <div class="date"><?=date("d.m.Y",strtotime($post->post_date))?></div>
                        <div class="title"><?=mb_strimwidth($post->post_title, 0, 120, "...");?></div>

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