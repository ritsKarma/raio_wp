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

        
   
  <!-- <section class="story-parent">
    <div class="story container container--pall  ">
      <div class="story__image">
        <img src="/wp-content/themes/radiogc/images/story.png" alt="">
      </div>
      <div class="story__text">
        <h2>Our Story</h2>
        
        <?php the_content();?>
        <br>
        <a href="#" class="button">Read more</a>
      </div>
    </div>
  </section> -->

  <!-- section contact-->

<section class="contact ">
    <div class=" container container--pall">
        <div class ="contact__inner flex">
            <div class="contact__form">
                <h2>Send your Request</h2>
                <?php the_content(); ?>
                <!-- <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" value="John"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" value="Doe">
                </form> -->
            </div>
            <div class="contact__info">
                <h2>Contact Information</h2>
                <p><span>address &nbsp; &nbsp;</span> 334 Garhi cantt Dehradun, Uttarakhand </p>
                <p><span>Phone &nbsp; &nbsp;  </span>+91 1232345123</p>
                <p><span>E-mail &nbsp; &nbsp; </span>xyz@gmail.com</p>
            </div>
        </div>




    </div>



</section>



    <!-- <?php the_content(); ?> -->
    








    <?php  
    }

     get_footer(); ?>