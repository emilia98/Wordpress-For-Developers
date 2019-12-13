<?php get_header();?>


    <div class="container">

    <h1 class="page-title"><?php the_title()?> <hr/></h1>
        <div class="row" id="jobs">
        <?php 
   

   $type = 'jobs';
   $args = array(
     'post_type' => $type,
     'post_status' => 'publish',
     'posts_per_page' => -1,
     'ignore_sticky_posts'=> true
   );
   $my_query = null;
   $my_query = new WP_Query($args);

   
 
 
 


       if($my_query->have_posts()) 
           : while($my_query->have_posts()) : $my_query->the_post();?>
   
            <div class="col-md-3 col-lg-3 job-col">
                <div class="job">
                    <div>
                        <img src="<?php the_post_thumbnail_url()?>" alt="HERE" class="job-img"/>
                    </div>
                    <h3 class="job-title"><?php the_title() ?></h3>
                    <p class="job-date"><?php echo get_the_date(); ?></p>
                </div>
            </div>
            <?php endwhile; endif;  wp_reset_query();?>

            
            </div>

            
    </div>

 <?php get_footer();?>