<?php get_header(); ?>

<!-- subheader begin -->

<section class="rich-header">
  <div class="container">
    <h1 class="page-title"> <?php printf( esc_html__( 'Category: %s', 'risusagency' ), single_cat_title( '', true ) ); ?> </h1>
    <?php risusagency_breadcrumbs(); ?>
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
