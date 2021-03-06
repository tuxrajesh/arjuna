<?php
/**
 * @package WordPress
 * @subpackage Arjuna_Theme
 */
?>
<?php get_header(); ?>
		
<?php get_sidebar(); ?>
		<div id="content">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<div class="post" id="post-<?php the_ID(); ?>">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p>Posted on <span class="author-info"><?php the_time('F jS, Y') ?></span> by <span class="author-info"><?php the_author() ?></span></p>

					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>

					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>

			<?php endwhile; ?>

				<div class="navigation">
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>					
				</div>

		<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>

		<?php endif; ?>

		</div>

<?php get_footer(); ?>
