<section class="about-hero">
  <div class="about-hero__image">
  <?php get_header(); ?>
    <div class="hero__text container container--px  ">
            <div>
              <h1>
                  All Events
                  <!-- <?php the_archive_title(); ?> -->
                </h1>
                <h3><?php the_archive_description(); ?></h3>
                <!-- <h2>hero Subheading</h2> -->
                <a href="#" class="button hide-for-desktop">Play Radio</button>
                </a>
                </div>
    </div>
  </div>
</section> 



 <!-- section Events -->
   <section class="blog-page">
    <div class="  container container--pall">
      <?php
      while(have_posts()){
        the_post();?> 
       

        <!-- layout for blog list-->
        <div class="container blog-wrap">
          <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>

          <div class= "metabox">
           <!-- <p>posted by <?php echo the_author_posts_link();?> on <?php the_date('F j, Y'); ?> in <?php echo get_the_category_list(', ');?></p> -->
           <p>planned on <?php the_field('event_date');?></p>
          </div>
          <div class= "blog-page__thumbnail">
             <img src='<?php echo get_the_post_thumbnail_url();?>' href="<?php the_permalink();?>">
          </div>
          <div class= "generic-content">
            <p><?php the_excerpt();?> </p>
      <a href="<?php the_permalink();?>" class="events__button">Read more</a>
          </div>
      </div>

     <?php }
     echo paginate_links();
     ?>

    <hr class ="section break">
     <h3> Looking for a recap of past events ? <a href="<?php echo site_url('/past-events')?>"</a>check out our past events archive. </h3>

      </section>



 <?php          
get_footer();
?>
