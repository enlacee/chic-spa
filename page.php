<?php /*
Template Name:Default
*/
 get_header(); 

?>
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

<div id="page_content"><!--left--> 

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
} 
?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php comments_template( '', true ); ?>

	<?php endwhile;

	// end of the loop. ?>
</div>

</div><!--span8 left end--> 
<aside class="span4"><!--right--> 

<?php dynamic_sidebar( 'Blog Sidebar' ); ?>

</aside><!--/span4 rightend--> 

</div><!--/row end--> 

</div><!--/container end--> 

 <?php  get_footer();  ?> 