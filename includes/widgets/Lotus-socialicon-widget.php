<?php
class Lotus_socialwidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus-SocialWidget', array( 'description' => 'Lotus Social Widget for this site.' ) );
    }

    function form( $instance ) {
	$fb_url="";
	$twit_url="";
	$sky_url="";
	$vemio_url="";
	$yt_url="";
	$rss_url="";
		if(isset( $instance['fb_url'] ))
		{
        $fb_url = esc_attr($instance['fb_url'] );
		}
		if(isset( $instance['twit_url'] ))
		{
        $twit_url = esc_attr( $instance['twit_url'] );
		}
		if(isset( $instance['sky_url'] ))
		{
        $sky_url = esc_attr( $instance['sky_url'] );
		}		
		if(isset( $instance['vemio_url'] ))
		{
        $vemio_url = esc_attr( $instance['vemio_url'] );
		}
		if(isset( $instance['yt_url'] ))
		{
        $yt_url = esc_attr( $instance['yt_url'] );
		}
		if(isset( $instance['rss_url'] ))
		{
        $rss_url = esc_attr( $instance['rss_url'] );
		}
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'fb_url' ); ?>"><?php _e('Facebook URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'fb_url' ); ?>" name="<?php echo $this->get_field_name( 'fb_url' ); ?>" type="text" value="<?php echo $fb_url; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'twit_url' ); ?>"><?php _e('Twitter URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'twit_url' ); ?>" name="<?php echo $this->get_field_name( 'twit_url' ); ?>" type="text" value="<?php echo $twit_url; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'sky_url' ); ?>"><?php _e('Skype URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'sky_url' ); ?>" name="<?php echo $this->get_field_name( 'sky_url' ); ?>" type="text" value="<?php echo $sky_url; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'vemio_url' ); ?>"><?php _e('Vemio URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'vemio_url' ); ?>" name="<?php echo $this->get_field_name( 'vemio_url' ); ?>" type="text" value="<?php echo $vemio_url; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'yt_url' ); ?>"><?php _e('Youtube URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'yt_url' ); ?>" name="<?php echo $this->get_field_name( 'yt_url' ); ?>" type="text" value="<?php echo $yt_url; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'rss_url' ); ?>"><?php _e('RSS Feed URL:', 'Lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'rss_url' ); ?>" name="<?php echo $this->get_field_name( 'rss_url' ); ?>" type="text" value="<?php echo $rss_url; ?>" />
        </p>
		
		<?php
    }

function widget( $args, $instance ) {
echo $args['before_widget'];
?>
    <section class="icons span4">
		<a href="<?php echo $instance['twit_url']; ?>"><div class="item"><div><i class="icontwitter"></i></div></div></a>
		<a href="<?php echo $instance['fb_url']; ?>"><div class="item"><div><i class="iconfacebook"></i></div></div></a>
		<a href="<?php echo $instance['sky_url']; ?>"><div class="item"><div><i class="iconskype"></i></div></div></a> 
		<a href="<?php echo $instance['vemio_url']; ?>"><div class="item"><div><i class="icongoogle"></i></div></div></a> 
		<a href="<?php echo $instance['yt_url']; ?>"><div class="item"><div><i class="iconyoutube"></i></div></div></a> 
		<a href="<?php echo $instance['rss_url']; ?>"><div class="item"><div><i class="iconrss"></i></div></div></a> 

	</section>	

<?php
        echo $args['after_widget'];
    }
};

?>