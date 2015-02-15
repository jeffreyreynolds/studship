<?php get_header(); ?>

<div id="center">

		<!-- START SIDEBAR -->
		<?php get_sidebar( 'primary' ); ?>
		<!-- END SIDEBAR -->

		<!-- START CONTENT -->

			<div id="content">

				<h2>Error 404</h2>

				<p>We're sorry! The page you are looking for doesn't exist.</p>

				<p>You can search for what you were looking for using the search window on the right . . .</p>

				<p>. . or you can go back to the <a href="<?php bloginfo('home'); ?>" >home page.</a></p>	
				</div>

			</div><!--#content-->
			
		<!-- END CONTENT -->	
		
		<!-- START SIDEBAR -->
		<?php get_sidebar( 'secondary' ); ?>
		<!-- END SIDEBAR -->

	</div><!--#main-->
	
</div><!--#center-->

<?php get_footer(); ?>