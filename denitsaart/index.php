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
				<div class="6u">
					<div id="content">
                      <?php
                       if(have_posts()):
                       while(have_posts()):
                       the_post();
                       ?>
						<section>
							<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h2><?php  the_title();?></h2>
                                <div id="tmb-wrap">
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
                                       'container_class'=>'content'
                                       ) );?>
                              </div>
                                       <p class="button-style"><a href="<?php the_permalink();?>">Read Full Article</a></p>
                                       <p><?php the_tags(); ?></p>
							</div>
						</section>
                        <?php
                         endwhile;
                         endif;
                         ?>
                        <div class="numb_pages">
                         <div class="prev_page"><?php echo get_previous_posts_link();?></div>
                         <div class="next_page"><?php echo get_next_posts_link(); ?></div>
                        </div>
					</div>
				</div>
                <div class="3u" id="sidebar1">
		             <?php if(!dynamic_sidebar('widget1')){?>
                     <h2>Volutpat</h2>
						<ul class="style1">
							<li><a href="#">Maecenas  lectus  sapien</a></li>
							<li><a href="#">Etiam rhoncus volutpat </a></li>
							<li><a href="#">Donec dictum  in sapien</a></li>
							<li><a href="#">Etiam rhoncus volutpat </a></li>
							<li><a href="#">Donec dictum  in sapien</a></li>
							<li><a href="#">Integer gravida  quis urna</a></li>
							<li><a href="#">Etiam posuere   amet nisl</a></li>
							<li><a href="#">Integer gravida  quis urna</a></li>
							<li><a href="#">Etiam posuere   amet nisl</a></li>
							<li><a href="#">Mauris vulputate   amet </a></li>
							<li><a href="#">Nulla luctus eleifend </a></li>
						</ul>
                     <?php } ?>
				</div>
				<div class="3u">
   <?php get_sidebar();?>
		</div>
	</div>
<?php get_footer();?>