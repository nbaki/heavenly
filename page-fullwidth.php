<?php 
/*
Template Name: Full Width 
*/
get_header();
 ?>
<?php if (is_page('Client Checklist')) : ?>
    <script>
        $(document).ready(function () {
            $('#checklist-opening').after("<div id='mobile-process-flow'><img src='http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/checklist-guy_400x359.png' alt='checklist-guy' /><p class='wp-caption-text'>Have you checked everything?</p></div>");
        });
    </script>
<?php elseif (is_page('Our Process')) : ?>
    <script>
        $(document).ready(function () {
            $('#process-opening').before("<div id='mobile-process-flow' style='clear: both;'><img src='http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/process-flow.jpg' alt='process-flow' width='200' height='300' /></div>");
        });
    </script>
<?php elseif(is_page('About Us')) : ?>
    <script>
        $(document).ready(function () {
            $('.content-container').css("background", "url('http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/Greenleaves_Right_opactity.png')");
//            $().css();
        });
    </script>
<?php endif; ?>
<div class="page-container">
<div class="content-container">
    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display') && !is_page('Home'))
        {
            bcn_display();
        }?>
        <?php if (!is_page('Home')) : ?>
            <div id="search-bar-area">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Navigation Widget Area') ) : ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

<div class="row-fluid">


 


<div class="span12">
<div  id="single-post post-<?php the_ID(); ?>" <?php post_class(); ?>> 
<?php 

while(have_posts()): the_post(); ?>
 
<div <?php post_class('post'); ?>>
<div class="clear"></div>
<h1 class="entry-title">
    <?php if (!is_page('Home')) {
        the_title();
    } else { ?>
        Welcome to Kind Technology Services!
    <?php } ?>
</h1>
<div class="entry-content">
<?php the_content(); ?>
</div>
<?php wp_link_pages( ); ?>
</div>
 <div class="mx_comments"> 
<?php comments_template(); ?>
</div>
<?php endwhile; ?>
</div>
</div>
</div>
</div>
</div>
         

<?php get_footer(); ?>
