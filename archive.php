<section class="about-hero">
  <div class="about-hero__image">
  <?php get_header(); ?>
    <div class="hero__text container container--px  ">
            <div>
              <h1>
                  <?php the_archive_title(); ?>
                </h1>
                <h2><?php the_archive_description(); ?></h2>
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
            <p>posted by <?php the_author_posts_link()?> on <?php the_time('n.M.y') ?> in <?php echo get_the_category_list(', ')?></p>
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

      </section>

      

        <!-- <div class="events__item">
          <div class="events__icon"><img src="<?php echo get_template_directory_uri();?>/images/car-green.jpeg"></div>
          <div class="events__description">
            <h3>event 1</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, natus magnam, obcaecati adipisci id autem
              maxime
              atque error nihil cum dignissimos, doloribus molestiae ab temporibus suscipit iste officia cumque nemo.
            </p>
            <div class="user">
              <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo"
                alt="user" />
              <div class="user-info">
                <h5>July Dec</h5>
                <small>2h ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="events__item">
          <div class="events__icon"><img src="<?php echo get_template_directory_uri();?>/images/event2.jpeg"></div>
          <div class="events__description">
            <h3>event 1</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, natus magnam, obcaecati adipisci id autem
              maxime
              atque error nihil cum dignissimos, doloribus molestiae ab temporibus suscipit iste officia cumque nemo.
            </p>
            <div class="user">
              <img
                src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo"
                alt="user" />
              <div class="user-info">
                <h5>July Dec</h5>
                <small>2h ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="events__item">
          <div class="events__icon"><img src="<?php echo get_template_directory_uri();?>/images/event2.jpeg"></div>
          <div class="events__description">
            <h3>event 1</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, natus magnam, obcaecati adipisci id autem
              maxime
              atque error nihil cum dignissimos, doloribus molestiae ab temporibus suscipit iste officia cumque nemo.
            </p>
            <div class="user">
              <img
                src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo"
                alt="user" />
              <div class="user-info">
                <h5>July Dec</h5>
                <small>2h ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>


  </section> -->



 <?php           
get_footer();
?>
