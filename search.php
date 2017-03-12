<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
	<?php if (have_posts()) : ?>
		<p class="page-header"><?php _e('You searched for the following','m_n'); ?>: "<strong><?php echo wp_specialchars($s); ?></strong>"</p>
		<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
		<h2 class="error"><?php _e('Search results','m_n'); ?></h2>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post"  id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<span class="date"><?php the_time(__('m/j/Y','m_n')) ?></span>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			<span class="number-of-comments"><a href="<?php the_permalink() ?>#comments" title="title"><?php comments_number(__('No Comments','m_n'), __('1 Comment','m_n'), __('% Comments','m_n'));?></a></span>
		</div>
		<?php endwhile; ?>
		<div class="pagination clearfix">
			<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','m_n')) ?></div>
			<div class="next"><?php previous_posts_link(__('Newer posts','m_n').' &raquo;') ?></div>
		</div>
	<?php else : ?>
		<p class="page-header"><?php _e('You searched for the following','m_n') ?>: "<strong><?php echo wp_specialchars($s); ?></strong>"</p>
		<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
		<h2 class="error"><?php _e('We didn\'t find anything. Try a different search or look in the categories below.','m_n'); ?></h2>
	<?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>