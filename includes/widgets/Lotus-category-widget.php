<?php
/*********************************************************************************************

Testimonial Widget

*********************************************************************************************/
class Lotus_CategoryWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus-Category Widget', array( 'description' => 'Lotus Category Widget for this site.' ) );
    }
	       function form( $instance ) {
	$widget_title="";
	$ca_cat="";
		if(isset( $instance['widget_title'] ))
		{
		$widget_title = esc_attr($instance['widget_title']);
		}
		if(isset( $instance['ca_cat'] ))
		{
		$ca_cat = esc_attr($instance['ca_cat']);
		}



    /*
     * Displays the widget form in the admin panel
     */

 ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e('Widget Title:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_cat' ); ?>"><?php _e('Number of Category:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_cat' ); ?>" name="<?php echo $this->get_field_name( 'ca_cat' ); ?>" type="text" value="<?php echo $ca_cat; ?>" />
        </p>

<?php
    }
/*
 * Renders the widget in the sidebar
 */
function widget( $args, $instance ) {
echo $args['before_widget'];
?>
<div class="headlinesidebar">
<h4><span><?php echo $instance['widget_title']; ?></span></h4>
</div>


<ul class="sidebarabout1">
<?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><li>';
}
?>
</ul>


        <!-- start twitter widget -->

        <!-- end twitter widget -->
        <?php
        //echo $args['after_widget'];
    }
};


?>
