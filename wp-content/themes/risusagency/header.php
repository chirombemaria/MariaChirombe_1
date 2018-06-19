<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $risusagency_option;  ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php if($risusagency_option['version_type']=='light'){echo 'data-skin="light"';}  ?>>
<div id="wrap">
<!-- header start -->
<header class="clearfix header">
  <nav class="navbar navbar-default " role="navigation">
    <?php if($risusagency_option['hphone']) { ?>
    <div class="top-line social-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-l-0">
            <ul class="inline">
              <?php if($risusagency_option['hphone']) { ?>
              <li><span class="fa fa-phone"></span> <?php echo esc_html($risusagency_option['hphone']); ?></li>
              <?php } if($risusagency_option['email_id']) { ?>
              <li><span class="fa fa-envelope"></span> <?php echo esc_html($risusagency_option['email_id']); ?></li>
              <?php }  ?>
            </ul>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <ul class="social-icons">
              <?php if($risusagency_option['facebook']) { ?>
              <li><a target="_blank" class="facebook" href="<?php echo esc_url($risusagency_option['facebook']); ?>"> <i class="icons-facebook"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['twitter']) { ?>
              <li><a target="_blank" class="twitter" href="<?php echo esc_url($risusagency_option['twitter']); ?>"> <i class="icons-twitter"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['github']) { ?>
              <li><a target="_blank" class="github" href="<?php echo esc_url($risusagency_option['github']); ?>"><i class="icons-github"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['dribbble']) { ?>
              <li><a target="_blank" class="github" href="<?php echo esc_url($risusagency_option['dribbble']); ?>"><i class="icons-dribbble"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['linkedin']) { ?>
              <li><a target="_blank" class="linkedin" href="<?php echo esc_url($risusagency_option['linkedin']); ?>"><i class="icons-linkedin"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['behance']) { ?>
              <li><a target="_blank" class="behance" href="<?php echo esc_url($risusagency_option['behance']); ?>"><i class="icons-behance"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['instagram']) { ?>
              <li><a target="_blank" class="instagram" href="<?php echo esc_url($risusagency_option['instagram']); ?>"><i class="icons-instagram"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['youtube']) { ?>
              <li><a target="_blank" class="youtube" href="<?php echo esc_url($risusagency_option['youtube']); ?>"><i class="icons-youtube"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['skype']) { ?>
              <li><a target="_blank" class="skype" href="<?php echo esc_url($risusagency_option['skype']); ?>"><i class="icons-skype"></i></a></li>
              <?php } ?>
              <?php if($risusagency_option['google']) { ?>
              <li><a target="_blank" class="google" href="<?php echo esc_url($risusagency_option['google']); ?>"><i class="icons-googleplus"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed menu-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">
        <?php esc_html_e('Toggle Navigation :', 'risusagency') ?>
        </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <?php if($risusagency_option['logo']) { ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="navbar-brand"> <img src="<?php echo esc_url($risusagency_option['logo']['url']); ?>" alt="<?php esc_html(bloginfo('name')); ?>"> </a>
        <?php } else { ?>
        <a class="logo-text" href="<?php echo esc_url(home_url()); ?>/">
        <?php esc_html(bloginfo('name')); ?>
        </a>
        <?php }  ?>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse " id="bs-example-navbar-collapse-1">
        <nav class="menu clearfix navbar-nav" >
          <?php if ( isset( $risusagency_option['make_appointment'] ) && !empty( $risusagency_option['make_appointment'] ) ) { ?>
          <div class="callbackmain"><a href="<?php echo esc_url( get_permalink($risusagency_option['make_appointment']));?>" class="callback"><?php echo get_the_title( $risusagency_option['make_appointment'] );?> </a> </div>
          <?php };  ?>
          <?php
			                    $primarymenu = array(
			                        'theme_location'  => 'primary',
			                        'menu'            => '',
			                        'container'       => '',
			                        'container_class' => '',
			                        'container_id'    => '',
			                        'menu_class'      => 'menu',
			                        'menu_id'         => 'nav',
			                        'echo'            => true,
			                        'fallback_cb'     => 'risusagency_bootstrap_navwalker::fallback',
			                        'walker'          => new risusagency_bootstrap_navwalker(),
			                        'before'          => '',
			                        'after'           => '',
			                        'link_before'     => '',
			                        'link_after'      => '',
			                        'items_wrap'      => '<ul class="clearfix nav navbar-nav navbar-right">%3$s</ul>',
			                        'depth'           => 0,
			                    );
			                    if ( has_nav_menu( 'primary' ) ) {
			                        wp_nav_menu( $primarymenu );
			                    }
			                    else{
				                    ?>
          <div class="pull-right no-menu">
            <?php  echo esc_html__('No Menu Assigned! ','risusagency'); ?>
          </div>
          <?php
			                        }
			                ?>
        </nav>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
