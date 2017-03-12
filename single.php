<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<span class="date"><?php the_time(__('m/j/Y','m_n')) ?></span>
				<div class="entry">
					<?php the_content(__('Read the rest of this post','m_n').' &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','m_n').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php getTagList(get_the_ID()); ?>
				</div>
			</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p class="page-header"><?php _e('Sorry, there are no posts about that.','m_n'); ?></p>
	<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
