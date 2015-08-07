<?php /*
Template Name:About
*/
 get_header(); 

?> 
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

<?php
/*
$post_id = 192;
$queried_post = get_post($post_id);
//echo "<pre>"; var_dump($queried_post);exit;
echo $queried_post->post_content;
*/
echo $post->post_content
?>

<div class="row">
<div class="span12">
<div class="columnheadlineabout1">
<h4><span>Staff</span></h4>
</div></div></div>


<div class="row"><!--one column--> 
	<?php
	$args = array( 'post_type' => 'spaabout', 'posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
<div class="staff paddingbottom1 span12">

<div class="row">

<div class="span2">


<ul class="ch-grid3">
<li>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="ch-item ch-img-11" style="background: url(<?php echo $src[0]; ?> ) !important;">
</div>
</li>
</ul>

<section class="icons">  
   <a href="#"><div class="item"><div><i class="icontwitter"></i></div></div></a>   
  <a href="#"><div class="item"><div><i class="iconfacebook"></i></div></div></a>       
  <a href="#"><div class="item"><div><i class="icongoogle"></i></div></div></a>  

</section>  

</div>

<div class="span10">
<h5><?php the_title();?> <span>- <?php the_title();?> - </span></h5>

<p>
<?php the_content(); ?>
</p>

</div><!--/span10 end-->
</div><!--/row end-->

</div><!--/staff end--> 
<?php endwhile; ?>
</div><!--/row end one column end--> 

</div><!--/container end--> 


<?php  get_footer();  ?> 