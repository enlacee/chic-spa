<?php
/*********************************************************************************************

Tags Widget

*********************************************************************************************/
class Lotus_TagsWidget extends WP_Widget {
    function __construct() {
        parent::__construct(false, $name = 'Lotus-Tags', array( 'description' => 'Lotus Tags Widget for this site.' ) );
    }
	       function form( $instance ) {
	$widget_title="";
	$tags="";
		if(isset( $instance['widget_title'] ))
		{
		$widget_title = esc_attr($instance['widget_title']);
		}
		if(isset( $instance['tags'] ))
		{
		$tags = esc_attr($instance['tags']);
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
            <label for="<?php echo $this->get_field_id( 'tags' ); ?>"><?php _e('Number of Tags:', 'lotus') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'tags' ); ?>" name="<?php echo $this->get_field_name( 'tags' ); ?>" type="text" value="<?php echo $tags; ?>" />
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

<p class="blogtags">
	<?php
		$tags=null;
		$tags_count="";
		$tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => $tags_count));
		if(isset($tags)!=null)
		{
		foreach ( (array) $tags as $tag ) {
		echo '<span><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a></apan>';
		}
		}
	?>			
</p>

        <!-- start twitter widget -->

        <!-- end twitter widget -->
        <?php
        echo $args['after_widget'];
    }
};


?>