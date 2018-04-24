  <!-- BEGIN CONTAINER -->    
<div class="carnegie-container">

    <div class="page-top">
      <!-- START CARNEGIE LOGO -->
      <?php if ($logo): ?>
        <div class="logo col-xs-9 pull-left">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive"/>
          </a>
        </div>
      <?php endif; ?>
      <!-- END CARNEGIE LOGO -->

      <!-- SEARCH BOX -->
      <?php if (!empty($page['header_second'])): ?>
            <div class="carnegie-search col-xs-3 pull-right">
              <?php print render($page['header_second']); ?>
            </div>
      <?php endif; ?>
      <!-- END SEARCH BOX -->

    </div>

    <!-- MAIN NAVIGATION -->
    <?php if (!empty($page['navigation'])): ?>
      <div id="main-nav" class="navbar navbar-default row" role="navigation">
        <?php print render($page['navigation']); ?>
      </div>
    <?php endif; ?>
    <!-- END MAIN NAVIGATION -->

    <section id="banner">
        <div class="banner-title">
          <?php if ($title): ?>
            <div class="page-title" id="page-title">
              <?php print $title; ?>
            </div>
          <?php endif; ?>
        </div>
    </section>

    <div class="col-xs-12">

        <?php if ($messages): ?>
          <div id="messages"><div class="section clearfix">
            <?php print $messages; ?>
          </div></div> <!-- /.section, /#messages -->
        <?php endif; ?>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

        <?php if (!empty($page['sidebar_first'])): ?>
          <div id="sidebar-left" class="sidebar col-sm-3">
            <div class="section">
              <?php print render($page['sidebar_first']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>      


      <div id="content" <?php print $content_column_class; ?>>
        <div class="section">
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>

          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
          <div class="body-content">
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>

        </div>
      </div>


        <?php if (!empty($page['sidebar_second'])): ?>
          <div id="sidebar-right" class="sidebar col-sm-3">
            <div class="section">
              <?php print render($page['sidebar_second']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>   

        
    </div>

    <div class="footer col-xs-12">

        <div class="footer-first">
          <div class="col-xs-8">
            <div class="footer-logo">
              <img src="/sites/all/themes/bootstrap-d7-theme/img/footer-logo.png" alt="Carnegie Science">
            </div>
            <div class="footer-address">
              Carnegie Institution for Science | Department of Embryology <br>
              3520 San Martin Drive | Baltimore, Maryland 21218 | (410) 246-3001
            </div>        
          </div>

          <div class="col-xs-4">
            <div class="social-title">Follow</div>
            <div class="social-icons">         
              <a class="social-link" target="_blank" href="https://www.facebook.com/CarnegieEmbryology"><i class="fa fa-facebook fa-2x"></i></a>
              <a class="social-link" target="_blank" href="https://twitter.com/CarnegieDevBio"><i class="fa fa-twitter fa-2x"></i></a>
              <a class="social-link" target="_blank" href="https://www.instagram.com/carnegiescience/"><i class="fa fa-instagram fa-2x"></i></a>
              <a class="social-link" target="_blank" href="https://www.youtube.com/user/CarnegieInstitution/videos"><i class="fa fa-youtube fa-2x"></i></a>
            </div>
          </div>

        </div>

      <?php if ($page['footer_second']): ?>
        <div class="footer-second">
          <?php print render($page['footer_second']); ?>
        </div>
      <?php endif; ?>
    </div>

  </div>