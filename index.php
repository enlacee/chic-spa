<?php /*
Template Name:Default
*/
 get_header(); 

?>
</div>
<div class="underslider2">

<div class="container">
<div class="row">
<div class="span6">
<h2>page  <span>lorem ipsum dolor</span></h2>

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
<!--<div class="container">
<div class="row">
<div class=="span12">
		<h2>Hello and welcome!</h2>
		<?php _e('Congrats on successful installation of the theme. After uploading the "xml" file please make sure to set a static page through Settings => Reading section in the admin panel. Importing the sample content is highly recommended.
		Please check the screencast in the "Setup guide" section of the documentation which came with the package downloaded.', 'Lotus'); ?>
</div>
</div>
</div>-->

<div class="container">
<div class="row">


<div class="span8"><!--left--> 

<div class="columnheadlineabout2" <?php post_class(); ?>>

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
    $first_img = get_template_directory_uri()."/images/blog.jpg";
  }
  return $first_img;
}

 query_posts('post_type=post&post_status=publish&posts_per_page=2&paged='. get_query_var('paged')); 
 if (have_posts()) : 
 while (have_posts()) : the_post(); 
?>
		

<article class="blogpost" >
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<div class="blogimage" >
<img src="<?php echo catch_that_image(); ?>" />
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

</aside><!--/span4 rightend--> 

</div><!--/row end--> 

</div><!--/container end--> 

 <?php  get_footer();  ?> 