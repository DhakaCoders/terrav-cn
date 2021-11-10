<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $telefoon = get_field('telefoon', 'options');
  $email = get_field('emailadres', 'options');
  $fax = get_field('fax', 'options');
  $btw = get_field('btw', 'options');
  $adres = get_field('adres', 'options');
  $map_url = get_field('map_url', 'options');
  $slogan = get_field('slogan', 'options');
  $gmaplink = !empty($map_url)?$map_url:'javascript:void()';
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-inr">
          <div class="ftr-lft">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <div class="ftr-details hide-md">
              <?php 
                if( !empty($adres) ) printf('<div class="ftr-addr ftr-details-col"><span>%s <br><a href="tel:%s">%s</a></span></div>', __('Magazijn 50-52', 'terrav'), $gmaplink,  $adres); 
                if( !empty($telefoon) ) printf('<div class="ftr-tel ftr-details-col"><span>%s : <a href="tel:%s">%s</a></span></div>', __('Tel.', 'terrav'), phone_preg($telefoon),  $telefoon); 
                if( !empty($fax) ) printf('<div class="ftr-fax ftr-details-col"><span>%s : <a href="fax:%s">%s</a></span></div>', __('Fax', 'terrav'), phone_preg($fax),  $fax); 
                if( !empty($email) ) printf('<div class="ftr-mail ftr-details-col"><span>%s : <a href="mailto:%s">%s</a></span></div> ', __('E-mail', 'terrav'), $email, $email);  
                if( !empty($btw) ) printf('<div class="ftr-btw ftr-details-col"><span>%s: %s</span></div> ', __('BTW', 'terrav'), $btw);  
              ?>
            </div>
          </div>
          <div class="ftr-rgt">
            <?php if( !empty($slogan) ): ?>
            <div class="ftr-Slogan hide-md">
              <h5 class="ftr-Slogan-title fl-h5"><?php echo $slogan; ?></h5>
            </div>
            <?php endif; ?>
            <div class="ftr-rgt-mdl">
              <div class="ftr-menu">
              <?php 
                $fmenuOptions = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions );
              ?>
              </div>
              <div class="ftr-btn">
                <a href="<?php echo get_link_by_page_template('page-contact.php'); ?>"><span><?php _e('Contact','terrav' ); ?></span>
                  <i>
                    <svg class="msg-tel-icon" width="24" height="24" viewBox="0 0 24 24" fill="#fff">
                      <use xlink:href="#msg-tel-icon"></use> 
                    </svg>
                  </i>
                </a>
              </div>
            </div>
            <div class="ftr-details show-md">
              <?php 
                if( !empty($adres) ) printf('<div class="ftr-addr ftr-details-col"><span>%s <br><a href="tel:%s">%s</a></span></div>', __('Magazijn 50-52', 'terrav'), $gmaplink,  $adres); 
                if( !empty($telefoon) ) printf('<div class="ftr-tel ftr-details-col"><span>%s : <a href="tel:%s">%s</a></span></div>', __('Tel.', 'terrav'), phone_preg($telefoon),  $telefoon); 
                if( !empty($fax) ) printf('<div class="ftr-fax ftr-details-col"><span>%s : <a href="fax:%s">%s</a></span></div>', __('Fax', 'terrav'), phone_preg($fax),  $fax); 
                if( !empty($email) ) printf('<div class="ftr-mail ftr-details-col"><span>%s : <a href="mailto:%s">%s</a></span></div> ', __('E-mail', 'terrav'), $email, $email);  
                if( !empty($btw) ) printf('<div class="ftr-btw ftr-details-col"><span>%s: %s</span></div> ', __('BTW', 'terrav'), $btw);  
              ?>
            </div>
            <div class="ftr-btmbar">
              <div class="copyright-btm-menu-cntlr">
                <div class="ftr-copyright">
                  <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?> 
                </div>
                <div class="ftr-btm-menu">
                  <?php 
                    $copyrightmenu = array( 
                        'theme_location' => 'cbv_copyright_menu', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $copyrightmenu );
                  ?>
                </div>
              </div>
              <div class="develop-by">
                <p><?php _e('WordPress webdesign', 'terrav');?> <a target="_blank" href="#"><?php _e('door Conversal', 'terrav'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>