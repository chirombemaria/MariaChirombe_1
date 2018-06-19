<div id="post-<?php the_ID(); ?>" <?php post_class("blog-post"); ?>>
  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
  <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
  <div class="post-media">
    <?php            
					      foreach ( $images as $image ) { 
					      ?>
    <?php $img = $image['full_url']; ?>
    <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php } ?>
  </div>
  <?php } ?>
  <div class="post-content-text">
    <?php $title = get_the_title(); ?>
    <h2 class="title"><a href="<?php the_permalink(); ?>">
      <?php if (strlen($title) == 0) esc_html_e('Untitled Posts', 'risusagency'); else echo esc_html($title); ?>
      </a></h2>
    <ul class="blog_infos nav">
      <li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>
        <?php the_date(); ?>
        </a></li>
      <li><span><i class="fa fa-user"></i>
        <?php the_author(); ?>
        </span></li>
      <li><span><i class="fa fa-comments-o"></i>
        <?php comments_number( esc_html__(' 0 comments', 'risusagency'), esc_html__(' 1 comments', 'risusagency'), esc_html__('% comments', 'risusagency') ); ?>
        </span></li>
    </ul>
    <p><?php echo esc_attr(risusagency_excerpt()); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn readmore">
    <?php esc_html_e('Read more', 'risusagency') ?>
    </a> </div>
</div>
