<div id="sidebar-secondary">
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
	<div id="search-box">
		<p><?php _e('Search'); ?></p>
			<ul>	
				<?php get_search_form(); ?>
			</ul>
	</div><!--#search-box--><br>
	
	<!--insert calendar here-->
	

	
	<?php endif; ?>
</div><!--/sidebar-secondary-->
