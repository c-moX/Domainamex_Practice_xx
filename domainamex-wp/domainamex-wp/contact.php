<?php get_header();?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <section id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li><a href="#">Contact page</a></li>
      </ul>
      <!-- ################################################################################################ -->
      <h6 class="heading">Contact Page contents Here!</h6>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3 pt-5">
  <main class="hoc clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="contact_padding_toP">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address_form_themx">
                        <div class="address_form_singlE text-muted">
                            <h4>E-Mail</h4>
                            <p>helloxpart@gmail.com</p>
                        </div>

                        <div class="address_form_singlE text-muted">
                            <h4>Phone Numbers</h4>
                            <p>+17 784 477 84 44</p>
                            <p>+17 784 477 84 44</p>
                        </div>

                        <div class="address_form_singlE text-muted">
                            <h4>Location</h4>
                            <p>Location-Nmae Park, Hello digital 88, Orchard St <span>Bangladesh.</span></p>
                        </div>

                        <div class="address_form_singlE text-muted">
                            <h4>Social Networks</h4>
                            <ul class="contact_social_last">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- col-md-4 -->

                <div class="col-md-8">
				<div id="comments">
                  <h2 class="text-muted">Keep In Touch</h2>
                  <form class="text-muted" action="#" method="post">
                    <div class="cnt_UserName">
                      <label for="name">Name<span>*</span></label>
                      <input type="name" name="name" id="name" value="" size="22" required>
                    </div>
                    <div class="one_third first">
                      <label for="phone">Phone <span>*</span></label>
                      <input type="phone" name="phone" id="phone" value="" size="22" required>
                    </div>
                    <div class="one_third">
                      <label for="email">Mail <span>*</span></label>
                      <input type="email" name="email" id="email" value="" size="22" required>
                    </div>
                    <div class="one_third">
                      <label for="url">Website</label>
                      <input type="url" name="url" id="url" value="" size="22">
                    </div>
                    
                    <div class="block clear">
                      <label for="comment">Your Comment</label>
                      <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                    </div>
                    <div>
                      <input type="submit" name="submit" value="Submit Form">
                    </div>
                  </form>
                </div>
				</div>
            </div><!-- row-->
        </div><!-- container-->
    </div><!-- contact_padding_toP-->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ############################################################################################## -->
<div class="subscribe_themex">
  <div class="container">
      <div class="col-md-12">
          <div class="cupon_shop_cart">
              <div class="row">
			  
                  <div class="col-md-6 col-sm-3">
                      <div class="pull-right_shop_Cart wow fadeInLeft" data-wow-delay="300ms">
                          <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/demo/logo.png" alt=""></a>
                      </div>
                  </div>
				  
                  <div class="col-md-6 col-sm-9">
                  <h5 class="newsneller_subscribe">Subscribe To My Newsletter</h5>
                      <form action="#" method="post">
                         <div class="thelj">
                              <input class="submit_cupon" type="email" name="email" value="" required>
                              <div class="send_btn_cupon">
                                  <input type="submit" name="submit" value="SUBSCRIBE" class="submit_cupon_submit">
                              </div>
                          </div>
                      </form>
                  </div>
				  
              </div>
          </div>
      </div><!--.col-md-12-->
  </div><!--.container-->
</div><!--.subscribe_themex-->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php get_footer();?>