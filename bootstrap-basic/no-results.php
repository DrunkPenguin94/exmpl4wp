<?php
/**
 * The template part for displaying message that posts cannot be found.
 * 
 * @package bootstrap-basic
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title g-title"><?php _e(translater_custom(['Ничего не найдено','Nothing Found']), 'bootstrap-basic'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content row-with-vspace">
		<?php if (is_home() && current_user_can('publish_posts')) { ?> 
			<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bootstrap-basic'), esc_url(admin_url('post-new.php'))); ?></p>
		<?php } elseif (is_search()) { ?> 
			<p><?php _e(translater_custom(['Извините, но ничто не соответствовало вашим условиям поиска. Пожалуйста, попытайтесь снова с другими ключевыми словами.','Sorry, but nothing matched your search terms. Please try again with some different keywords.']), 'bootstrap-basic'); ?></p>
            <form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
                <div class="form-group">
                    <div class="col-xs-10">
                        <input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Поиск &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Поиск &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
                    </div>
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-default button white-cl orange-bg"><?php _e('Поиск', 'bootstrap-basic'); ?></button>
                    </div>
                </div>
            </form>
		<?php } else { ?> 
			<p><?php _e(translater_custom(['Кажется, мы не можем найти то, что вы ищете. Возможно, поиск может помочь.','It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.']), 'bootstrap-basic'); ?></p>
            <form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
                <div class="form-group">
                    <div class="col-xs-10">
                        <input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Поиск &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Поиск &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
                    </div>
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-default"><?php _e('Поиск', 'bootstrap-basic'); ?></button>
                    </div>
                </div>
            </form>
		<?php } //endif; ?> 
	</div><!-- .page-content -->
</section><!-- .no-results -->