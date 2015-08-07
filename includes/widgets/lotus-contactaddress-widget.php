<?php
class Lotus_ContactAddressWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus Contact Address Widget', array( 'description' => 'Lotus Contact Address Widget for this site.' ) );
    }

   
    function form( $instance ) {
	$widget_title="";
	$ca_phone="";
	$ca_email="";
	$ca_add1="";
	$widget_title_res="";
	$ca_phone_res="";
		if(isset( $instance['widget_title'] ))
		{
        $widget_title = esc_attr( $instance['widget_title'] );
		}	
		if(isset( $instance['ca_phone'] ))
		{
        $ca_phone = esc_attr($instance['ca_phone'] );
		}	
		if(isset( $instance['ca_email'] ))
		{
        $ca_email = esc_attr( $instance['ca_email'] );
		}
		if(isset( $instance['ca_add1'] ))
		{
        $ca_add1 = esc_attr( $instance['ca_add1'] );
		}
		if(isset( $instance['widget_title_res'] ))
		{
        $widget_title_res = esc_attr( $instance['widget_title_res'] );
		}
		if(isset( $instance['ca_phone_res'] ))
		{
        $ca_phone_res = esc_attr($instance['ca_phone_res'] );
		}
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e('Widget Title:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>" />
        </p>     
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_add1' ); ?>"><?php _e('Contact Address Line:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_add1' ); ?>" name="<?php echo $this->get_field_name( 'ca_add1' ); ?>" type="text" value="<?php echo $ca_add1; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_phone' ); ?>"><?php _e('Phone No:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_phone' ); ?>" name="<?php echo $this->get_field_name( 'ca_phone' ); ?>" type="text" value="<?php echo $ca_phone; ?>" />
        </p>	
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_email' ); ?>"><?php _e('Email:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_email' ); ?>" name="<?php echo $this->get_field_name( 'ca_email' ); ?>" type="text" value="<?php echo $ca_email; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'widget_title_res' ); ?>"><?php _e('Widget Title Res:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'widget_title_res' ); ?>" name="<?php echo $this->get_field_name( 'widget_title_res' ); ?>" type="text" value="<?php echo $widget_title_res; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'ca_phone_res' ); ?>"><?php _e('Phone No Res:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'ca_phone_res' ); ?>" name="<?php echo $this->get_field_name( 'ca_phone_res' ); ?>" type="text" value="<?php echo $ca_phone_res; ?>" />
        </p>
		
		<?php
    }

function widget( $args, $instance ) {
echo $args['before_widget'];
?>
								
<div class="headlinesidebar">
<h4><span><?php echo $instance['widget_title']; ?></span></h4>
</div>

<div class="sidebarabout3">

<ul>

<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/iconaddress.png" alt="">
<p><?php echo $instance['ca_add1']; ?></p>
</li>

<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/iconphone.png" alt="">
<p><?php echo $instance['ca_phone']; ?></p>
</li>

<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/iconmail.png" alt="">

<a href="mailto:someone@example.com?Subject=Hello%20again">
<p class="highlight"><?php echo $instance['ca_email']; ?></p></a>

</li>

</ul>



<div class="reservation">
<a href=""><?php echo $instance['widget_title_res']; ?> <span><?php echo $instance['ca_phone_res']; ?></span></a>
</div>

</div><!--/sidebarabout3 end-->				

<?php
        echo $args['after_widget'];
    }
};



?>
