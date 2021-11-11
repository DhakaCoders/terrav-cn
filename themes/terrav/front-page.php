<?php 
get_header(); 
$hbanner = get_field('home_banner', HOMEID);
if($hbanner):
  $banner = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'] ): '';
  $banner_xs = !empty($hbanner['mobiel_afbeelding'])? cbv_get_image_src( $hbanner['mobiel_afbeelding'] ): '';
  $hasvideo = !empty($hbanner['ogg_video']) || !empty($hbanner['mp4_video'])? true:false;
?>
<section class="hm-banner <?php echo $hasvideo?' has-video':''; ?>"><!--  has-video -->
    <div class="hm-bnr-down-scroll scrollto" data-to="#hm-process-sec">
      <div class="hm-bnr-down-scroll-icon-brder">
        <span class="hm-bnr-down-scroll-text">SCROOL</span>
        <span class="hm-bnr-down-scroll-icon">
          <svg class="bnr-arrow-icon UpdownAnimate" width="13" height="14" viewBox="0 0 13 14" fill="#F4A302">
          <use xlink:href="#bnr-arrow-icon"></use> </svg>
        </span>
      </div>
    </div>
    <div class="hm-banner-bg-black"></div>
    <?php 
    if( $hasvideo ): 
      $video_urlmp4 = $hbanner['mp4_video'];
      $video_urlogg = $hbanner['ogg_video'];
    ?>
    <div class="hm-video-cntlr">
      <video id="bnr-vdo" autoplay muted loop>
        <?php if( !empty($video_urlogg)){ ?>
        <source src="<?php echo $video_urlogg; ?>" type="video/ogg">
        <?php } 
        if( !empty($video_urlmp4)){
        ?>
        <source src="<?php echo $video_urlmp4; ?>" type="video/mp4">
        <?php } ?>
      </video>
    </div>
    <?php endif; ?>
    <div class="hm-banner-bg inline-bg hide-xs" style="background:url(<?php echo $banner; ?>);">
    </div>
    <div class="hm-banner-bg inline-bg show-xs" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/hm-banner-xs-bg.jpg');">
    </div>
    <!-- <div class="hm-banner-bg-overlay"></div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-banner-desc-cntlr">
            <div class="hm-bnr-desc">
              <?php 
                if( !empty($hbanner['top_titel']) ) printf( '<h2 class="fl-h4 hm-bnr-title-1">%s</h2>', $hbanner['top_titel'] ); 
                if( !empty($hbanner['titel']) ) printf( '<h1 class="fl-h1-72 hm-bnr-title-2">%s</h1>', $hbanner['titel'] ); 
                if( !empty($hbanner['subtitel']) ) printf( '<h3 class="fl-h4 hm-bnr-title-3">%s</h3>', $hbanner['subtitel'] ); 
                if( !empty($hbanner['beschrijving']) ) echo wpautop( $hbanner['beschrijving'] );

                $hbannerlink = $hbanner['knop'];
                if( is_array( $hbannerlink ) &&  !empty( $hbannerlink['url'] ) ){
                    printf('<div class="hm-bnr-btn"><a class="fl-btn btn-bg-pink" href="%s" target="%s">%s</a></div>', $hbannerlink['url'], $hbannerlink['target'], $hbannerlink['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>    
</section>
<?php endif; ?>

<?php
$showhidedienst = get_field('showhidedienst', HOMEID);
if($showhidedienst): 
  $dienstsec = get_field('dienstsec', HOMEID);
  if($dienstsec):
?>

<section class="hm-process-sec" id="hm-process-sec">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">
         <div class="hm-process-entry-hdr-sec">
            <div class="sec-entry-hdr-des-cntlr">
              <div class="sec-entry-hdr">
                <?php 
                if( !empty($dienstsec['top_titel']) ):  
                ?>
                <h3 class="fl-h6 sec-entry-hdr-sub-title">
                  <?php printf( '%s', $dienstsec['top_titel'] );  ?>
                  <i>
                    <svg class="green-2lines" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                      <use xlink:href="#green-2lines"></use> 
                    </svg>
                  </i>
                </h3>
                <?php endif; 
                  if( !empty($dienstsec['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $dienstsec['titel'] ); 
                ?>
              </div>
              <div class="sec-entry-desc">
                <?php if( !empty($dienstsec['beschrijving']) ) echo wpautop( $dienstsec['beschrijving'] ); ?>
              </div>
            </div>
         </div>
      </div>
      <?php 
          $dienstobj = get_posts( array(
            'post_type' => 'dienst',
            'posts_per_page'=> 5,
            'orderby' => 'date',
            'order'=> 'desc'
          ) );
          if($dienstobj){ 
      ?>
      <div class="col-md-12">
          <div class="hm-process-grids-cntlr hmProcessSlider">
              <?php 
                $i = 1;
                foreach( $dienstobj as $dienst ){ 
                $dienID = get_post_thumbnail_id($dienst->ID);
                $dien_tag = !empty($dienID)? cbv_get_image_tag($dienID): dienst_placeholder('tag');
                $dien_src = !empty($dienID)? cbv_get_image_src($dienID): dienst_placeholder();
              ?>
              <div class="hm-process-grid-item">
                <div class="trv-service-grid-item-cntlr">
                  <div class="top-lft-bdr"></div>
                  <div class="top-rgt-bdr"></div>

                  <div class="trv-service-grid-item">
                    <div class="trv-service-grid-item-inner">
                      <div class="trv-service-grid-img-cntlr has-inline-bg">
                        <a class="overlay-link" href="<?php echo get_the_permalink($dienst->ID); ?>"></a>
                        <div class="inline-bg service-grid-img" style="background-image: url(<?php echo $dien_src; ?>);"></div>
                        <?php echo $dien_tag; ?>
                      </div>
                      <div class="trv-service-grid-des">
                        <div class="trv-svic-grid-des-top-2line">
                          <i>
                            <svg class="Svic-grid-2line" width="41" height="44" viewBox="0 0 41 44" fill="#E83747">
                              <use xlink:href="#Svic-grid-2line"></use> 
                            </svg>
                          </i>
                        </div>
                        <h4 class="fl-h6 trv-service-grid-title"><a href="<?php echo get_the_permalink($dienst->ID); ?>"><?php echo get_the_title($dienst->ID); ?></a></h4>
                        <?php echo wpautop($dienst->post_excerpt); ?>
                        <div class="trv-service-grid-btn">
                          <a class="fl-info-btn" href="<?php echo get_the_permalink($dienst->ID); ?>">
                            <span><?php _e('meer info', 'terrav'); ?></span>
                            <i>
                              <svg class="info-arow" width="8" height="12" viewBox="0 0 8 12" fill="#4F7F35">
                                <use xlink:href="#info-arow"></use> 
                              </svg>
                            </i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="trv-svic-grid-des-btm-cunt-nmbr">
                      <h3 class="fl-h1 svic-grid-cunt-nmbr"><?php echo num_format($i); ?>.</h3>
                    </div>
                  </div>
                </div>
              </div>
              <?php $i++; } ?>
           </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
$showhide_overons = get_field('showhide_overons', HOMEID);
if($showhide_overons): 
  $hoverons = get_field('hoverons', HOMEID);
  if($hoverons):
?>
<section class="hm-over-ons-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="over-ons-intro-sec-cntlr">
            <div class="over-ons-intro-sec-left">
              <div class="over-ons-intro-des">
                <div class="over-ons-des-cntlr">
                  <?php 
                  if( !empty($hoverons['top_titel']) ):  
                  ?>
                  <h3 class="fl-h6 color-green over-ons-des-title">
                    <svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                    <use xlink:href="#equal-icon"></use> 
                    </svg>
                    <?php printf( '%s', $hoverons['top_titel'] );  ?>
                  </h3>
                  <?php endif; 
                    if( !empty($hoverons['titel']) ) printf( '<h2 class="fl-h1 over-ons-des-heading">%s</h2>', $hoverons['titel'] );
                    if( !empty($hoverons['beschrijving']) ) echo wpautop( $hoverons['beschrijving'] );
                  ?>
                  <div class="over-ons-intro-button">
                    <?php 
                    $hoveronslink1 = $hoverons['knop_1'];
                    $hoveronslink2 = $hoverons['knop_2'];
                    if( is_array( $hoveronslink1 ) &&  !empty( $hoveronslink1['url'] ) ){
                        printf('<a class="fl-btn btn-bg-green" href="%s" target="%s">%s</a>', $hoveronslink1['url'], $hoveronslink1['target'], $hoveronslink1['title']); 
                    }
                    if( is_array( $hoveronslink2 ) &&  !empty( $hoveronslink2['url'] ) ){
                        printf('<a class="fl-btn" href="%s" target="%s">%s</a>', $hoveronslink2['url'], $hoveronslink2['target'], $hoveronslink2['title']); 
                    }

                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="over-ons-intro-sec-right">
              <?php 
                $hoverons_fea_img = !empty($hoverons['afbeelding'])? cbv_get_image_src( $hoverons['afbeelding'] ): '';
              ?>
              <div class="over-ons-intro-sec-img">
                <div class="over-ons-img inline-bg" style="background-image: url(<?php echo $hoverons_fea_img; ?>);">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<?php
$showhide_afbeelding = get_field('showhide_afbeelding', HOMEID);
if($showhide_afbeelding): 
  $afbeelding_sec = get_field('afbeelding', HOMEID);
  if($afbeelding_sec):
    $afbeelding_sec_fea = !empty($afbeelding_sec['afbeelding'])? cbv_get_image_src( $afbeelding_sec['afbeelding'] ): '';
?>
<section class="hm-fullwidth-bg-banner-sec">
    <div class="hm-fullwidth-bg-banner inline-bg" style="background-image: url(<?php echo $afbeelding_sec_fea; ?>);"></div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
$showhide_nieuws_vacatures = get_field('showhide_nieuws_vacatures', HOMEID);
if($showhide_nieuws_vacatures): 
?>
<section class="hm-vacatures-nieuws-sec">
    <div class="lft-grey-bg hide-sm"></div>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="hm-vacatures-nieuws-sec-cntlr">
                <?php
                  $hmvacatures = get_field('vacatures', HOMEID);
                    if($hmvacatures):
                ?>
                  <div class="hm-vacatures-innr hide-sm">
                      <?php 
                      if( !empty($hmvacatures['titel']) ):  
                      ?>
                      <h3 class="fl-h6 entry-sub-title">
                        <svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                        <use xlink:href="#equal-icon"></use> </svg>
                        <?php printf( '%s', $hmvacatures['titel'] );  ?>
                       </h3>
                      <?php endif; 
                        if( !empty($hmvacatures['sub_titel']) ) printf( '<h2 class="fl-h4 hm-vacatures-title">%s</h2>', $hmvacatures['sub_titel'] );
                      ?>
                      <div class="hm-vacatures-grids-cntlr hm-vac-nie-grids-cntlr">
                          <ul class="reset-list">
                              <li>
                                    <div class="tv-grid-modl-item mHc" style="height: 145px;">
                                      <div class="gmi-img-cntlr has-img">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="gmi-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/vo-grid-img-inr.png');"></div>
                                      </div>

                                      <div class="gmicnt-cntlr mHc1" style="height: 145px;">
                                        <span class="tv-date">03/09/2021</span>
                                        <h3 class="fl-h6 gmi-cntnt-tt  vo-gmi-cntnt-tt  mHc2" style="height: 52px;"><a href="#">Vacature Titel</a></h3>
                                        <span class="full-time">Full Time / Aalst, België</span>
                                        <div class="gmicnt-btn  hide-sm">
                                            <a class="fl-info-btn  no-fl-info-btn" href="#">
                                              <span>meer info</span>
                                              <i>
                                                <svg class="info-arow" width="8" height="12" viewBox="0 0 8 12" fill="#4F7F35">
                                                  <use xlink:href="#info-arow"></use> 
                                                </svg>
                                              </i>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                              </li>
                              <li>
                                    <div class="tv-grid-modl-item mHc" style="height: 145px;">
                                      <div class="gmi-img-cntlr has-img">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="gmi-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/vo-grid-img-inr.png');"></div>
                                      </div>

                                      <div class="gmicnt-cntlr mHc1" style="height: 145px;">
                                        <span class="tv-date">03/09/2021</span>
                                        <h3 class="fl-h6 gmi-cntnt-tt  vo-gmi-cntnt-tt  mHc2" style="height: 52px;"><a href="#">Vacature Titel</a></h3>
                                        <span class="full-time">Full Time / Aalst, België</span>
                                        <div class="gmicnt-btn  hide-sm">
                                            <a class="fl-info-btn  no-fl-info-btn" href="#">
                                              <span>meer info</span>
                                              <i>
                                                <svg class="info-arow" width="8" height="12" viewBox="0 0 8 12" fill="#4F7F35">
                                                  <use xlink:href="#info-arow"></use> 
                                                </svg>
                                              </i>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                              </li>
                          </ul>
                          <div class="hm-vacatures-btn  hm-vac-nie-btn">
                              <a class="fl-btn" href="#">meer vacatures</a>
                          </div>
                      </div>
                  </div>
                <?php endif; ?>

                <?php  $hmnieuws = get_field('nieuws', HOMEID);
                    if($hmnieuws):
                ?>
                  <div class="hm-nieuws-innr">
                      <?php 
                      if( !empty($hmnieuws['titel']) ):  
                      ?>
                      <h3 class="fl-h6 entry-sub-title">
                          <svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                          <use xlink:href="#equal-icon"></use> </svg>
                          <?php printf( '%s', $hmnieuws['titel'] );  ?>
                      </h3>
                      <?php endif; 
                        if( !empty($hmnieuws['sub_titel']) ) printf( '<h2 class="fl-h4 hm-vacatures-title">%s</h2>', $hmnieuws['sub_titel'] );
                      ?>
                      <div class="hm-vacatures-grids-cntlr hm-vac-nie-grids-cntlr">
                          <ul class="reset-list">
                              <li>
                                    <div class="tv-grid-modl-item mHc" style="height: 140px;">
                                      <div class="gmi-img-cntlr has-img">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="gmi-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/no-grid-img-01.png');"></div>
                                      </div>

                                      <div class="gmicnt-cntlr mHc1" style="height: 117px;">
                                        <span class="tv-date">02/09/2021</span>
                                        <h3 class="fl-h6 gmi-cntnt-tt  mHc2" style="height: 52px;"><a href="#">Quam eleifend iaculis aliquet bibendum dolor varius diam tellus.</a></h3>
                                        <div class="gmicnt-btn hide-sm">
                                            <a class="fl-info-btn  no-fl-info-btn" href="#">
                                              <span>Lees meer</span>
                                              <i>
                                                <svg class="info-arow" width="8" height="12" viewBox="0 0 8 12" fill="#4F7F35">
                                                  <use xlink:href="#info-arow"></use> 
                                                </svg>
                                              </i>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                              <li>
                                    <div class="tv-grid-modl-item mHc" style="height: 140px;">
                                      <div class="gmi-img-cntlr has-img">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="gmi-inline-bg  inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/no-grid-img-03.png');"></div>
                                      </div>

                                      <div class="gmicnt-cntlr mHc1" style="height: 117px;">
                                        <span class="tv-date">02/09/2021</span>
                                        <h3 class="fl-h6 gmi-cntnt-tt  mHc2" style="height: 52px;"><a href="#">Nec ante tellus elementum feugiat amet, in massa habitant. </a></h3>
                                        <div class="gmicnt-btn hide-sm">
                                            <a class="fl-info-btn  no-fl-info-btn" href="#">
                                              <span>Lees meer</span>
                                              <i>
                                                <svg class="info-arow" width="8" height="12" viewBox="0 0 8 12" fill="#4F7F35">
                                                  <use xlink:href="#info-arow"></use> 
                                                </svg>
                                              </i>
                                            </a>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                          </ul>
                          <div class="hm-vacatures-btn hm-vac-nie-btn">
                              <a class="fl-btn btn-bg-brown" href="#">meer vacatures</a>
                          </div>
                      </div>
                  </div>
                <?php endif;?>
              </div>
          </div>
      </div>
    </div>
</section>
<?php endif; ?>


<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>