<?php /*
Template Name:Blog
*/
 get_header(); 

?>


</div>
<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
<h2><?php echo get_the_title(); ?> </h2>

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

<div class="columnheadlineabout2" <?php post_class(); ?>>
<h4><span>Recent news</span></h4>
</div>
<?php
  function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  //$first_img = $matches [1] [0];
 if(isset($matches[1][0]))
 {
 $first_img = $matches [1] [0];
 }
  if(empty($first_img)){ //Defines a default image
    $first_img = " ";
  }
  return $first_img;
}
?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=2&paged='. get_query_var('paged')); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		

<article class="blogpost" >
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<div class="blogimage" >
<img src="<?php echo catch_that_image(	); ?>" />
<div class="blogdate">
<?php
$dat=array();$dy="";
$dt=get_the_date();
                       //echo $dt;

                       $dat =  preg_split('[ /.-]', $dt);
                       $dm=$dat[0];
                       list($month,$dy,$year)=explode(' ', $dm);
                       list($day) = explode(',', $dy);
?>
<p><?php echo $day; ?> <br><?php echo $month; ?> <br><?php echo $year; ?></p>

</div>
</div>

<div class="blogmeta">
<p>AUTOR: <span><?php the_author(); ?></span></p>
<p>tags: <span><?php  the_tags(); ?></span></p>
<p class="blogmetalast">comments: <span><?php comments_number( '0', '1', '%' ); ?></span></p>
</div>

<p class="blogtext">
	<?php
		$excerpt = get_the_excerpt();
		echo string_limit_words($excerpt,60);
	?>
</p>

</article>

		<?php endwhile; ?>
		<?php endif; ?>

<div class="span8">

<div class="pagination">
	<?php if (function_exists("pagination")) {
		pagination($wp_query->max_num_pages);
	} ?>
</div>
<div class="paginationnone">
	<?php wp_link_pages(); ?>
	<?php next_posts_link(); ?>
	<?php previous_posts_link(); ?>
</div>
</div>



</div><!--span8 left end--> 




<aside class="span4"><!--right--> 

<?php dynamic_sidebar( 'Blog Sidebar' ); ?>


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
<a href="#"><?php echo get_post_meta($post->ID, 'price', true); ?></a>
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

 <?php  get_footer();  ?> 