<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>DomaiNameX - One page portfolio templete</title>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/demo/favicon.ico" type="image/x-icon">
<!-- Template styles here -->

<?php wp_head();?>
</head>
<body <?php body_class();?>>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="header-box-img bgded overlay" style="background-image:url('<?php echo get_template_directory_uri();?>/images/demo/backgrounds/header-img.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="container clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
	    <?php
				wp_nav_menu(array(
				'theme_location'   => 'top_menu',
				'container'        => 'div',
				'container_class'  => '',
				'menu'             => 'ul',
				'menu_class'       => 'nospace',
				'depth'            => 5,
				'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
				'walker'           => new WP_Bootstrap_Navwalker(),
			));
		?>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +880 17xx-xxxxxx</li>
          <li><i class="fa fa-envelope-o"></i> info.domainamex@gmail.com</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
				echo '<a href="'. esc_url( home_url('/')).'"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_html__( 'Logo', 'domaainamex' ) . '"/></a>';
			} else {
				echo '<a href="'. esc_url( home_url('/')).'"><h2 class="domaainamex-site-title">'. esc_attr( get_bloginfo( 'name' )) . '</h2></a>';
			}	
		?>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <?php
			wp_nav_menu(array(
				'theme_location'   => 'head_menu',
				'container'        => 'div',
				'container_class'  => '',
				'menu'             => 'ul',
				'menu_class'       => 'clear',
				'depth'            => 5,
				'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
				'walker'           => new WP_Bootstrap_Navwalker(),
			));
		?>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>
    