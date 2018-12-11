<?php
/**
 * Template for displaying search form in bootstrap-basic theme
 * 
 * @package bootstrap-basic
 */

$search_text=translater_custom(["Поиск","Search"]);
?>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url(home_url('/')); ?>">


		<input type="search" id="form-search-input" class="form-control" placeholder="<?php echo esc_attr_x($search_text, 'placeholder', 'bootstrap-basic'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x('Поиск', 'label', 'bootstrap-basic'); ?>">
		
			<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
	
</form>