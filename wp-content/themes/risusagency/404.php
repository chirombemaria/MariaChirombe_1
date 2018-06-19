<?php

/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<section class="error-section" style='background: url("<?php if($risusagency_option['error']['url']) { echo esc_url($risusagency_option['error']['url']);} else { echo esc_url(get_template_directory_uri().'/img/error.jpg'); }?>"'>
  <div class="error-content">
    <div class="container">
      <h1>
        <?php esc_html_e('oops! Page not found', 'risusagency'); ?>
      </h1>
      <p>
        <?php esc_html_e('The page you are looking for has either moved or does not exist. Please use the link below to return to our home page.', 'risusagency'); ?>
      </p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="button-one">
      <?php esc_html_e('Back To Home', 'risusagency'); ?>
      </a> </div>
  </div>
</section>
<?php get_footer(); ?>
