<?php get_header();?>
	<div id="page-wrapper" class="5grid-layout">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u">
				<?php
                    $imgPath = get_bloginfo('stylesheet_directory').'/images/logo.png';
                ?>
                    <div id="banner"><a href="#"><img src="<?php echo $imgPath; ?>" alt=""></a></div>
				</div>
			</div>
		</div>
		<div class="5grid-layout">
			<div class="row">
				<div class="9u">
					<div id="content">
						<section>
<?php $posts=query_posts($query_string .

'&posts_per_page=20'); ?>


<?php if (have_posts()) : ?>

<h1 class="h1">Search Results</h1>

<?php while (have_posts()) : the_post(); ?>


<a href="<?php the_permalink() ?>" rel="bookmark"

title="Permanent Link to <?php the_title_attribute(); ?>">

<?php the_title(); ?></a><br />

<?php the_time('l jS F, Y - g:ia') ?><br />

Posted in <?php the_category(', ') ?>


<?php endwhile; ?>
<?php else : ?>
	<p class="error"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'denitsaart' ); ?></p>
    				<div class="entry-content">
					<p class="error"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'denitsaart' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

					<div class="widget">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'denitsaart' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>

					<?php
					/* translators: %1$s: smilie */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'denitsaart' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->

<?php endif; ?>


<?php next_posts_link('&laquo; Older Entries') ?>

<?php previous_posts_link('Newer Entries &raquo;') ?>
						</section>
					</div>
				</div>

				<div class="3u">
   <?php get_sidebar();?>
				</div>
			</div>
<?php get_footer();?>