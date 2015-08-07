<?php get_header();
/**
 * Template Name: Home Camera   
 */
?>
	<?php global $al_options; ?>
	
	<?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');?>

      <div class="camera_wrap" id="camera_wrap">
    		<?php
				$args = array( 'post_type' => 'cameraslide');
				$posts = get_posts( $args );
				foreach ( $posts as $post ) {
				
				$large=wp_get_attachment_url(get_post_thumbnail_id($post->ID));
				$thumb=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
				$thumb_url=$thumb[0];
				
				?>       
           <div   data-src="<?php echo $large; ?>" data-time="1500" data-trasPeriod="3000" data-target="_blank">
                <div class="fadeIn cameracaption1"> 
                <h2><?php the_title();?></h2>
                 <h3><?php echo get_post_meta($post->ID, 'heading_2', true); ?></h3>
<p>
<?php echo $post->post_content; ?> 
</p>

<section class="buttoncameraslider">
<a href="#">read more</a>
</section>


          </div>
            </div>
				<?php
				}
				?>
        </div><!-- #camera_wrap -->

</div>





<div class="underslider1">



<div class="container">
<div class="row">
<div class="span12">
	<?php
	$args = array( 'post_type' => 'cameraslide', 'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
<h3><?php the_title();?> <span><?php echo get_post_meta($post->ID, 'heading_2', true); ?></span></h3>
<?php endwhile ?>
<p>
<?php echo isset($al_options['al_underslidetext']) ? $al_options['al_underslidetext'] : 'Lotus' ?>
</p>


<section class="buttonunderslider">
<a href="#">read more</a>
</section>

</div>



</div></div></div>



<div class="container">
<div class="row">

<div class="span4 spacolumn">
	<?php
	$args = array( 'post_type' => 'spahome', 'posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$large=wp_get_attachment_url(get_post_thumbnail_id($post->ID));	
	?>


<div class="spaheadline">

<h3><?php the_title();?></h3>

</div>

<h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
<img class="circleimage1a" src="<?php echo $large; ?>" alt=""/> 
<div class="circleimage1aa">
<div class="circlebg">
</div>
</div>

<div class="decoration">
</div>

<p>
<?php the_content(); ?>
</p>

<section class="button1">
<a href="#">read more</a>
</section>
<?php endwhile; ?>

</div><!--/span4 end--> 






<div class="span4 spacolumn">
	<?php
	$args = array( 'post_type' => 'spawellness', 'posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$large=wp_get_attachment_url(get_post_thumbnail_id($post->ID))
	?>


<div class="spaheadline">

<h3><?php the_title();?></h3>

</div>

<h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
<img class="circleimage1a" src="<?php echo $large; ?>" alt=""/> 
<div class="circleimage2aa" >

</div>

<div class="decoration">
</div>

<p>
<?php the_content(); ?>
</p>

<section class="button1">
<a href="#">read more</a>
</section>
<?php endwhile; ?>

</div><!--/span4 end--> 


<div class="span4 spacolumn">
	<?php
	$args = array( 'post_type' => 'spahome', 'posts_per_page' => 3 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$large=wp_get_attachment_url(get_post_thumbnail_id($post->ID))
	?>


<div class="spaheadline">

<h3><?php the_title();?></h3>

</div>

<h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
<img class="circleimage1a" src="<?php echo $large; ?>" alt=""/> 
<div class="circleimage1aa">
<div class="circlebg">
</div>
</div>

<div class="decoration">
</div>

<p>
<?php the_content(); ?>
</p>

<section class="button1">
<a href="#">read more</a>
</section>
<?php endwhile; ?>

</div><!--/span4 end--> 


</div><!--/row end--> 

<div class="row">
<?php
	$post_id = 269;
	$queried_post = get_post($post_id);
	echo $queried_post->post_content;
?>
</div><!--/row end--> 


<div class="row">

<div class="span6">

<div class="columnheadline">
<h3><span><?php echo isset($al_options['al_newstitle']) ? $al_options['al_newstitle'] : '' ?></span></h3>
</div>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); 
$small=wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<div class="row">
<div class=" span6 recentnewsrow">

<a href="" class="ch-gridwrapper">
<ul class="ch-grid">
<li>
<div class="ch-item" >
<img class="ch-item ch-img-1" src="<?php echo $small; ?>" alt=""/> 
<div class="ch-info">
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
</li>
</ul>
</a>		

<h4><a href="#"><?php the_title(); ?></a></h4>
<p>
	<?php
		$excerpt = get_the_excerpt();
		echo string_limit_words($excerpt,20);
	?>
</p>
</div>
</div><!--/span6 end--> 

		<?php endwhile; ?>
		
		<?php endif; ?>

</div>



<div class="span6">


<div class="columnheadline">
<h3><span><?php echo isset($al_options['al_tabtitle']) ? $al_options['al_tabtitle'] : '' ?></span></h3>
</div>


<div class="accordion1" id="accordion2">

<?php 
	$i=0;
	$args = array( 'post_type' => 'spahometab','orderby'=>'title','order'=>'ASC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$i++;
?>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i;?>">
<?php  the_title(); ?>
</a>
</div>
<div id="collapse<?php echo $i;?>" class="accordion-body collapse<?php if($i==1) echo" in"?>">
<div class="accordion-inner1">
<?php the_content(); ?>
</div>
</div>

</div>
<?php endwhile; ?>
</div>

</div><!--/span6 end-->  
</div>
</div> 


<?php extrajs(); get_footer(); ?>