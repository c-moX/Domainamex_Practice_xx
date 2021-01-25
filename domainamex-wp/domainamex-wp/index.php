<?php get_header();?>
  <div class="header-box-img bgded overlay" style="background-image:url('<?php echo get_template_directory_uri();?>/images/demo/backgrounds/header-img.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
      <!-- ################################################################################################ -->
      <ul class="breadcrumb hoc clear">
	    <?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
        
      </ul>
      <!-- ################################################################################################ -->
      <div class="hoc clear">
	    <h6 class="heading">Blog Page contents here!</h6>
	  </div>
      <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="blog_page_area">
  <div class="container clear">
      <div class="row">


          <div class="col-md-8">
              <div class="blog_left_side_area">

                  <?php if(have_posts()): while(have_posts()): the_post(); ?> <!--- Start post_loop --->
				  <div class="blog_left_single_item">
                      <div class="blog_pic image_fulwidth">
                          <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                          <h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
                      </div>

                      <div class="blog_left_single_content para_default">
                          <h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
                          <p><?php echo wp_trim_words(get_the_content(), 49);?></p>
                      </div>
                  </div><!-- blog_left_single_item -->
				  <?php endwhile; ?> <!--- End post_loop 01 --->
                  
                    <div class="blog_pagination"> <!--- Start pagination --->
                        <nav>
                            <ul class="pagination pagination-lg">
							<?php
							    the_posts_pagination(array(
								    'mid_size'   =>   3,
								    'prev_text'  => __('-Previous', 'textdomain'),
								    'next_text'  => __('-Next', 'textdomain'),
								));
							?>
                            </ul>
                        </nav>
                    </div> <!--- End pagination --->
				  
				  <?php   // For the blank post show //
					else: get_template_part('/template-parts/page/content', 'none'); 
					endif; // End post_loop 02 
						wp_reset_postdata();
				  ?>

              </div><!-- blog_left_side_area -->
          </div><!-- col-md-8 -->
  
  
          <!--- Blog Sidebar --->
		  <div class="col-md-4">
              <div class="blog_right_side_area pl-5">
    
                  <?php echo dynamic_sidebar('domainamex_main_sidebar');?>
				  
              </div>
          </div><!-- col-md-4 -->
      </div><!-- row -->
  </div><!-- container -->
</div><!-- blog_page_area -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php get_footer();?>