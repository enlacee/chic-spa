<?php  get_header(); ?>
</div>
<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
<h2><?php the_title(); ?></span></h2>

</div>
<div class="span6">
 
<ul class="ch-grid1">
<li>
<a href="#">
	 <?php if(!empty($al_options['al_breadecumb'])):?>
<img  class="ch-item ch-img-1" src="<?php echo $al_options['al_breadecumb'] ?>" alt="<?php echo $al_options['al_breadecumb']?>"></a>
	<?php else:?>
	<a href="#"><img class="ch-item ch-img-1" src="<?php echo get_template_directory_uri(); ?>/images/recentnews11.png" alt="logo"></a>
	<?php endif?>
</li>

<li>
<a href="#">
	 <?php if(!empty($al_options['al_breadecumb'])):?>
<img  class="ch-item ch-img-2" src="<?php echo $al_options['al_breadecumb2'] ?>" alt="<?php echo $al_options['al_breadecumb2']?>"></a>
	<?php else:?>
	<a href="#"><img class="ch-item ch-img-1" src="<?php echo get_template_directory_uri(); ?>/images/circleimage1.jpg" alt="logo"></a>
	<?php endif?>
</li>

<li>
<a href="#">
	 <?php if(!empty($al_options['al_breadecumb'])):?>
<img  class="ch-item ch-img-3" src="<?php echo $al_options['al_breadecumb3'] ?>" alt="<?php echo $al_options['al_breadecumb3']?>"></a>
	<?php else:?>
	<a href="#"><img class="ch-item ch-img-1" src="<?php echo get_template_directory_uri(); ?>/images/recentnews11.png" alt="logo"></a>
	<?php endif?>
</li>
</ul>
</div>



</div></div>

</div>
<div class="container">
<div class="row">
<div class="span8"><!--left--> 

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'lotus' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
<div id="page_content"><!--left--> 

			<?php if ( have_posts() ) : ?>




				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						get_template_part( 'content', get_post_format() );
					?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        
                                        <div class="post-content left">
                                        
                                   <header class="post-header">
								<h5><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
												
								<p><?php the_excerpt(); ?></p>
                                </header><!-- post-header -->
                                            
                                            <?php if (!empty($post->post_excerpt)) { ?>
                                            <div class="post-excerpt left">
												<?php the_excerpt(); ?>
                                            </div><!-- post-excerpt -->
                                            <?php } ?>
                                        
                                        </div><!-- post-content -->

				<?php endwhile; ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'lotus' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'lotus' ); ?></p>

					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
<div class="span8">

<div class="pagination">
	<?php if (function_exists("pagination")) {
		pagination($wp_query->max_num_pages);
	} ?>
</div>

</div>
			</div><!-- #content -->
			</div><!-- #content -->

<aside class="span4"><!--right--> 

<?php dynamic_sidebar( 'Blog Sidebar' ); ?>

</aside><!--/span4 rightend--> 

</div><!--/row end--> 

</div><!--/container end-->
<?php get_footer(); ?>