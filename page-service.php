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
            $('.mark-link').click(function() {
                $('.services').hide();
                $('#service-content-mobile').css('border-top', '1px solid black');
                $('#service-content-mobile').css('border-bottom', '1px solid black');
                $('#marketing-content').show();
                return false;
            });
            $('.host-link').click(function() {
                $('.services').hide();
                $('#service-content-mobile').css('border-top', '1px solid black');
                $('#service-content-mobile').css('border-bottom', '1px solid black');
                $('#hosting-content').show();
                return false;
            });
            $('.design-link').click(function() {
                $('.services').hide();
                $('#service-content-mobile').css('border-top', '1px solid black');
                $('#service-content-mobile').css('border-bottom', '1px solid black');
                $('#design-content').show();
                return false;
            });
            $('.dev-link').click(function() {
                $('.services').hide();
                $('#service-content-mobile').css('border-top', '1px solid black');
                $('#service-content-mobile').css('border-bottom', '1px solid black');
                $('#dev-content').show();
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
                                <li><a class="design-link content-link" href="#">Web Design</a></li>
                                <li><a class="dev-link content-link" href="#">Web Development</a></li>
                                <li><a class="mark-link content-link" href="#">Web Branding & Marketing</a></li>
                                <li><a class="host-link content-link" href="#">Web Hosting</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <table class="service-table">
                                <tr class="even-row">
                                    <td>
                                        <div class="left-image">
                                            <img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" />
                                        </div>
                                    </td>
                                    <td id="design" colspan="5">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(236); ?></h4>
                                            <p>
                                                <?php echo getPageContent(236); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd-row">
                                    <td id="dev">
                                        <div class="left-content">
                                            <h4><?php echo get_the_title(234); ?></h4>
                                            <p>
                                                <?php echo getPageContent(234); ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="right-image">
                                            <img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" />
                                        </div>
                                    </td>
                                </tr>
                                <tr class="even-row">
                                    <td>
                                        <div class="left-image">
                                            <img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/marketing-touch_300x200_WEB.png" />
                                        </div>
                                    </td>
                                    <td id="branding">
                                        <div class="right-content">
                                            <h4><?php echo get_the_title(238); ?></h4>
                                            <p>
                                                <?php echo getPageContent(238); ?>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd-row">
                                    <td id="hosting">
                                        <div class="left-content">
                                            <h4><?php echo get_the_title(242); ?></h4>
                                            <p>
                                                <?php echo getPageContent(242); ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="right-image">
                                            <img src="http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/placeholder.jpg" />
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div id="service-content-mobile">
                        <div class="services" id="design-content" style="display: none;">
                            <h4><?php echo get_the_title(236); ?></h4>
                            <p>
                                <?php echo getPageContent(236); ?>
                            </p>
                        </div>
                        <div class="services" id="dev-content" style="display: none;">
                            <h4><?php echo get_the_title(234); ?></h4>
                            <p>
                                <?php echo getPageContent(234); ?>
                            </p>
                        </div>
                        <div class="services" id="marketing-content" style="display: none;">
                            <h4><?php echo get_the_title(238); ?></h4>
                            <p>
                                <?php echo getPageContent(238); ?>
                            </p>
                        </div>

                        <div class="services" id="hosting-content" style="display: none;">
                            <h4><?php echo get_the_title(242); ?></h4>
                            <p>
                                <?php echo getPageContent(242); ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); ?>