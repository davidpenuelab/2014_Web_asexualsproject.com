<?php
/**
 * Template Name: Home
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package davidpenuela
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#mainMenu">
	<div class="hfeed site home_container" id="load1">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
	        <nav class="navbar navbar-asexuals navbar-fixed-top" role="navigation">
	            <div class="container-fluid">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                </div>
	                <div class="collapse navbar-collapse asexuals-collapse" id="mainMenu">
	                    <ul id="scrollMenu" class="nav navbar-nav">
	                        <li><a class="scroll-link" href="#video" data-id="video">Home</a></li>
	                        <li><a class="scroll-link" href="#project" data-id="project">Project</a></li>
	                        <li><a class="scroll-link" href="#about" data-id="about">About</a></li>
	                        <li><a class="scroll-link" href="#news" data-id="news">News</a></li>
	                        <li><a class="scroll-link" href="#participate" data-id="participate">Participate</a></li>
	                        <li><a class="scroll-link" href="#contact" data-id="contact">Contact</a></li>
	                    </ul>
	                  </div><!--/.nav-collapse -->
	            </div>        
	        </nav>
		</header><!-- #masthead -->
		<div class="content">
			<div class="container-fluid section" id="load2">
				<div class="row homeVimeo" id="video">
					<div class="col-xs-12 video">
						 <iframe src="//player.vimeo.com/video/85209027?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div><!-- video-->
	
			<div class="container-fluid section" id="load3">
				<div class="row" id="project">
					<?php
	                $args = array( 'posts_per_page' => -1, 'category' => 2, 'orderby' => 'title', 'order' => 'ASC');
	                $lastposts = get_posts( $args );
	                foreach ( $lastposts as $post ) :
	                    setup_postdata( $post ); ?>
	                    <div id="image_<?php echo $post_id ?>" class="nopadding col-sm-4 col-md-4 imageWrapper">
	                        <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'img-responsive'));?>
	                        <div class="description">
								<strong>name</strong> <?php print_custom_field('a_name'); ?><br />
								<strong>age</strong> <?php print_custom_field('b_age'); ?><br />
								<strong>location</strong> <?php print_custom_field('c_location'); ?><br />
								<strong>type</strong> <?php print_custom_field('d_type'); ?><br />
								<strong>extra text</strong> <?php print_custom_field('e_extra'); ?><br />	                        
	                        </div>
	                    </div>
	                <?php endforeach; wp_reset_postdata(); ?>
	                <div class="clarfix"></div>
				</div>
			</div><!-- images -->
	
			<div class="container-fluid section" id="load4">
				<div class="row" id="about">
						<?php $post_20 = get_post(20); ?>
						<div class="col-xs-1"></div>
						<div class="col-xs-2"><h1><?php echo $post_20->post_title; ?></h1></div>
						<div class="col-xs-1"></div>
						<?php echo apply_filters('the_content',$post_20->post_content); ?>
						<div class="col-xs-1"></div>
				</div>
			</div><!-- about -->
			
			<div class="container-fluid section" id="load5">
				<div class="row" id="news">
				</div>
			</div><!-- news-->
	
			<div class="container-fluid section" id="load6">
				<div class="row" id="participate">
						<?php $post_22 = get_post(22); ?>
						<div class="col-xs-1"></div>
						<div class="col-xs-12 col-sm-2"><h1><?php echo $post_22->post_title; ?></h1></div>
						<div class="visible-xs clearfix"></div>
						<div class="col-xs-1"></div>
						<?php echo apply_filters('the_content',$post_22->post_content); ?>
						<div class="col-xs-1"></div>
				</div>
			</div><!-- participate -->
			
			<div class="container-fluid section" id="load7">
				<div class="row" id="contact">
						<?php $post_24 = get_post(24); ?>
						<div class="col-xs-1"></div>
						<div class="col-xs-2"><h1><?php echo $post_24->post_title; ?></h1></div>
						<div class="col-xs-1"></div>
						<?php echo apply_filters('the_content',$post_24->post_content); ?>
						<div class="col-xs-1"></div>
				</div>
			</div><!-- contact -->

		</div><!-- content so i can scrollspy-->
		<!-- ?php get_footer(); ?-->
	</div><!-- #home-container -->

	<?php wp_footer(); ?>

</body>
</html>
