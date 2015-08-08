<?php get_header();
/**
 * Template Name: Services 
 */
?>

</div>




<div class="underslider2a">

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
<div class="span12">
<!--
<div class="columnheadlineabout2">
<h4><span>Services</span></h4>
<p>- Lorem ipsum dolor sit -</p>
</div>-->
<br>
</div>
</div>
</div>



<div class="container">

<div class="row"><!-- tabs-->

<div class="containertabs1"><!--/tab container-->
<div id="myTabs">
		<?php
		if(!get_post_meta(get_the_ID(), 'servicespecial_category', true)):		
		$portfolio_category = get_terms('servicespecial_category');
		if($portfolio_category):
		?>

<ul class="tabs1 span12">
<?php foreach($portfolio_category as $portfolio_cat): ?>
<li class="active"><a href="#<?php echo $portfolio_cat->slug; ?>"><?php echo $portfolio_cat->name; ?></a></li>
<?php endforeach; ?>
</ul>
 <?php endif; ?>
 <?php endif; ?>
<div class="tab-content span12">
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
}?>
    <?php
	foreach($portfolio_category as $tab_cat):
    query_posts(array(
        'post_type' => 'servicespecial',
        'showposts' => -1
    ));
?>
<div  id="<?php echo $tab_cat->slug; ?>">

<?php
    if (have_posts()) : while (have_posts()) : the_post();
            $servicespecial_types = wp_get_post_terms($post->ID, 'servicespecial_category');
            if (has_post_thumbnail()) 
			
			$categories="";$cat_slug="";
			$categories=get_the_terms($post->ID,'servicespecial_category');
			if($categories)
			foreach($categories as $category)
			{
			  $cat_slug=$category->slug;
			  break;
			}
			if($tab_cat->slug==$cat_slug)
			{
			
    ?>

<div class="row"><!--/one row-->

<div class="span12  tabinside">

<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>

<div class="row">

<div class="span3">

<ul class="ch-grid4">
<li>

<div class="ch-item4 specialimg11">
<img class="ch-item4" src="<?php echo catch_that_image(	); ?>" />
</div>
</li>
</ul>

</div>

<div class="span7">
<h6>- <?php the_title();?> -</h6>

<p>
<?php the_content(); ?>
</p>

<div class="buypresent2text1">
</div> <!--/buypresenttext end--> 
</div><!--/span7 end-->
<div class="span2">


<div class="row">
<div class="span2  services">
<div class="serviceprice">
<a href="#"><?php echo get_post_meta($post->ID, 'price', true); ?></a>
</div>
<div class=" servicehour">
<p><?php echo get_post_meta($post->ID, 'hour', true); ?></p>
</div>
</div>
</div>

<div class="row">
<div class="span2  services">
<div class="serviceprice">
<a href="#"><?php echo get_post_meta($post->ID, 'price2', true); ?></a>
</div>
<div class=" servicehour">
<p><?php echo get_post_meta($post->ID, 'hour2', true); ?></p>
</div>
</div>
</div>


<div class="row">
<div class="span2  services">
<div class="serviceprice">
<a href="#"><?php echo get_post_meta($post->ID, 'price3', true); ?></a>
</div>
<div class=" servicehour">
<p><?php echo get_post_meta($post->ID, 'hour3', true); ?></p>
</div>
</div>
</div>


</div><!--/span2 end-->





</div><!--/row end-->

</div><!--/span12 end--> 

</div><!--/row end --> 

     <?php
     }     
    endwhile;
    endif; ?>
</div><!-- one tab end-->
<?php	
	endforeach;
    wp_reset_query();
    ?>
</div><!-- tab content end-->

</div>
</div>
</div>
</div><!-- container end-->




<?php get_footer() ?>