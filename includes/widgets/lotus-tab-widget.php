<?php
// =============================== Lotus Tab widget ===============================
class Lotus_TabWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus Tab Widget', array( 'description' => 'Lotus Tab Widget for this site.' ) );
    }
        function form( $instance ) {
	$news="";
	$top_news="";
	$archive="";
		if(isset( $instance['news'] ))
		{
		$news = esc_attr($instance['news']);
		}
		if(isset( $instance['top_news'] ))
		{
		$top_news = esc_attr($instance['top_news']);
		}
		if(isset( $instance['archive'] ))
		{
		$archive = esc_attr($instance['archive']);
		}
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'news' ); ?>"><?php _e('Number of Recent News:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'news' ); ?>" name="<?php echo $this->get_field_name( 'news' ); ?>" type="text" value="<?php echo $news; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'top_news' ); ?>"><?php _e('Number of Top News:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'top_news' ); ?>" name="<?php echo $this->get_field_name( 'top_news' ); ?>" type="text" value="<?php echo $top_news; ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id( 'archive' ); ?>"><?php _e('Archive:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'archive' ); ?>" name="<?php echo $this->get_field_name( 'archive' ); ?>" type="text" value="<?php echo $archive; ?>" />
        </p>
		
		
		<?php
    }
function widget( $args, $instance ) {
echo $args['before_widget'];

?>
<div id="myTab">
<div class="row" >
<div class="span4" >
<ul class="tabs2">
<li class="active"><a href="#home">Recent news</a></li>
<li><a href="#profile">Top news</a></li>
<li><a href="#messages">Archive</a></li>
</ul>
 </div> </div>

<div class="tab-contentss">
<div  id="home">

<ul class="sidebarabout1">
<?php
	$recent_posts = wp_get_recent_posts(array('numberposts'=>$instance['news']));
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

</div>

<div  id="profile">
<ul class="sidebarabout1">
<?php
	$recent_posts = wp_get_recent_posts(array('numberposts'=>$instance['top_news']));
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

</div>


<div  id="messages">
<ul class="sidebarabout1">
<?php wp_get_archives(array('type'=>'monthly','limit'=>array('numberposts'=>$instance['archive']),'format'=>'custom','before'=>'<li>','after'=>'</li>')); ?>
</ul>

</div>
</div><!--/tab end-->
</div>
<?php
        echo $args['after_widget'];
    }
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['news'] = $new_instance['news'];
		$instance['top_news'] = $new_instance['top_news'];
		$instance['archive'] = $new_instance['archive'];
		
		return $instance;
	}
};

?>