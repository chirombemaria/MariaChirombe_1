<?php
 $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
 $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
get_header();
?>
<!-- subheader begin -->

<section class="rich-header">
  <div class="container">
    <h1 class="page-title">
      <?php $title = get_the_title();  echo esc_html($title);?>
    </h1>
    <?php risusagency_breadcrumbs(); ?>
  </div>
</section>

<!-- subheader close --> 

<!-- CONTENT BLOG -->
<div id="content" class="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 white-left">
        <?php while (have_posts()) : the_post(); ?>
        <div class="blog-list blog-content">
          <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php $format = get_post_format(); ?>
            <?php if($format=='audio'){ ?>
            <iframe class="widthfull" src="<?php echo esc_url($link_audio); ?>"></iframe>
            <?php } elseif($format=='video'){ ?>
            <iframe height="430" width="100%" src="<?php echo esc_url($link_video); ?>"></iframe>
            <?php } elseif($format=='gallery'){ ?>
            <div id="owl-demo-<?php the_ID(); ?>" class="post-media post-gallery owl-post">
              <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
              <?php 
	                          foreach ( $images as $image ) { 
	                          ?>
              <?php $img = $image['full_url']; ?>
              <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php } ?>
              <?php } ?>
            </div>
            <?php } elseif($format=="") { ?>
            <?php 
							the_post_thumbnail();
							?>
            <?php } elseif($format=="aside") { ?>
            <?php 
							the_post_thumbnail();
							 ?>
            <?php } elseif($format=="quote") { ?>
            <?php 
							the_post_thumbnail();
				} elseif($format=='image') { ?>
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
            <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
            <?php  
                          foreach ( $images as $image ) { 
                          ?>
            <?php $img = $image['full_url']; ?>
            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php } ?>
            <?php } }?>
            <div class="post-content-text">
              <ul class="blog_infos nav">
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>
                  <?php the_date(); ?>
                  </a></li>
                <li><span><i class="fa fa-user"></i>
                  <?php the_author(); ?>
                  </span></li>
              </ul>
              <p><?php echo the_content(); ?></p>
              <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'risusagency' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'risusagency' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                    ?>
              <?php if ( has_tag() ) { ?>
              <span class="uppercase tags"> <i class="fa fa-tag"></i>
              <?php the_tags(); ?>
              </span>
              <?php } ?>
              <?php endwhile;?>
              <?php 
                // Previous/next post navigation.
                the_post_navigation( array(
                  'next_text' => '<span class="meta-nav btn read-more" aria-hidden="true">' . esc_html__( 'Next >>', 'risusagency' ) . '</span> ' .
                    '<span class="screen-reader-text">' . esc_html__( 'Next post:', 'risusagency' ) . '</span> ' ,
                  'prev_text' => '<span class="meta-nav btn read-more" aria-hidden="true">' . esc_html__( '<< Previous', 'risusagency' ) . '</span> ' .
                    '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'risusagency' ) . '</span> ' ,
                ) ); 
              ?>
              <?php 
                     if ( comments_open() || get_comments_number() ) :
                      comments_template();
                     endif;  ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</div>

<!-- END CONTENT BLOG -->

<?php get_footer(); ?>
