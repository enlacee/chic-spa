<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <?php global $al_options; ?>
        <?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings'); ?>
        <?php if (!empty($al_options['al_title'])): ?>	
            <title><?php echo ($al_options['al_title']); ?></title>
        <?php endif ?>

        <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php $al_options = get_option('al_general_settings'); ?>

        <?php if (!empty($al_options['al_favicon'])): ?>
            <link rel="shortcut icon" href="<?php echo $al_options['al_favicon'] ?>" /> 
        <?php endif ?>
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

        <?php
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }            
        wp_head();
        $class = "";
        ?>
    </head>

    <body <?php body_class($class) ?>>

        <div class="sliderbg">
            
            <div class="menu-header-custom">
                <?php $al_options = isset($_POST['options']) ? $_POST['options'] : get_option('al_general_settings'); ?>
                <div class="phone">
                    <p>Contact Phone: <?php echo isset($al_options['al_phonenumber']) ? $al_options['al_phonenumber'] : '000000000000' ?></p>
                </div>
                
                <header class="menuwrapperdesktop">
                    <div class="container">
                        <div class="row">
                            <section class="logo span3">
                                <a href="<?php echo home_url() ?>">
                                    <?php if (!empty($al_options['al_logo'])): ?>
                                        <img src="<?php echo $al_options['al_logo'] ?>" alt="<?php echo $al_options['al_logotext'] ?>">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                                    <?php endif ?>
                                </a>
                            </section>

                            <nav class="menudesktop span9">
                                <?php wp_nav_menu(array('menu_id' => 'menu', 'class' => 'menu1 ', 'theme_location' => 'primary')); ?>
                            </nav>
                        </div>
                    </div>
                </header>
                
                <!-- ERROR HTML 
                <header class="menuwrappermobile">
                    <div class="container">
                        <div class="row">
                            <section class="span12 logo">
                                <a href="<?php echo home_url() ?>">
                                    <?php if (!empty($al_options['al_logo'])): ?>
                                        <img src="<?php echo $al_options['al_logo'] ?>" alt="<?php echo $al_options['al_logotext'] ?>"></a>
                                <?php else: ?>
                                    <?php echo isset($al_options['al_logotext']) ? $al_options['al_logotext'] : 'Lotus' ?>
                                <?php endif ?>
                            </section>
                        </div>
                    </div> 
                </header>-->
                
            </div>

            
            
            <!--
            


  


            -->
       
            
