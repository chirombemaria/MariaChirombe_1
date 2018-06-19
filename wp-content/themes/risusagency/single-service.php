<?php
get_header(); ?>

<!-- subheader begin -->


<section class="rich-header">
  <div class="container">
    <h1 class="page-title">
      <?php the_title(); ?>
    </h1>
    <?php risusagency_breadcrumbs(); ?>
  </div>
</section>
<div id="content" class="services-page-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="side-navigation">
          <ul class="side-navigation-list">
            <?php
									$args = array(
										'post_type' => 'service',
										'posts_per_page' => -1,
									);
									$service = new WP_Query($args);
									if($service->have_posts()) : while($service->have_posts()) : $service->the_post();						
								?>
            <li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="contact-info">
            <?php if($risusagency_option['headline']) { ?>
            <h2><?php echo esc_html($risusagency_option['headline']); ?></h2>
            <?php } ?>
            <ul class="information-list">
              <?php if($risusagency_option['address']) { ?>
              <li><i class="icon icon-Pointer"></i><span><?php echo wp_kses( $risusagency_option['address'], wp_kses_allowed_html('post') ); ?></span></li>
              <?php } if($risusagency_option['phone']) { ?>
              <li><i class="icon icon-Phone2"></i><span><?php echo wp_kses( $risusagency_option['phone'], wp_kses_allowed_html('post') ); ?></span></li>
              <?php } if($risusagency_option['email']) { ?>
              <li><i class="icon icon-Mail"></i><a href="mailto:<?php echo esc_url($risusagency_option['email']); ?>"><?php echo esc_html($risusagency_option['email']); ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9 white-right">
        <div class="services-wrapp">
          <?php while (have_posts()) : the_post()?>
          <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- subheader close -->
<?php get_footer(); ?>
