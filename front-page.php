<section class="hero">
    <div class="hero__image">
        <?php get_header();?>
        

      <div class="hero__text container container--px  ">
        <div>
          <h1>
            Radio Gham Chhaya
          </h1>
          <h2>India's First Nepalese Community radio.</h2>
          <a href="https://liveradio.lexiconcpl.com:8443/radioghamchhaya.mp3" class="button hide-for-desktop">Play Radio</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- section our story -->
  <section class="story-parent">
    <div class="story container container--pall  ">
      <div class="story__image">
        <img src="wp-content/themes/radiogc/images/story.png" alt="">
      </div>
      <div class="story__text">
        <h2>Our Story</h2>
        <p>RADIO GHAM CHHAYA is a Nepali community radio that serves more than 150,000 Gorkhas in Uttarakhand to
          resurrect and
          preserve the language and culture. It will also stream as an Internet Radio for which we have launched an app
          that
          will help reaching Nepalese people in the country and globally. The Nepalese language has been recognised in
          the 8th schedule of the Indian Constitution but faces near extinction in Uttarakhand.
        </p>
        <p>
          Over the years the Gorkhas have seen their language, culture and ways being inundated by dominant cultures.
          Years of trying to fit in and not be constantly asked if they were citixens of Nepal, made majority of Gorkhas
          believe that an assimilation with the prevailing culture would make them more acceptable.
        </p>
        
        <br>
        <a href="#" class="button">Read more</a>
      </div>
    </div>
  </section>

  <!-- section Blog-->
  <section class="events">
    <div class="events__content  container container--pall">
      <div class=" events__intro">
        <h2>Latest Posts</h2>
        <h3>Latest Events</h3>
      </div>

<div class="events__grid container">
        <?php 
      $homepagePosts = new WP_Query(array (
        'posts_per_page' => 3
      ));
        
          while($homepagePosts -> have_posts()){
            $homepagePosts->the_post(); ?>
             <div class="events__item">
          <div class="events__icon"><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?> "></div>
          <div class="events__description">
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p><?php if (has_excerpt()){
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 15); 
            }
            ?></p>
            <h5><a href="<?php the_permalink();?>">keep reading ...</h5>
            <div class="user">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
              <div class="user-info">
                <h5><?php the_author_posts_link(); ?></h5>
                <small><?php the_date('d/m/Y'); ?></small>
              </div>
            </div>
          </div>
        </div>
        
        
        <?php } wp_reset_postdata();
          ?>
          </div>
          <a href="<?php echo site_url('/blog');  ?>" class="events__button">View all Posts</a>
          </div>
      
      
        </section>
   <!-- Blog end-->    
      
        
     
<!-- section Events -->
  <section class="archive">
    <div class="archive__content  container container--pall">
      <div class=" archive__intro">
        <h2>Upcoming Events</h2>
        <h3>Collection</h3>
        
      </div>
      <div class="archive__grid ">
        
      <?php 
      $today= date('dmy');
      $homepageEvents = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
             
          )
        )
              ));
 
          while($homepageEvents -> have_posts()){
            $homepageEvents->the_post(); ?>
            
        <div class="events__item">
          <div class="events__icon"><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?> "></div>
          <div class="events__description">
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p><?php if (has_excerpt()){
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 15); 
            }
            ?></p>
            <h5><a href="<?php the_permalink();?>">keep reading ... </a></h5>
            <div class="user">
              <div class="user-info">
                <small> planned on <?php the_field('event_date'); ?></small>
              </div>
            </div>
          </div>
        </div>
    
          <?php }

        ?>
        </div>
   
    <a href="<?php echo get_post_type_archive_link('event')?>" class="events__button">View all</a>
  </section>

 


<?php get_footer(); ?>