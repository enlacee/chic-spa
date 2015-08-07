<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body onLoad="initialize()">
</div>
<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
 
<h2>spa home <span>lorem ipsum dolor</span></h2>

</div>


<div class="span6">
 
<ul class="ch-grid1">
<li>
<div class="ch-item ch-img-1">

</div>
</li>

<li>
<div class="ch-item ch-img-2">

</div>
</li>

<li>
<div class="ch-item ch-img-3">

</div>
</li>
</ul>
</div>
</div></div>

</div>

<div class="container">
<div class="row">
<div class="span8"><!--left--> 

        <section class="content">
        	<h2><?php the_title(); ?></h2>
            <a href="#"><?php the_post_thumbnail('image-large'); ?></a>
            <?php the_content(); ?>
        </section><!--end:content-->
</div>		
<aside class="span4"><!--right--> 		
<ul class="sidebarabout1">		
<?php dynamic_sidebar( 'About Sidebar' ); ?>
</ul>
</aside>
</div><!--/row end--> 
</div><!--/container end--> 
	<?php endwhile; endif; ?>

<?php get_footer() ?>