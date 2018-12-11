<div class="pages projects-page fon1 vh100">
    <div class="container">
        <h1 class="g-title"> <?=translater_custom(["Результаты нашей работы","The results of our work"])?></h1>
        <div class="row">
            <?
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $params = array(
                'posts_per_page' => 24, // количество постов на странице
                'post_type'       => 'projects', // тип постов
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
                <div class="container-one-project col-lg-2 col-md-2 col-sm-2 ">
                    <?
                    $link=get_field('project_link',$post->ID);
                    if(!empty($link)) echo "<a href='".$link."' target='_blank'>";
                    ?>
                    <div class="block-one-container">
                        <?php
                        $img=wp_get_attachment_image_src( get_field('project_img',$post->ID),'photo-150-150' );
                        ?>
                        <img src="<?=$img[0]?>">
                    </div>
                    <?if(!empty($link)) echo "</a>";?>
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