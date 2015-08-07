<?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings');?>
<footer class="footer">

<div class="container">
<div class="row">


<div class="span4">
      <?php dynamic_sidebar( 'Footer Block 1' ); ?>
</div>



<div class="span4">

<?php dynamic_sidebar( 'Footer Block 2' ); ?>


</div>

<div class="span4">


<?php dynamic_sidebar( 'Footer Block 3' ); ?>
<?php dynamic_sidebar( 'Footer Block 4' ); ?>

</div>

</div> </div> 
</footer> 


<div class="bottom"> 

 <div class="container"> 
 <div class="row"> 
<section class="icons span4">  
<?php dynamic_sidebar( 'Footer Social Sidebar' ); ?>  
 
</section> 


<section class="span4 copyright">  
<p>&copy; <?php echo do_shortcode($al_options['al_copyright']);?></p>
</section> 


<section class="span4">  
<a href="javascript:scrollToTop()" title="top of page"><div class="topofpage"></div></a>
</section> 

 </div> </div>


</div> 

	

<?php wp_footer(); ?>
</body>
</html>
