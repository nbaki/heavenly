<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.less" />
    <link href="<?php echo get_childTheme_url(); ?>/styles/MetroJs.css" rel="stylesheet" />
    <link href="<?php echo get_childTheme_url(); ?>/styles/MetroJs.min.css" rel="stylesheet" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script>
    <script type="text/javascript">
        less.modifyVars({
            '@color': '<?php echo heavenly_get_theme_opts('color_scheme','#3399ff'); ?>'
        });
    </script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/jquery-1.3.2.min.js"></script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/MetroJs.js"></script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/MetroJs.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

 <header id="banner-header">
    <img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/banner_FINAL.png" alt="Kind Technology Services Banner" width="100%" />
 </header>

<div class="nav-bar">
    <?php


    $args = array(
        'theme_location' => 'primary',
        'depth' => 3,
        'container' => false,
        'menu_class' => 'nav',
        'fallback_cb' => false,
        'walker' => new heavenly_bootstrap_walker_nav_menu()
    );


    wp_nav_menu($args);


    ?>
    <div id="search-bar-area">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Navigation Widget Area') ) : ?>
        <?php endif; ?>
    </div>
</div>
<?php
if(is_front_page()) get_template_part('homepage','top');
?>
