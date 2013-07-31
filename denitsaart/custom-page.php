<?php
/*
 * Template Name: My Custom Page
 * Description: A Page Template with a darker design.
 */
 ?>
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
<div id="wrap_slide">
<div id="slide">
  <div id="wrapper-nivo">
    <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo get_template_directory_uri();?>/images/slide1.jpg" data-thumb="<?php echo get_template_directory_uri();?>/images/slide1.jpg" alt="" />
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/slide2.jpg" data-thumb="<?php echo get_template_directory_uri();?>/images/slide2.jpg" alt="" title="projects" /></a>
                <img src="<?php echo get_template_directory_uri();?>/images/slide3.jpg" data-thumb="<?php echo get_template_directory_uri();?>/images/slide3.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo get_template_directory_uri();?>/images/slide4.jpg" data-thumb="<?php echo get_template_directory_uri();?>/images/slide4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is most notable <a href="#">projects</a>.
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <div id="imgText"><h2>Our Company Details</h2> <p class="p">This is not only a company for us  it's our family. We take care of our employees and our clients with big pleasure. Our company deals with web design and web site development, design of logos and banners, with proficiency and imagination that will make your business successful like never before. Be part of our family and you'll not regret it!''</p></div>
</div> <!-- slide -->
</div> <!-- wrap_slide -->
	</div>
    </div>
    </div>
<?php get_footer();?>