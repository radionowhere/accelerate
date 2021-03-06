<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

	<div id="primary" class="about-page about-hero-content">
    <div class="main-content" role="main">


			<?php while ( have_posts() ) : the_post(); ?>
				<h3><?php echo get_field('about'); ?></h3>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
  </div><!-- #primary -->

<section class="services-list">
  <div class="about-services">
      <?php while ( have_posts() ) : the_post(); ?>
				<h5><?php echo get_field('intro_title'); ?></h5>
				<p><?php echo get_field('intro_text'); ?></p>
			<?php endwhile; // end of the loop. ?> 
  </div>

<!-- remove permalinks if not creating single pages for posts -->
  <div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php query_posts('post_type=services_offered'); ?>
			<?php while ( have_posts() ) : the_post();
        $icon_1 = get_field("image");
      ?>

      <article class="services-offered clearfix">
        <div class="services-offered-images">
          
            <?php if($icon_1) {
              echo wp_get_attachment_image( $icon_1 );
            } ?>
          </a>
        </div>
        <aside class="services-offered-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
        </aside>

      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

</section>

<section class="contact-link-section clearfix" >
  <div class="cta">
    <h4>Interested in working with us?</h4>
    <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
  </div>
</section>

<?php get_footer(); ?>