<?php
/*********************************************************************************************

Testimonial Widget

*********************************************************************************************/
class Lotus_TestimonialWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus-Testimonial', array( 'description' => 'Lotus Testimonial Widget for this site.' ) );
    }
	       function form( $instance ) {
	$widget_title="";
	$ca_tes1="";
	$ca_tes2="";
	$ca_author1="";
	$ca_author2="";
		if(isset( $instance['widget_title'] ))
		{
		$widget_title = esc_attr($instance['widget_title']);
		}
		if(isset( $instance['ca_tes1'] ))
		{
		$ca_tes1 = esc_attr($instance['ca_tes1']);
		}
		if(isset( $instance['ca_tes2'] ))
		{
		$ca_tes2 = esc_attr($instance['ca_tes2']);
		}
		if(isset( $instance['ca_author1'] ))
		{
		$ca_author1 = esc_attr($instance['ca_author1']);
		}
		if(isset( $instance['ca_author2'] ))
		{
		$ca_author2 = esc_attr($instance['ca_author2']);
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
            <label for="<?php echo $this->get_field_id( 'ca_tes1' ); ?>"><?php _e('Testimonial-1:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_tes1' ); ?>" name="<?php echo $this->get_field_name( 'ca_tes1' ); ?>" type="text" value="<?php echo $ca_tes1; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_tes2' ); ?>"><?php _e('Testimonial-2:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_tes2' ); ?>" name="<?php echo $this->get_field_name( 'ca_tes2' ); ?>" type="text" value="<?php echo $ca_tes2; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_author1' ); ?>"><?php _e('Author-1:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_author1' ); ?>" name="<?php echo $this->get_field_name( 'ca_author1' ); ?>" type="text" value="<?php echo $ca_author1; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_author2' ); ?>"><?php _e('Author-2:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_author2' ); ?>" name="<?php echo $this->get_field_name( 'ca_author2' ); ?>" type="text" value="<?php echo $ca_author2; ?>" />
        </p>		

<?php
    }
/*
 * Renders the widget in the sidebar
 */
function widget( $args, $instance ) {
echo $args['before_widget'];
?>

<div class="footerheadline">
<h4><?php echo $instance['widget_title']; ?></h4>
</div>

<div class="testimonial">
<p class="testimonialbg">
"<?php echo $instance['ca_tes1']; ?>"
</p>
<p  class="testimonialname"><?php echo $instance['ca_author1']; ?></p>
</div>


<p class="testimonialbg">
"<?php echo $instance['ca_tes2']; ?> "
</p>
<p  class="testimonialname"><?php echo $instance['ca_author2']; ?></p>


        <!-- start twitter widget -->

        <!-- end twitter widget -->
        <?php
        echo $args['after_widget'];
    }
};


?>
