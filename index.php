<?php
/**
 * @package WordPress
 * @subpackage CocoaDiego
 */
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_date('','<h3>','</h3>'); ?>
		<div <?php post_class() ?>id="post-<?php the_ID(); ?>"> <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
			<div class="meta">
				<?php _e("Filed under:"); ?>
				<?php the_category(',') ?>&#8212; <?php the_tags(__('Tags: '), ', ', ' &#8212; '); ?><?php the_author() ?>@ <?php the_time() ?><?php edit_post_link(__('Edit This')); ?>
			</div>
			<div class="storycontent">
				<?php the_content(__('(more...)')); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
<?php get_footer(); ?>