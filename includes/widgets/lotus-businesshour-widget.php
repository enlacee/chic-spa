<?php
// =============================== Lotus Twitter Wiget ======================================
class Lotus_businesshourwidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus Business Hour Widget', array( 'description' => 'Lotus Business Hour Widget for this site.' ) );
    }

    function form( $instance ) {
	$widget_title="";
	$day1="";
	$day2="";
	$day1_time="";
	$day1_time2="";
	$day2_time="";
	$day2_time2="";

		if(isset( $instance['widget_title'] ))
		{
		$widget_title = esc_attr($instance['widget_title']);
		}
		if(isset( $instance['day1'] ))
		{
        $day1 = esc_attr( $instance['day1'] );
		}
		if(isset( $instance['day2'] ))
		{
        $day2 = esc_attr( $instance['day2'] );
		}
		if(isset( $instance['day1_time'] ))
		{
        $day1_time = esc_attr( $instance['day1_time'] );
		}
		if(isset( $instance['day1_time2'] ))
		{
        $day1_time2 = esc_attr( $instance['day1_time2'] );
		}
		if(isset( $instance['day2_time'] ))
		{
        $day2_time = esc_attr( $instance['day2_time'] );
		}
		if(isset( $instance['day2_time2'] ))
		{
        $day2_time2 = esc_attr( $instance['day2_time2'] );
		}
        ?>
		
		<p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>"><?php _e('Widget Title:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'widget_title' ); ?>" name="<?php echo $this->get_field_name( 'widget_title' ); ?>" type="text" value="<?php echo $widget_title; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'day1' ); ?>"><?php _e('Day Title-1:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'day1' ); ?>" name="<?php echo $this->get_field_name( 'day1' ); ?>" type="text" value="<?php echo $day1; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'day1_time' ); ?>"><?php _e('Time for Day Title-1:	', 'lotus') ?></label>
            <input class="widefats" id="<?php echo $this->get_field_id( 'day1_time' ); ?>" name="<?php echo $this->get_field_name( 'day1_time' ); ?>" type="text" value="<?php echo $day1_time; ?>" />
			<input class="widefats" id="<?php echo $this->get_field_id( 'day1_time2' ); ?>" name="<?php echo $this->get_field_name( 'day1_time2' ); ?>" type="text" value="<?php echo $day1_time2; ?>"style=" margin-left:49px;"/>
        </p>		
		<p>
            <label for="<?php echo $this->get_field_id( 'day2' ); ?>"><?php _e('Day Title-2:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'day2' ); ?>" name="<?php echo $this->get_field_name( 'day2' ); ?>" type="text" value="<?php echo $day2; ?>" />
        </p>

		<p>
            <label for="<?php echo $this->get_field_id( 'day2_time' ); ?>"><?php _e('Time for Day Title-1:', 'lotus') ?></label>
            <input class="widefats" id="<?php echo $this->get_field_id( 'day2_time' ); ?>" name="<?php echo $this->get_field_name( 'day2_time' ); ?>" type="text" value="<?php echo $day2_time; ?>" />
			<input class="widefats" id="<?php echo $this->get_field_id( 'day2_time2' ); ?>" name="<?php echo $this->get_field_name( 'day2_time2' ); ?>" type="text" value="<?php echo $day2_time2; ?>" style=" margin-left:50px;"/>
        </p>
		
		<?php
    }

function widget( $args, $instance ) {
echo $args['before_widget'];
?>

	  
<div class="headlinesidebar">
<h4><span><?php echo $instance['widget_title']; ?></span></h4>
</div>
<ul class="sidebarabout2">
<li><?php echo $instance['day1']; ?> : <span><?php echo $instance['day1_time']; ?>- <?php echo $instance['day1_time2']; ?></span></li>
<li><?php echo $instance['day2']; ?> : <span> <?php echo $instance['day2_time']; ?>- <?php echo $instance['day2_time2']; ?></span></li>
</ul>

<?php


        echo $args['after_widget'];
    }
};

?>