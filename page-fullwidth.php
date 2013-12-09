<?php 
/*
Template Name: Full Width 
*/
get_header();
 ?>
<?php if (is_page('services')) { ?>
<?php }?>
<div class="page-container">
<div class="content-container">
    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display') && !is_page('Home'))
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
