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
                        <h2><?php  the_title();?></h2>
                                <a href="<?php the_permalink() ?>">
                                  <?php
                                  if ( has_post_thumbnail() ) { ?>
                                  <?php the_post_thumbnail(); ?>
                                  <?php } else { ?>
                                  <?php } ?>
                                </a>
                        <?php the_post(); ?>
							<div class="post">
                            <?php the_content( array(
                          'theme_location' => 'Posts',
                          'container'=> 'p' ,
                          ) );?>
                          <p><?php the_tags(); ?></p>
							</div>
						</section>
                           <?php echo comments_template('','true')?>;
                      <div class="numb_pages">
                       <div class="prev_page"><?php previous_post_link('%link', 'Previous', TRUE); ?></div>
                       <div class="next_page"><?php next_post_link('%link', 'Next', TRUE); ?></div>
                      </div>
					</div>
				</div>
				<div class="3u">
   <?php get_sidebar();?>
				</div>
			</div>
<?php get_footer();?>