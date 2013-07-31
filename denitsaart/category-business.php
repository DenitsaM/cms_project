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
                      <?php
                       if(have_posts()):
                       while(have_posts()):
                       the_post();
                       ?>
                       <div id="business-template">
						<section>
							<div class="post">
                            <header>
								<h2><a href="<?php the_permalink();?>"><?php  the_title();?></a></h2>
                                <p class="date"><?php echo date('d');?><?php echo date('M');?><?php echo date('Y');?></p>
                            </header>
                                <a href="<?php the_permalink() ?>">
                                  <?php
                                  if ( has_post_thumbnail() ) { ?>
                                  <?php the_post_thumbnail(); ?>
                                  <?php } else { ?>
                                  <?php } ?>
                                </a>
                                 <?php the_excerpt( array(
                                 'theme_location' => 'Posts',
                                 'container'=> 'p' ,
                                 'container_class'=>'business-template'
                                 ) );?>
							</div>
						</section>
                        </div>
                        <?php
                         endwhile;
                         endif;
                         ?>
                  <div class="numb_pages">
                   <div class="prev_page"><?php echo get_previous_posts_link();?></div>
                   <div class="next_page"><?php echo get_next_posts_link(); ?></div>
                  </div>
		   </div>
				<div class="3u">
                 <?php get_sidebar();?>
				</div>
			</div>
<?php get_footer();?>