<?php /*
Template Name:About Two
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
<div class="row">


<div class="span8"><!--left--> 

<?php
	$post_id = 194;
	$queried_post = get_post($post_id);
	echo $queried_post->post_content;
?>

<?php
if(!get_post_meta(get_the_ID(), 'spaabout_category', true)):
	$portfolio_category = get_terms('spaabout_category');
	if($portfolio_category):
?>

<ul class="splitter">
<li>
<ul class="splitterbg">
<li class="segment-2">
<a href="#" data-value="everybody"><?php _e('All', 'Lotus'); ?></a></li>
<?php foreach($portfolio_category as $portfolio_cat): ?>
<li class="segment-1">
<a href="<?php echo $portfolio_cat->name; ?>" data-value="<?php echo $portfolio_cat->slug; ?>"> <?php echo $portfolio_cat->name; ?>  </a></li>
<?php endforeach; ?>
</ul>

</li></ul>

<?php endif; ?>
<?php endif; ?>

<ul id="list" class="image-grid">
    <?php
	$portfolio_types="";
    query_posts(array(
        'post_type' => 'spaabout',
        'showposts' => -1
    ));

    if (have_posts()) : while (have_posts()) : the_post();
            $spaabout_types = wp_get_post_terms($post->ID, 'spaabout_category');
            if (has_post_thumbnail()) 
			
    ?>
<li data-id="id-<?php echo $post->ID; ?>" class="everybody therapist  <?php foreach ($spaabout_types as $item) echo $item->slug . ' '; ?>"><!-- one picture-->

<div class="row">

<div class="staff span8">

<div class="row">

<div class="span2">

<ul class="ch-grid3">
<li>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="ch-item ch-img-1" style="background: url(<?php echo $src[0]; ?> ) !important;">
</div>
</li>
</ul>

</div>

<div class="span6">
<h5><?php the_title();?> <span>- <?php echo $portfolio_cat->name; ?> - </span></h5>

<p>
<?php $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,39);
?>
</p>

</div><!--/span10 end-->
</div><!--/row end-->

</div><!--/staff end--> 
      <?php
            
    endwhile;
    endif;

    wp_reset_query();
    ?>
</div><!--/row end --> 

</li><!-- one picture end-->
 </ul>
</div><!--span8 left end--> 
<aside class="span4"><!--right--> 

<div class="headlinesidebar">
<h4><span>Services</span></h4>
</div>

<ul class="sidebarabout1">
<?php
$args = array( 'post_type' => 'servicespecial', 'posts_per_page' => 1);
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

<?php dynamic_sidebar( 'About Sidebar' ); ?>

<div class="headlinesidebar">
<h4><span>Special</span></h4>
</div>


<div class="row sidebarabout4">

	<?php
	$args = array( 'post_type' => 'servicespecial', 'posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
<div class="staff span4">

<ul class="ch-grid3">
<li>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="ch-item ch-img-1" style="background: url(<?php echo $src[0]; ?>  ) !important;">
</div>
</li>
</ul>


<div class="aboutprice">
<a href="#">10$</a>
</div>

<h5><?php the_title();?> </h5>

<p>
<?php $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,10);
?>
</p>

</div>
<?php endwhile; ?>
</div><!--/row end --> 
</aside><!--/span4 rightend--> 
</div><!--/row end--> 
 </div><!--/container end--> 

<?php get_footer(); ?>