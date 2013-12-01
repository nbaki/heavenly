<?php
/*
 * Template Name: Service Template
 */
get_header();
?>
    <script>
        $(document).ready(function(){
            $(".live-tile").liveTile({
                playOnHover: true,
                onHoverDelay: 200,
                delay: 1000000,
                flipListOnHover: true
            });
            $('.func-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#functionality-content').show();
                return false;
            });
            $('.mark-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#marketing-content').show();
                return false;
            });
            $('.host-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#hosting-content').show();
                return false;
            });
            $('.design-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#design-content').show();
                return false;
            });
            $('.arc-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#arc-content').show();
                return false;
            });
            $('.brand-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#branding-content').show();
                return false;
            });
            $('.maint-link').click(function() {
                $('.services').hide();
                $('#service-content').css('border-top', '1px solid black');
                $('#service-content').css('border-bottom', '1px solid black');
                $('#maintenance-content').show();
                return false;
            });
        });
    </script>
<div class="page-container">
    <div class="content-container">
        <div class="row-fluid">
        <div class="span12">
        <div  id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php

            while(have_posts()): the_post(); ?>

                <div <?php post_class('post'); ?>>
                    <div class="clear"></div>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
<!--                    <div class="entry-content">-->
                        <div class="mobile-tiles">
                            <ul>
                                <li><a class="func-link content-link" href="#">Functionality</a></li>
                                <li><a class="brand-link content-link" href="#">Branding</a></li>
                                <li><a class="mark-link content-link" href="#">Marketing</a></li>
                                <li><a class="arc-link content-link" href="#">Website Architecture</a></li>
                                <li><a class="host-link content-link" href="#">Hosting</a></li>
                                <li><a class="maint-link content-link" href="#">Website Maintenance</a></li>
                                <li><a class="design-link content-link" href="#">Website Design</a></li>
                            </ul>
                        </div>
                        <div class="tiles">
                            <table>
                                <tr>
                            <td><div class="live-tile" data-mode="flip">
                                <div><a class="func-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/web_functionality.png" /></a></div>
                                <div><a class="func-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="brand-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/branding.png" /></a></div>
                                <div><a class="brand-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="mark-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/marketing.png" /></a></div>
                                <div><a class="mark-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                </tr>
                                <tr>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="arc-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/web-arc.png" /></a></div>
                                <div><a class="arc-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="design-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/web-design.png" /></a></div>
                                <div><a class="design-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="maint-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/web-maintenance.png" /></a></div>
                                <div><a class="maint-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                    <td><div class="live-tile" data-mode="flip">
                                <div><a class="host-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/hosting.png" /></a></div>
                                <div><a class="host-link" href="#"><img class="full" src="<?php echo get_childTheme_url(); ?>/images/details.png" /></a></div>
                            </div></td>
                                </tr>
                            </table>
                        </div>
<!--                    </div>-->
                    <?php wp_link_pages( ); ?>
                </div>
                <div class="mx_comments">
                    <?php comments_template(); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div id="service-content">
            <div class="services" id="functionality-content" style="display: none;">
                <h4><?php echo get_the_title(103); ?></h4>
                <p>
                    <?php echo getPageContent(103); ?>
                </p>
            </div>
            <div class="services" id="marketing-content" style="display: none;">
                <h4><?php echo get_the_title(105); ?></h4>
                <p>
                    <?php echo getPageContent(105); ?>
                </p>
            </div>
            <div class="services" id="design-content" style="display: none;">
                <h4><?php echo get_the_title(108); ?></h4>
                <p>
                    <?php echo getPageContent(108); ?>
                </p>
            </div>
            <div class="services" id="hosting-content" style="display: none;">
                <h4><?php echo get_the_title(111); ?></h4>
                <p>
                    <?php echo getPageContent(111); ?>
                </p>
            </div>
            <div class="services" id="branding-content" style="display: none;">
                <h4><?php echo get_the_title(114); ?></h4>
                <p>
                    <?php echo getPageContent(114); ?>
                </p>
            </div>
            <div class="services" id="arc-content" style="display: none;">
                <h4><?php echo get_the_title(174); ?></h4>
                <p>
                    <?php echo getPageContent(174); ?>
                </p>
            </div>
            <div class="services" id="maintenance-content" style="display: none;">
                <h4><?php echo get_the_title(152); ?></h4>
                <p>
                    <?php echo getPageContent(152); ?>
                </p>
            </div>
        </div>
    </div>

    </div>
    </div>
</div>


<?php get_footer(); ?>