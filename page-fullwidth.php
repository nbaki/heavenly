<?php 
/*
Template Name: Full Width 
*/
get_header();
 ?>
<?php if (is_page('services')) { ?>
<script>
    $(document).ready(function() {

        $('#func-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#func-area').css('background', 'purple');
            $('#functionality-content').show();
            return false;
        });
        $('#mark-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#mark-area').css('background', 'purple');
            $('#marketing-content').show();
            return false;
        });
        $('#host-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#host-area').css('background', 'purple');
            $('#hosting-content').show();
            return false;
        });
        $('#design-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#design-area').css('background', 'purple');
            $('#design-content').show();
            return false;
        });
        $('#arc-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#arc-area').css('background', 'purple');
            $('#arc-content').show();
            return false;
        });
        $('#brand-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#brand-area').css('background', 'purple');
            $('#branding-content').show();
            return false;
        });
        $('#maint-link').click(function() {
            $('.services').hide();
            $('#service-content').css('border-top', '1px solid black');
            $('#service-content').css('border-bottom', '1px solid black');
            $('.service-nav').css('background-color', '#5a5a5a');
            $('#maint-area').css('background', 'purple');
            $('#maintenance-content').show();
            return false;
        });
    });

</script>
<?php }?>
<div class="container">
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
<div id="service-content">
    <div class="services" id="functionality-content" style="display: none;">
        <h4><?php echo get_the_title(103); ?></h4>
        <p>
            <?php echo getPageContent(103); ?>
        </p>
    </div>
    <div class="services" id="marketing-content" style="display: none;">
        <h4><?php echo get_the_title(108); ?></h4>
        <p>
            <?php echo getPageContent(108); ?>
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
        <h4><?php echo get_the_title(108); ?></h4>
        <p>
            <?php echo getPageContent(108); ?>
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

         

<?php get_footer(); ?>
