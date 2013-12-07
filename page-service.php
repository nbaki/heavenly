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
            <div class="entry-content">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <table class="service-table">
                    <tr class="even-row">
                        <td class="left-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                        <td class="right-content">
                            <h4><?php echo get_the_title(103); ?></h4>
                            <p>
                                <?php echo getPageContent(103); ?>
                            </p>
                        </td>
                    </tr>
                    <tr class="odd-row">
                        <td class="left-content">
                            <h4><?php echo get_the_title(105); ?></h4>
                            <p>
                                <?php echo getPageContent(105); ?>
                            </p>
                        </td>
                        <td class="right-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                    </tr>
                    <tr class="even-row">
                        <td class="left-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                        <td class="right-content">
                            <h4><?php echo get_the_title(108); ?></h4>
                            <p>
                                <?php echo getPageContent(108); ?>
                            </p>
                        </td>
                    </tr>
                    <tr class="odd-row">
                        <td class="left-content">
                            <h4><?php echo get_the_title(111); ?></h4>
                            <p>
                                <?php echo getPageContent(111); ?>
                            </p>
                        </td>
                        <td class="right-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                    </tr>
<!--                    <tr class="even-row">
                        <td class="left-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                        <td class="right-content">
                            <h4><?php /*echo get_the_title(114); */?></h4>
                            <p>
                                <?php /*echo getPageContent(114); */?>
                            </p>
                        </td>
                    </tr>
                    <tr class="odd-row">
                        <td class="left-content">
                            <h4><?php /*echo get_the_title(174); */?></h4>
                            <p>
                                <?php /*echo getPageContent(174); */?>
                            </p>
                        </td>
                        <td class="right-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                    </tr>
                    <tr class="even-row">
                        <td class="left-image"><img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" /></td>
                        <td class="right-content">
                            <h4><?php /*echo get_the_title(152); */?></h4>
                            <p>
                                <?php /*echo getPageContent(152); */?>
                            </p>
                        </td>
                    </tr>-->
                </table>

            </div>
        </div>
        <div id="service-content-mobile">
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