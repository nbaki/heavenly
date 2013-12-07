<div class="footer">
<div class="container">
<div class="row-fluid">
<div class="header">
    <div class="footer-logo"><a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php heavenly_logo(); ?></a></div>
    <div class="span3">
<?php if(!dynamic_sidebar('footer1')) echo ""; ?>
</div>
<div class="span3 nav-area-footer">
    <div class="footer-nav">
    <h3>Navigate</h3>
    <?php
        $args = array(
            'theme_location'  => '',
            'menu'            => 'Footer Menu All Pages',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );
        wp_nav_menu($args);
    ?>
    </div>
<?php if(!dynamic_sidebar('footer2')) echo ""; ?>
</div>
<div class="span3">
<?php if(!dynamic_sidebar('footer3')) echo ""; ?>
</div>
<div class="span3">
<?php if(!dynamic_sidebar('footer4')) echo ""; ?>
</div>
<div class="clear"></div>
</div>
</div> 
</div>
<div class="buttom">
<div class="container"><div class="content">Copyright &copy; <?php echo heavenly_get_theme_opts('footer_text', get_bloginfo('sitename')); ?></div></div>
</div>
</div>
 
<?php wp_footer(); ?>



</body>
</html>