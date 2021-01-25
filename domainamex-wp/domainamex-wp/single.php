<?php get_header();?>
  <div class="header-box-img bgded overlay" style="background-image:url('<?php echo get_template_directory_uri();?>/images/demo/backgrounds/header-img.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper hoc clear">
      <!-- ################################################################################################ -->
      <ul class="breadcrumb">
	    <?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
        
      </ul>
      <!-- ################################################################################################ -->
	    <h6 class="">Blog single Page contents here!</h6>
      <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="blog_page_area">
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="blog_left_side_area">
			  <?php if(have_posts()): while(have_posts()): the_post(); ?> <!--- Start_post_loop --->

                  
				        <div class="blog_pic image_fulwidth"> <!--- Start post_desc --->
                            <?php the_post_thumbnail();?>
                            <h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
                        </div>
                        <div class="blog_left_single_content blog_single_content para_default">
                            <h3><?php echo the_title();?></h3>
                            <p><?php echo the_content();?></p>
                        </div> <!--- End post_desc --->

						<div class="blog_tag"> <!--- Start tags_button --->
						    <?php the_tags('', '', '<br />');?> 
						</div> <!--- End tags_button --->

                        <div class="share_blog_single_in_social"> <!--- Start share_button --->
							<h4>
								<span><?php echo esc_html('Share', 'consult');?></span>
								<a href="http://www.facebook.com/sharer.php?url=<?php the_permalink();?>&amp;t=<?php the_title();?>" title="Share on facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="http://twitter.com/home/?status=<?php the_title();?> - <?php the_permalink();?>" title="Share on twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title();?>&amp;url=<?php the_permalink();?>" title="Share on linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="https://plus.google.com/share?url=<?php the_permalink();?>" title="Share on google+" target="_blank"><i class="fa fa-google-plus"></i></a>
							</h4>
                        </div> <!--- End share_button --->
      
                        <div class="content_blog_a fix"> <!--- Start admin_desc --->
							<div class="e_blog_A">
								<?php echo get_avatar(get_the_author_meta('ID'), 100);?> <!--- Avatar --->
							</div>
							<div class="blog_a_text">
								<h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename'));?>"><?php the_author();?></a></h5> <!--- NiceName --->
								<p><?php the_author_meta('description'); ?></p> <!--- Author Desc --->
							</div>
						</div> <!--- End admin_desc --->

				        
						<!-- Comment form here -->
				        <?php    // End comment_form //
							if( comments_open() || get_comments_number() ) : //Get_Comment_Form //
									comments_template();		
							endif;
						?> <!-- End comment_form -->
				  
				  <?php endwhile; endif; ?> <!--- End post loop --->
              </div><!-- blog_left_side_area -->
          </div><!-- col-md-8 -->

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