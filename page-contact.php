<?php
/*
 * Template Name: Contact Form Template
 */
get_header();

?>

    <div class="page-container">
        <div class="content-container">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
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
                                    <div id="mobile-contact-info">
                                    <fieldset>
                                        <legend>General Info</legend>
                                        <ul>
                                            <li>Email: support@kindtechnj.com</li>
                                            <li>Phone: TBA</li>
                                            <li>Location: Northeast New Jersey</li>
                                        </ul>
                                    </fieldset>
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