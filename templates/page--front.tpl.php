<!-- BEGIN CONTAINER -->
<div class="page-top clearfix">
  <div class="container">
      <div class="row">
          <!-- START CARNEGIE LOGO -->
          <?php if ($logo): ?>
              <div class="logo col-md-4 col-sm-6 pull-left">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive"/>
                  </a>
              </div>
          <?php endif; ?>
          <!-- END CARNEGIE LOGO -->


          <div class="col-md-8 col-sm-6 col-xs-10">
              <!-- SEARCH BOX -->
              <?php if (!empty($page['header_second'])): ?>
                  <div id="search-area" class="clearfix">
                      <?php print render($page['header_second']); ?>
                  </div>
              <?php endif; ?>
              <!-- END SEARCH BOX -->

              <!-- MAIN NAVIGATION -->
              <?php if (!empty($page['navigation'])): ?>
                  <div id="main-navigation" class="navbar row clearfix" role="navigation">
                      <?php print render($page['navigation']); ?>
                  </div>
              <?php endif; ?>
              <!-- END MAIN NAVIGATION -->
          </div>
      </div>
  </div>
</div>


<div id="page">

    <!-- START SLIDE CAROUSEL -->
    
    <?php if ($page['slider']): ?>
       <?php print render($page['slider']); ?> 
    <?php endif; ?>
    
    <!-- END SLIDE CAROUSEL -->

    <section class="about">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div  class="about">
                    <h2>We explore & discover</h2>
                    <p>
                        <?php $block = module_invoke('block', 'block_view', 3); if (!empty($block['content'])) {print render($block['content']);}  ?>
                    </p>
                    <a class="button" href="/about">About our research</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="news">
                    <h2><i class="fa fa-calendar"></i> Upcoming Events</h2>
                    <div class="">
                        <?php print render($page['preface_second']); ?>
                        <a class="button" href="/seminars">More events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <h2>Latest articles and news</h2>
            <?php print render($page['preface_first']); ?>
            <div class="col-md-12">
                <a class="button" href="/news">More articles</a>
            </div>
        </div>
    </section>


  <div class="footer">
        <div class="footer-first">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-12">
                        <div class="footer-logo">
                            <img src="<?php global $base_url; print $base_url;?>/sites/all/themes/bootstrap-d7-theme/img/footer-logo.png" alt="Carnegie Science">
                        </div>
                        <div class="footer-address">
                            Carnegie Institution for Science | Department of Embryology <br>
                            3520 San Martin Drive | Baltimore, Maryland 21218 | (410) 246-3001
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <!--            <div class="social-title">Follow</div>-->
                        <div class="social-icons">
                            <a class="social-link" target="_blank" href="https://www.facebook.com/CarnegieEmbryology"><i class="fa fa-facebook fa-2x"></i></a>
                            <a class="social-link" target="_blank" href="https://twitter.com/CarnegieDevBio"><i class="fa fa-twitter fa-2x"></i></a>
                            <a class="social-link" target="_blank" href="https://www.instagram.com/carnegiedevbio"><i class="fa fa-instagram fa-2x"></i></a>
                            <a class="social-link" target="_blank" href="https://www.youtube.com/channel/UCTeJd08nZyUGQxQ-9rUeuTw"><i class="fa fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-second">
            <?php if ($page['footer_second']): ?>
                <?php print render($page['footer_second']); ?>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="color: white">
                        Copyright &copy; <?php echo date("Y"); ?> Carnegie Science. All rights reserved. <a style="color: white" href="https://carnegiescience.edu/privacy-policy" target="_blank">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>

  </div>

</div>