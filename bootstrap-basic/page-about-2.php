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
<?php get_template_part( 'templates/page/main', 'about' ); ?>

<?php get_footer(); ?>