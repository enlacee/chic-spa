<?php
get_header();
/**
 * Template Name: Home Paralax 
 */
?>
<?php global $al_options; ?>

<?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings'); ?>
<div class="sequence-theme">

    <div id="sequence">
        <ul class="sequence-canvas" >
            <?php
            $args = array('post_type' => 'slide');
            $posts = get_posts($args);
            foreach ($posts as $post) {
                $large = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                $thumb_url = $thumb[0];
            ?>

                <li class="animate-in">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'heading_2', true); ?></h3>
                    <p class="subtitle1"><?php echo $post->post_content; ?> </p>
                    
                    <?php 
                    $metapost_link = get_post_meta($post->ID, 'link_url', true);
                    if($metapost_link != false) : ?>
                    <section class="button1 buttonslider">
                        <a href="<?php echo $metapost_link ?>">read more</a>
                    </section>
                    <?php endif; ?> 
                    <img class="model" src="<?php echo $large; ?>" alt="medel1,model2,model3" />
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="sequence-pagination">
            <div class="paginationslider"></div>
            <div class="paginationslider"></div>
            <div class="paginationslider"></div>
        </div>
    </div>			
</div>

</div><!-- End sliderbg -->


<div class="underslider">
    <p>
        <?php echo isset($al_options['al_underslidetext']) ? $al_options['al_underslidetext'] : 'Lotus' ?>
    </p>
</div>



<div class="container">
    <div class="row">

        <div class="span4 spacolumn">
            <?php
            $args = array('post_type' => 'spahome', 'posts_per_page' => 3);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $large = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>


                <div class="spaheadline">

                    <h3><?php the_title(); ?></h3>

                </div>

                <h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
                <img class="circleimage1" src="<?php echo $large; ?>" alt=""/> 
                <div class="circleimage11" >
                    <div class="circlebg">
                    </div>
                </div>

                <div class="decoration">
                </div>

                <p>
                    <?php the_content(); ?>
                </p>
<?php 
$link = get_post_meta($post->ID, 'link_url', true);
$link = ($link == false) ? '#' : $link;
?>
                <section class="button1">
                    <a href="<?php echo $link ?>">read more</a>
                </section>
            <?php endwhile; ?>

        </div><!--/span4 end--> 
        
        <div class="span4 spacolumn">
            <?php
            $args = array('post_type' => 'specialslide', 'posts_per_page' => 3);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $large = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>

                <div class="spaheadline">
                    <h3><?php the_title(); ?></h3>
                </div>

                <h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
                <img class="circleimage1" src="<?php echo $large; ?>" alt=""/> 
                <div class="circleimage11" >
                    <div class="circlebg">
                    </div>
                </div>

                <div class="decoration">
                </div>

                <p><?php the_content(); ?></p>
<?php 
$link = get_post_meta($post->ID, 'link_url', true);
$link = ($link == false) ? '#' : $link;
?>
                <section class="button1">
                    <a href="<?php echo $link ?>">read more</a>
                </section>
            <?php endwhile; ?>

        </div><!--/span4 end--> 
        
        
        
        <div class="span4 spacolumn">
            <?php
            $args = array('post_type' => 'spawellness', 'posts_per_page' => 3);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $large = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>


                <div class="spaheadline">

                    <h3><?php the_title(); ?></h3>

                </div>

                <h6>- <?php echo get_post_meta($post->ID, 'heading_2', true); ?> -</h6>
                <img class="circleimage1" src="<?php echo $large; ?>" alt=""/> 
                <div class="circleimage21">

                </div>

                <div class="decoration">
                </div>

                <p>
    <?php the_content(); ?>
                </p>
<?php 
$link = get_post_meta($post->ID, 'link_url', true);
$link = ($link == false) ? '#' : $link;
?>
                <section class="button1">
                    <a href="<?php echo $link; ?>">read more</a>
                </section>
<?php endwhile; ?>

        </div><!--/span4 end--> 


    </div><!--/row end--> 



    <div class="row">

        <div class="span6">


            <div class="columnheadline">
                <h3><span>lorem ipsum</span></h3>
            </div>


            <div class="accordion1" id="accordion2">

                <?php
                $i = 0;
                $args = array('post_type' => 'spahometab', 'orderby' => 'title', 'order' => 'ASC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    $i++;
                    ?>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i; ?>">
    <?php the_title(); ?>
                            </a>
                        </div>
                        <div id="collapse<?php echo $i; ?>" class="accordion-body collapse<?php if ($i == 1) echo" in" ?>">
                            <div class="accordion-inner1">
    <?php the_content(); ?>
                            </div>
                        </div>

                    </div>
<?php endwhile; ?>
            </div>

        </div><!--/span6 end--> 

        <div class="span6">

            <div class="columnheadline">   
                <h3><span><?php echo get_post_meta($post->ID, 'post_title', true); ?></span></h3>
            </div>

            <?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged=' . get_query_var('paged')); ?>
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) : the_post();
                    $small = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>

                    <div class="row">
                        <div class=" span6 recentnewsrow">

                            <a href="" class="ch-gridwrapper">
                                <ul class="ch-grid">
                                    <li>

                                        <div class="ch-item">
                                            <img class="ch-item ch-img-1" src="<?php echo $small; ?>" alt=""/> 
                                            <div class="ch-info">
                                                <?php
                                                $dat = array();
                                                $dy = "";
                                                $dt = get_the_date();
                                                //echo $dt;

                                                $dat = preg_split('[ /.-]', $dt);
                                                $dm = $dat[0];
                                                list($month, $dy, $year) = explode(' ', $dm);
                                                list($day) = explode(',', $dy);
                                                ?>
                                                <p><?php echo $day; ?> <br><?php echo $month; ?> <br><?php echo $year; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </a>		

                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p>
                                <?php
                                $excerpt = get_the_excerpt();
                                echo string_limit_words($excerpt, 20);
                                ?>
                            </p>
                        </div>
                    </div><!--/span6 end--> 

    <?php endwhile; ?>

<?php endif; ?>

        </div>

    </div>
    
</div> 

<?php paralaxjs();
get_footer(); ?>

