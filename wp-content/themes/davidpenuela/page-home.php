<?php
/**
 * Template Name: Home
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package davidpenuela
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="description" content='An Asexual is a person "who does not experience sexual attraction". However some of them are able to feel romantic attraction and be in platonic relationships.'>
<meta name="author" content="David Penuela & Guillermo Brotons">
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#mainMenu" data-offset="80">
	<div class="hfeed site home_container">
		<?php do_action( 'before' ); ?>
		<header id="load1" class="site-header" role="banner">
	        <nav class="navbar navbar-asexuals navbar-fixed-top" id="spyme" role="navigation">
	            <div class="container-fluid">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".asexuals-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                </div>
	                <div class="collapse navbar-collapse asexuals-collapse" id="mainMenu">
	                    <ul id="scrollMenu" class="nav navbar-nav">
	                        <li class="active"><a class="scroll-link" href="#video" data-id="video">Teaser</a></li>
	                        <li class=""><a class="scroll-link" href="#project" data-id="project">Asexuals Project</a></li>
	                        <li class=""><a class="scroll-link" href="#about" data-id="about">About</a></li>
	                        <li class=""><a class="scroll-link" href="#news" data-id="news">News</a></li>
	                        <li class=""><a class="scroll-link" href="#participate" data-id="participate">Participate</a></li>
	                        <li class=""><a class="scroll-link" href="#contact" data-id="contact">Contact</a></li>
	                    </ul>
	                    <ul class="nav navbar-nav navbar-right">
	                        <li><a href="https://www.facebook.com/asexproject"><div class="icon icon-facebook"></div></a></li>
	                        <li><a href="http://instagram.com/laia_abril"><div class="icon icon-instagram"></div></a></li>
	                        <li><a href="https://twitter.com/laiaabril"><div class="icon icon-twitter"></div></a></li>
	                    </ul>
	                </div><!--/.nav-collapse -->
	            </div>        
	        </nav>
		</header><!-- #masthead -->
		<div class="content">
			<div class="container-fluid" id="load2">
				<div class="row homeVimeo" id="video">
					<div class="col-xs-12 video">
						 <iframe src="//player.vimeo.com/video/85209027?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div><!-- video-->
			<div class="container-fluid section_project" id="load3">
				<div class="row" id="project">
					<?php
	                $args = array( 'posts_per_page' => -1, 'category' => 2, 'orderby' => 'title', 'order' => 'ASC');
	                $lastposts = get_posts( $args );
	                foreach ( $lastposts as $post ) :
	                    setup_postdata( $post ); ?>
	                    <div id="image_<?php echo $post->ID; ?>" class="nopadding col-sm-4 col-md-4 imageWrapper">
	                        <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'img-responsive'));
		                        if(get_custom_field('has_text')){
			                        echo '<a class="fancybox-iframe" href = "#'.get_custom_field("a_name").'_'.$post->ID.'">';
		                        }else{
			                        echo '<a class="fancybox-media" href = "'.get_custom_field("e_video").'">';
			                        
		                        }
		                        
	                        ?>
	                        	<div class="description">
	                        	</div>
	                        	<div class="description2">
									<div class="desc_center"><?php print_custom_field('a_name'); ?></div>
									<div class="desc_bottom">
										<?php print_custom_field('b_age'); ?>,
										<?php print_custom_field('c_location'); ?><br />
										<?php print_custom_field('d_type'); ?><br />										
									</div>
								</div>
	                        </a>
	                    </div>
	                    <?php  
	                    	if(get_custom_field('has_text')){
			                	echo '<div class="interview_box" id="'.get_custom_field("a_name").'_'.$post->ID.'" style="display:none;">';
				                	echo '<div class="interview_box_inner">'.apply_filters('the_content',get_custom_field("e_text")).'</div><!-- interviewbox-->';
			                	echo '</div><!-- #hidden_michele-->';
		                    }else{
			                    echo '';    
		                    }
		                ?>
	                <?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div><!-- images -->
			<div class="container-fluid section about" id="load4">
				<div class="row innerSection" id="about">
						<?php $post_20 = get_post(20); ?>
						<div class="col-xs-12 col-sm-3"><h1><?php echo $post_20->post_title; ?></h1></div>
						<div class="clearfix visible-xs"></div>
						<?php echo apply_filters('the_content',$post_20->post_content); ?>
				</div>
			</div><!-- about -->
			<hr class="divider">
			<div class="container-fluid section" id="load6">
				<div class="row innerSection" id="news">
					<div class="col-xs-12 col-sm-3"><h1>NEWS</h1></div>
					<div class="clearfix visible-xs"></div>
					<div id="asex_news_carousel" class="carousel slide col-xs-12">					                
						<!-- Carousel items -->
		                <div class="carousel-inner">
			                <?php
				                $get_args = array( 'posts_per_page' => -1, 'category' => '3', 'orderby' => 'title', 'order' => 'ASC');
				                $allnews = get_posts( $get_args );
				                $counter = 0;
				                $firstTime = true;
				                foreach ( $allnews as $post ) :
					                setup_postdata( $post );
				                	if($counter%3 === 0){
				                		if($firstTime == true){
				                			$firstTime = false;
						                	echo '<div class="item active">
						                			<div class="row">';
						                }else{
						                	echo '<div class="item">
						                			<div class="row">';							                
						                }				                		
				                	}
					                echo '<div id="news_'.$post->ID.'" class="col-sm-4 col-md-4 newsWrapper">';
					                	echo '<div class="news_date">'.get_custom_field('n_a_date').'</div>';
										echo '<div class="news_description">'.get_custom_field('n_b_description').'</div>';
										echo '<div class="news_link"><a href="'.get_custom_field('n_c_link').'" target="_blank">VIEW</a></div>';
									echo '</div><!--/col-sm-4 -->';
									
									if( ($counter%3) === 2) {// si es final, añade row
										echo '</div><!--/row--></div><!--item-->';  
									}else{ // sino, mira si el contador es impar
										if( ( ((count($allnews)%3)=== 1)|| ((count($allnews)%3)=== 2) )&& (count($allnews)=== ($counter+1)) ){
											echo '</div><!--/row--></div><!--item-->';
										}
									}

									$counter++;
								endforeach; 
							wp_reset_postdata(); ?>
		                </div><!--/carousel-inner--> 
		                <!-- <a class="left carousel-control" href="#asex_news_carousel" data-slide="prev"></a> -->
		                <a class="right carousel-control" href="#asex_news_carousel" data-slide="next"><div class="icon icon-arrowRight"></div></a>
		            </div>
		            <!--/myCarousel-->
				</div><!-- news-->
			</div><!-- load5-->
			<hr class="divider">
			<div class="container-fluid section" id="load7">
				<div class="row innerSection" id="participate">
						<?php $post_22 = get_post(22); ?>
						<div class="col-xs-12 col-sm-3"><h1><?php echo $post_22->post_title; ?></h1></div>
						<div class="visible-xs clearfix"></div>
						<?php echo apply_filters('the_content',$post_22->post_content); ?>
				</div>
			</div><!-- participate -->
			<hr class="divider">
			<div class="container-fluid section" id="load8">
				<div class="row innerSection" id="contact">
						<?php $post_24 = get_post(24); ?>
						<div class="col-xs-12"><h1><?php echo $post_24->post_title; ?></h1></div>
						<?php echo apply_filters('the_content',$post_24->post_content); ?>
				</div>
			</div><!-- contact -->
			<hr class="divider">
			<div class="container-fluid section" id="load9">
				<div class="row innerSection" id="team">
						<?php $post_107 = get_post(107); ?>
						<?php echo apply_filters('the_content',$post_107->post_content); ?>
				</div>
			</div><!-- contact -->
			<div class="container-fluid section" id="load10">
				<div class="row" id="footer">
						<div class="col-xs-12 col-sm-3">Copyright  Laia Abril 2014</div>
						<div class="col-xs-12 col-sm-6"></div>
						<div class="col-xs-12 col-sm-3">Site by Guille + Penu</div>
				</div>
			</div><!-- contact -->
		</div><!-- content so i can scrollspy-->
		<!-- ?php get_footer(); ?-->
	</div><!-- #home-container -->

	<?php wp_footer(); ?>

</body>
</html>
