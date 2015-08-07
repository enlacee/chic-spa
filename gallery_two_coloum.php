<?php get_header();
/**
 * Template Name: Gallery_two_coloum 
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
<div class="columnheadlineabout2">
<h4><span>Gallery</span></h4>
<p>- Lorem ipsum dolor sit -</p>
</div>
</div>
<div class="span12">

		<?php
		if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
		$portfolio_category = get_terms('portfolio_category');
		if($portfolio_category):
		?>

<ul class="splitter">
<li>
<ul class="splitterbg">
<li class="segment-2">
<a href="#" data-value="everybody"><?php _e('All', 'Lotus'); ?></a></li>
<?php foreach($portfolio_category as $portfolio_cat): ?>
<li class="segment-1">
<a href="#" data-value="<?php echo $portfolio_cat->slug; ?>"> <?php echo $portfolio_cat->name; ?> </a></li>
<?php endforeach; ?>

</ul>
		<?php endif; ?>
		<?php endif; ?>
</li></ul>
<ul id="list" class="image-grid row">
    <?php
	$image="";
    query_posts(array(
        'post_type' => 'portfolio',
        'showposts' => -1
    ));

    if (have_posts()) : while (have_posts()) : the_post();
            $portfolio_types = wp_get_post_terms($post->ID, 'portfolio_category');
            if (has_post_thumbnail()) 
			
    ?>


<li data-id="id-<?php echo $post->ID; ?>" class="everybody feature1 span6  <?php foreach ($portfolio_types as $item) echo $item->slug . ' '; ?>"><!-- one picture-->

<div class="view view-tenth">
<?php the_post_thumbnail('post-image');
$image=wp_get_attachment_url(get_post_thumbnail_id($post->ID,'thumbnail'))
 ?>

<div class="mask">
<a href="<?php echo $image; ?>" class="prettyPhoto[pp_gal]" title="picture"></a>
<h2><?php the_title();?></h2>
<p>- <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,47);?>- </p>

<section class="button1">
<a href="<?php the_permalink(); ?>">read more</a>
</section>
</div>

</div>
</li><!-- one picture end-->

     <?php
            
    endwhile;
    endif;
    wp_reset_query();
    ?>
</ul>
<div class="span8">
<div class="pagination">
	<?php if (function_exists("pagination")) {
		pagination($wp_query->max_num_pages);
	} ?>

</div>
</div>
</div><!--/span12 end--> 
</div><!--/row end--> 
</div><!--/container end--> 

<?php get_footer(); ?>