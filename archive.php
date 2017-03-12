<?php get_header(); ?>
<div id="content">
    <div id="main-content">
<?php if (have_posts()) : ?>
    <?php $post = $posts[0]; /* Hack. Set $post so that the_date() works. */ ?>

        <div class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            ?>
        </div>
    <?php if (is_category()) { ?>
        <p class="string"><?php _e('Posts categorized in ','m_n'); ?><strong><?php echo single_cat_title(); ?></strong></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (is_tag()) { ?>
        <p class="string"><?php _e('Posts tagged with ','m_n'); ?><strong><?php echo single_tag_title(); ?></strong></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (is_day()) { ?>
        <p class="string"><?php _e('Posts published on','m_n'); ?> <?php the_time('F jS, Y'); ?></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (is_month()) { ?>
        <p class="string"><?php _e('Posts published on','m_n'); ?> <strong><?php the_time('F, Y'); ?></strong></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (is_year()) { ?>
        <p class="string"><?php _e('Posts published on','m_n'); ?> <strong><?php the_time('Y'); ?></strong></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (is_author()) { ?>
        <p class="string"><?php _e('Posts published by ','m_n'); ?></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <p class="string"><?php _e('Blog Archives','m_n'); ?></p>
        <a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','m_n'); ?></a>
    <?php } ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="post"  id="post-<?php the_ID(); ?>">
	        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		    <span class="date"><?php the_time(__('m/j/Y','m_n')) ?></span>
			<div class="entry">
				<?php the_content(__('Read the rest of this post','m_n').' &raquo;'); ?>
			</div>
			<span class="number-of-comments"><a href="<?php the_permalink() ?>#comments" title="title"><?php comments_number(__('No Comments','m_n'), __('1 Comment','m_n'), __('% Comments','m_n'));?></a></span>
		</div>
	<?php endwhile; ?>

        <div class="pagination clearfix">
			<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','m_n')) ?></div>
			<div class="next"><?php previous_posts_link(__('Newer posts','m_n').' &raquo;') ?></div>
		</div>
<?php else : ?>
		<h2>Not found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
