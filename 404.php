<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<p class="page-header"><?php _e('The page you are looking for doesn\'t exist. Sorry.','m_n'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
			<h2 class="error"><?php _e('Try a different search or look in the categories below.','m_n'); ?></h2>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>