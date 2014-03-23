<?php
/**
 * Template Name: Home2
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package davidpenuela
 */

get_header(); ?>

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
