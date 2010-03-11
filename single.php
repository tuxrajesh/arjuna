<?php
/**
 * @package WordPress
 * @subpackage Arjuna_Theme
 */
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

	<div id="content">
		<!-- For each post in the collection, print the post as follows -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!-- Display Previous post and Next Post as links -->
			<div class="navigation">
				<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			</div>
			
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<p>Posted on <span class="author-info"><?php the_time('F jS, Y') ?></span> by <span class="author-info"><?php the_author() ?></span></p>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

					<p class="postmetadata">
							This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
							and is filed under <?php the_category(', ') ?>.
							You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
							<?php edit_post_link('Edit this entry','','.'); ?>
					</p>
				</div>
			</div>

			<?php comments_template(); ?>

		<?php endwhile;
		 else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
		
	</div> <!-- end of content -->

<?php get_footer(); ?>