 <section class="about-hero">
        <div class="about-hero__image">
            
<?php get_header(); 

while (have_posts()){
    the_post(); ?>
<?php }

?>
            <div class="hero__text container container--px  ">
                <div>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <!-- <h2>hero Subheading</h2> -->
                    <a href="#" class="button hide-for-desktop">Play Radio</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

   

    <!-- section our story -->
    <section class="story-parent">
        <div class=" container container--pall blog-page">
            <h1><?php the_title(); ?></h1>
             <div class= "metabox">
            <p>posted by <?php echo the_author_posts_link();?> on <?php the_date('F j, Y'); ?> in <?php echo get_the_category_list(', ');?></p>
          </div>
          <div class= "blog-page__thumbnail">
             <img src='<?php echo get_the_post_thumbnail_url();?>' href="<?php the_permalink();?>">
          </div>
          <div class= "generic-content">
            <p><?php the_content();?> </p>
          </div>
      </div>
  
    </div>
    </section>



    <?php  

     get_footer(); 
     
     ?>