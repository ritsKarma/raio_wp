 <section class="about-hero">
        <div class="about-hero__image">
            
<?php get_header(); ?>
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

<?php
    while(have_posts()){
        the_post();?>
   <!-- section our story -->
  <section class="story-parent">
    <div class="story container container--pall  ">
      <div class="story__image">
        <img src="/wp-content/themes/radiogc/images/story.png" alt="">
      </div>
      <div class="story__text">
        <h2>Our Story</h2>
        <!-- <p>RADIO GHAM CHHAYA is a Nepali community radio that serves more than 150,000 Gorkhas in Uttarakhand to
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
        </p> -->
        <?php the_content();?>
        <br>
        <a href="#" class="button">Read more</a>
      </div>
    </div>
  </section>
    <!-- <?php the_content(); ?> -->
    
    <?php  
    }

     get_footer(); ?>