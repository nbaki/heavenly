<?php
/*
 * Template Name: Contact Form Template
 */
get_header();

?>

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
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                    <div id="contact-info">
                                        <table id="conctact-info-table">
                                            <tr>
                                                <td>Kind Technology Services, LLC</td>
                                            </tr>
                                            <tr>
                                                <td>Location:</td>
                                                <td>Gloucester County, New Jersey 08012</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td>TBA</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>support@kindtechnj.com</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>