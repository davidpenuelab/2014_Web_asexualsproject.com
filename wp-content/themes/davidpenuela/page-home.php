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
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Asexuals project</a>
                </div>
                <div class="collapse navbar-collapse custom-collapse" id="mainMenu">
                    <ul id="scrollMenu" class="nav navbar-nav">
                        <li><a class="scroll-link" href="#" data-id="homeVimeo">Home</a></li>
                        <li><a class="scroll-link" href="#" data-id="project">Project</a></li>
                        <li><a class="scroll-link" href="#" data-id="about">About</a></li>
                        <li><a class="scroll-link" href="#" data-id="news">News</a></li>
                        <li><a class="scroll-link" href="#" data-id="participate">Participate</a></li>
                        <li><a class="scroll-link" href="#" data-id="contact">Contact</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
            </div>        
        </nav>
	</header><!-- #masthead -->

	<div class="container-full">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" >
            <div class="jumbotron" id="homeVimeo">
                <div>
                    <iframe src="//player.vimeo.com/video/85209027?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <div class="jumbotron" id="project">
                <?php
                    $args = array( 'posts_per_page' => -1, 'category' => 2, 'orderby' => 'title', 'order' => 'ASC');
                    $lastposts = get_posts( $args );
                    foreach ( $lastposts as $post ) :
                        setup_postdata( $post ); ?>
                        <div id="image_<?php echo $post_id ?>" class="img_thumb col-sm-4 col-md-4">
                            <?php echo get_the_post_thumbnail($post_id, 'full');?>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                <br style="clear:both" />
            </div>
            <div class="jumbotron" id="about">
                <?php echo 'about';?>
            </div>
            <div class="jumbotron" id="news">
                <?php echo 'news';?>
            </div>
            <div class="jumbotron" id="participate">
                <?php echo 'participate';?>
            </div>
            <div class="jumbotron" id="contact">
                <?php echo 'contact';?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
