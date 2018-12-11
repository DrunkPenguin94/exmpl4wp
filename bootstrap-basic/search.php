<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from active sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<div class="page fon1 page-search vh100">

    <div class="container">
        <div class="row">

                        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
                            <main id="main" class="site-main" role="main">
                                <?php if (have_posts()) { ?>
                                <header class="page-header">
                                    <h1 class="page-title g-title"><?php printf(__(translater_custom(["Результат поиска для : %s",'Search Results for: %s']), 'bootstrap-basic'), '<span>' . get_search_query() . '</span>'); ?></h1>
                                </header><!-- .page-header -->
                                <?php
                                // start the loop
                                while (have_posts()) {
                                    the_post();

                                    /* Include the Post-Format-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                    */
                                    get_template_part('content', 'search');
                                }// end while

                                bootstrapBasicPagination();
                                ?>
                                <?php } else { ?>
                                <?php get_template_part('no-results', 'search'); ?>
                                <?php } // endif; ?>
                            </main>
                        </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 
