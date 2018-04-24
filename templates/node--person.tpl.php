<div class="body-content">
  <div class="lab-card row">
      <div class="scientist col-sm-3 row">
        <div class="scientist-image">
            <img alt="<?php print $title; ?>" src="<?php global $base_url; print $base_url; ?>/sites/default/files/<?php if ($node->field_profile_picture) print $node->field_profile_picture['und'][0]['filename']; ?>" typeof="foaf:Image" class="img-responsive">    
        </div>

        <div class="scientist-name"><?php print $title; ?></div>
        <div class="position-title"><?php print $node->field_position_title['und']['0']['value']; ?></div>

      </div>  

      <div class="scientist-details col-sm-9 row">
        <div class="col-sm-4">
          <div class="scientist-contacts">
            <strong>Lab Contacts:</strong>
            <address>
              <span class="contact-label">Office </span><?php print $node->field_office_phone_number['und']['0']['value']; ?><br>
              <span class="contact-label">Lab </span><?php print $node->field_lab_phone_number['und']['0']['value']; ?><br>
              <span class="contact-label">Fax </span><?php print $node->field_fax['und']['0']['value']; ?><br>
            </address>
          </div>

          <div class="lab-links">
          <?php 
            print render($content['field_lab_links']);
          ?>
          </div>

        </div>

        <div class="col-sm-8">
          <?php if (!empty($content['field_lab_members'])): ?>
          <div class="lab-members">
            <?php 
              print render($content['field_lab_members']);
            ?>
          </div> 
          <?php endif; ?>          
        </div>
      </div>  
  </div>

  <div class="lab-body">
    <?php print render($body[0]['value']); ?>            
  </div>

</div>