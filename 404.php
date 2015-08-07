<?php  get_header(); ?>

</div>

<div class="underslider2">



<div class="container">

<div class="row">

<div class="span6">

<h2>Page 404</span></h2>

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
<article id="post-0" class="post error404 not-found">

				<header class="entry-header">

					<h1 class="entry-title"><?php _e( 'Error: 404', 'lotus' ); ?></h1>

				</header>
			<div class="entry-content">

					<p><?php _e( "404 error, couldn't find the content you were looking for.", 'lotus' ); ?></p>

</div></div>
</div><!--span8 left end--> 

<aside class="span4"><!--right--> 



<?php dynamic_sidebar( 'Blog Sidebar' ); ?>



</aside><!--/span4 rightend--> 



</div><!--/row end--> 



</div><!--/container end--> 



 <?php  get_footer();  ?> 