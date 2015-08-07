<?php get_header();
/**
 * Template Name: Contact Us 
 */
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
<div class=" borderbottom span12">

<div class="row">
<div class="span8"><!--left--> 


<div class="">


<div class="columnheadlineabout">
<h4><span>Contact us</span></h4>
</div>

<?php
$post_id = 236;
$queried_post = get_post($post_id);
echo $queried_post->post_content;
?>

<!--/comment-form-->
<div> 
<h4 class="sendmessage">Send message</h4>
<?php dynamic_sidebar( 'Contactform Sidebar' ); ?>
</div>
<!--/comment-form-end--> 



</div><!--leftabout end--> 


</div><!--span8 left end--> 


<aside class="span4"><!--right--> 


<?php dynamic_sidebar( 'Contact sidebar' ); ?>



</aside><!--/span4 rightend--> 




</div><!--/row end--> 
</div><!--/borderbottom end--> 
</div><!--/row end--> 


<div class="row">
<div class="span12">
<?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');?>
<?php echo isset($al_options['al_contact_address']) ? $al_options['al_contact_address'] : 'Lotus' ?>

</div><!--/span12 end--> 
</div><!--/row end--> 



 </div><!--/container end--> 


<?php get_footer() ?>