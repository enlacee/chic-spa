<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body onLoad="initialize()">
</div>
<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
 
<h2><?php echo get_the_title(); ?></h2>

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
<div class="span8">


        <article class="singlepost">
        	<h2><?php the_title(); ?></h2>
            <a href="#"><?php the_post_thumbnail('post-image');
$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID,'thumbnail'))
 ?></a>
            <?php the_content(); ?>
        </article><!--end:content-->
</div>	
<div class="span4">	
<?php dynamic_sidebar( 'About Sidebar' ); ?>
</div>	
</div><!--/row end--> 
</div><!--/container end--> 
	<?php endwhile; endif; ?>

<?php get_footer() ?>