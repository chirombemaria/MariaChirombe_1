<?php get_header(); ?>

<!-- subheader begin -->

<section class="rich-header">
  <div class="container">
    <h1 class="page-title">
      <?php

          if ( is_day() ) :

            printf( esc_html__( 'Daily Archives: %s', 'risusagency' ), get_the_date() );



          elseif ( is_month() ) :

            printf( esc_html__( 'Monthly Archives: %s', 'risusagency' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'risusagency' ) ) );



          elseif ( is_year() ) :

            printf( esc_html__( 'Yearly Archives: %s', 'risusagency' ), get_the_date( _x( 'Y', 'yearly archives date format', 'risusagency' ) ) );



          else :

            esc_html_e( 'Archives', 'risusagency' );



          endif;

        ?>
    </h1>
  </div>
</section>

<!-- subheader close --> 

<!-- content begin -->

<div id="content" class="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 blog-content white-left">
        <ul class="blog-list">
          <?php if(have_posts()) : ?>
          <?php 

                  while (have_posts()) : the_post();

                  get_template_part( 'content', get_post_format() ) ;   // End the loop

                  endwhile;
                  
                  ?>
          <?php else: ?>
          <h1>
            <?php esc_html_e('Nothing Found Here!','risusagency'); ?>
          </h1>
          <?php endif; ?>
        </ul>
        <div class="pagination text-center ">
          <ul>
            <?php echo risusagency_pagination(); ?>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</div>

<!-- content close -->

<?php get_footer(); ?>
