<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div class="pages projects-page fon1 vh100">
    <div class="container">
        <h1 class="g-title">  <?=the_title()?></h1>
        <div class="row">
            <div class="col-lg-12">
		<?php
					/*	while (have_posts()) {
							the_post();

							
							$content = get_the_content();
							$content = htmlentities($content);
							$content=str_replace('&nbsp;', '<br>', $content);
							
							echo html_entity_decode($content);
                            echo $content;
						} //endwhile;
					*/
        the_post();
        the_content();
						?>
            </div>
		</div>
	</div>
</div>

<?php get_footer(); ?> 