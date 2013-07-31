<!DOCTYPE HTML>
<html>
<head>
<title><?php wp_title('|', true, 'right')?> <?php bloginfo('name');?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="" />
 <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jquery-1.7.1.min.js"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
			<script type="text/javascript">
				$(document).ready(function(){
					$(".mobileUI-site-nav-opener").click(function(){
						$("#mobileUI-site-nav").toggle("fast");
						$(this).toggleClass("active");
						return false;
					});
				});
			</script>
<?php if ( is_singular() && get_option('thread_comments'))
    wp_enqueue_script('comment-reply');
    wp_head();
?>
</head>
<body <?php body_class($class); ?>>
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="logo"> <!-- Logo -->
						<h1><a href="<?php echo get_option('home'); ?>" class="mobileUI-site-name"> <?php bloginfo( 'name' ); ?>
                     <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a></h1>
					</div>
				</div>
			</div>
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<div id="menu-wrapper">
							<nav>
    <?php wp_nav_menu( array(
    'theme_location' => 'Pr menu'
    ) ); ?>
							</nav>
						</div>
                        <div id="mobileUI-site-nav">
                            <nav>
    <?php wp_nav_menu( array(
    'theme_location' => 'Pr menu'
    ) ); ?>
                            </nav>
                      </div>
                      <a class="mobileUI-site-nav-opener active" href="#"></a>
					</div>
				</div>
			</div>
		</header>
	</div>