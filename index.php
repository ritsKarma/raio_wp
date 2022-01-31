<section class="about-hero">
  <div class="about-hero__image">
  <?php get_header(); ?>
    <div class="hero__text container container--px  ">
            <div>
              <h1>
                Blog
                </h1>
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
            <p>posted by <?php the_author_posts_link()?> on <?php the_date('F j, Y'); ?> in <?php echo get_the_category_list(', ')?></p>
          </div>
          <div class= "blog-page__thumbnail">
            <?php the_post_thumbnail('archiveThumb'); ?>  
          <!-- <img src='<?php echo get_the_post_thumbnail_url();?>' href="<?php the_permalink();?>"> -->
          </div>
          <div class= "generic-content">
            <p><?php the_excerpt();?> </p>
      <a href="<?php the_permalink();?>" class="events__button">Read more</a>
          </div>
      </div>
  <hr class ="section break">
     <?php }
     echo paginate_links();
?>

      </section>



 <?php           
get_footer();
?>
