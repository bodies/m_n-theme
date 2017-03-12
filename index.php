<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<span class="date"><?php the_time(__('m/j/Y','m_n')) ?></span>
					<div class="entry">
						<?php the_content('<div class="more">'.__('Continue Reading','m_n').' &raquo;</div>'); ?>
					</div>
					<span class="number-of-comments"><a href="<?php the_permalink() ?>#comments" title="title"><?php comments_number(__('No Comments','m_n'), __('1 Comment','m_n'), __('% Comments','m_n'));?></a></span>
				</div><!-- close:post -->
			<?php endwhile; ?>
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','m_n')) ?></div>
				<div class="next"><?php previous_posts_link(__('Newer posts','m_n').' &raquo;') ?></div>
			</div>
		<?php else : ?>
			<p class="page-header"><?php _e('You broke the interwebs... wow... way to go.. no really you may want to call someone to take a look at it..','m_n'); ?></p>
		<?php endif; ?>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>