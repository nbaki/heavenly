<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.less" >
    <script src="<?php echo get_template_directory_uri(); ?>/js/less.js" type="text/javascript"></script>
    <script type="text/javascript">
        less.modifyVars({
            '@color': '<?php echo heavenly_get_theme_opts('color_scheme','#3399ff'); ?>'
        });
    </script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/jquery-1.3.2.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_childTheme_url(); ?>/scripts/heavenly.js" type="text/javascript" ></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
    $(document).ready(function() {
        setHeaderDefaults();
        setMobileNavigation();
    });
</script>
 <header id="banner-header">
    <img class="banner" src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/banner_FINAL.png" alt="Kind Technology Services" />
 </header>
<header id="banner-header-mobile">
    <img class="banner" src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/mobile_banner.png" alt="Kind Technology Services" />
</header>

<div class="nav-bar">
<div class="btn-navbar">
    <a id="mobile-nav-button-minus" href="#" style="display: none;"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/Minusgreen_button.gif" alt="Mobile Navigation" /></a>
    <a id="mobile-nav-button-plus" href="#" ><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/Plusgreen_button.gif" alt="Mobile Navigation" /></a>
</div>
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
</div>
<?php
if(is_front_page()) get_template_part('homepage','top');
?>
