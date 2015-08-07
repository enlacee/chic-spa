<?php get_header(); ?>


</div>




<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
 
<h2>archives </h2>

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
<ul>
			<li>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

				<div class="introtext">
					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h4>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h4>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h4>Archive for <?php the_time(); ?></h4>

					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h4>Archive for <?php the_time(); ?></h4>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h4>Archive for <?php the_time(); ?></h4>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h4>Author Archive</h4>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h4>Blog Archives</h4>
					
					<?php } ?>
					<?php //echo $key_1_value = get_post_meta(ID, 'Content_Summary', true);?>
					<?php $Content_Summary=get_post_meta(get_the_ID(), 'Content_Summary', true) ?>
					<p><?php echo $Content_Summary;?></p>
				</div>
			</li>
		</ul>


		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); 
						$large=wp_get_attachment_url(get_post_thumbnail_id($post->ID));
				//$thumb=wp_get_attachment_url(get_post_thumbnail_id($post->ID));e
				$thumb=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
				$thumb_url=$thumb[0];
		?>
		

<article class="blogpost" >
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<div class="blogimage" >
<img src="<?php echo $large; ?>" class="blogimage"/>
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




<?php comments_template( '', true ); ?>


</div><!--span8 left end--> 


<aside class="span4"><!--right--> 


<div class="headlinesidebar">


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
<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'price', true); ?></a>
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

<?php get_footer() ?>