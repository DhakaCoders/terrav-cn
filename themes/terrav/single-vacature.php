<?php
get_header();
$thisID = get_the_ID();
$pageID = get_id_by_page_template('page-vacature.php');
?>
<section class="page-banner">
  <span class="pg-bnr-rgt-img hide-sm">
    <img src="<?php echo THEME_URI; ?>/assets/images/page-bnr-right-img.svg" alt="">
  </span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-banner-cntlr">
          <h1 class="fl-h1 page-banner-title"><?php echo get_the_title($pageID); ?></h1>
          <div class="breadcrumb-cntlr hide-sm">
            <ul class="reset-list clearfix">
              <li class="home">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <span class="item"><?php _e('Home', 'terrav'); ?></span>
                </a>
              </li>
              <li class="active">
                <a href="<?php echo get_the_permalink($pageID); ?>"><span><?php echo get_the_title($pageID); ?></span></a>
              </li>
              <li class="active">
                <span><?php echo the_title(); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vacature-details-con">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="vacature-details-con-cntlr">
          <div class="vacature-details-con-lft">
            <article class="default-page-con" id="vacature-details"> 
              <div class="block">
                <div class="dfp-promo-module">                
                  <div class="dfp-promo-module-des-ctlr">
                    <div class="dfp-date-module">
                      <span>
                        <?php echo the_date('d/m/Y'); ?>
                      </span>
                    </div>
                    <div class="dfp-promo-module-des">
                      <strong class="dfp-promo-module-title fl-h2"><?php the_title(); ?></strong>
                    </div>
                    <?php 
                      $jobtype = get_field('job_type', $thisID);
                      $adres = get_field('adres', $thisID);
                      if( !empty($jobtype) || !empty($adres) ){ 
                    ?>
                    <div class="dfp-time-module">
                      <span class="full-time"><?php printf('%s', $jobtype); printf(' / %s', $adres); ?></span>
                    </div>
                    <?php } ?>
                    <div class="dfp-social-media-select-module">
                      <div class="vacature-details-rgt-con-btn-cntlr hide-md">
                        <a href="#" class="vacature-detail-btn scrollto2" data-to="#dfp-form-module">
                          <span><?php _e('solliciteren?', 'terrav'); ?></span>       
                        </a>
                      </div>
                      <div class="dfp-social-media-module">
                        <span>Delen op:</span>
                        <div class="dfp-social-media">
                          <ul class="reset-list">
                            <li>
                              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                                <i class="fab fa-facebook-f"></i>
                              </a>
                            </li>
                            <li>
                              <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
                                <i class="fab fa-twitter"></i>
                              </a>
                            </li>
                            <li>
                              <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">
                                <i class="fab fa-linkedin-in"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <?php if( have_rows('inhoud') ){  
                while ( have_rows('inhoud') ) : the_row();  
              ?>
              <?php 
                if( get_row_layout() == 'blok_afbeelding' ){ 
                $fcafbeelding = get_sub_field('fc_afbeelding');
                $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
              ?>
              <div class="block">
                <div class="dfp-promo-module">
                  <div class="dfp-plate-one-img-bx">
                    <?php echo $affbeelding_tag; ?>
                  </div>
                </div>
              </div>
              <?php 
              }elseif( get_row_layout() == 'teksteditor' ){ 
              $fc_tekst = get_sub_field('fc_teksteditor');
              ?>
              <div class="block">
                <div class="dfp-text-module">
                  <?php if( !empty($fc_tekst) ) echo wpautop($fc_tekst); ?>
                </div>
              </div>
              <?php 
              }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = cbv_get_image_src($fc_afbeelding);
              $imgtag = cbv_get_image_tag($fc_afbeelding);
              $fc_tekst = get_sub_field('fc_tekst');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
              ?>
              <div class="block">
                <div class="fl-dft-overflow-module">
                  <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
                    <div class="fl-dft-lftimg-rgtdes-lft">
                      <div class="inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                      <?php echo $imgtag; ?>
                    </div>
                    <div class="fl-dft-lftimg-rgtdes-rgt">
                      <?php echo wpautop($fc_tekst); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php }elseif( get_row_layout() == 'afbeelding_afbeelding' ){ 
                $fc_titel = get_sub_field('fc_titel');
                $fc_tekst = get_sub_field('fc_tekst');
                $afbeelding_1 = get_sub_field('fc_afbeelding_1');
                $afbeelding_2 = get_sub_field('fc_afbeelding_2');
              ?>
              <div class="block">
                <div class="dfp-top-gallery">
                  <div class="dfp-gallery-module">
                    <div class="gallery-wrap has-inline-bg clearfix">
                      <?php 
                        if( !empty($fc_titel) ) printf('<h3>%s</h3>', $fc_titel); 
                        if( !empty($fc_tekst) ) echo wpautop($fc_tekst); 
                      ?>
                      <div class="gallery gallery-columns-2 gallerySlider">
                        <?php if( !empty($afbeelding_1) ): ?>
                        <figure class="gallery-item">
                          <div class="gallery-icon portrait">
                            <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_1); ?>');"></div>
                            <?php echo cbv_get_image_tag($afbeelding_1); ?>
                          </div>
                        </figure>
                        <?php endif; ?>
                        <?php if( !empty($afbeelding_2) ): ?>
                        <figure class="gallery-item">
                          <div class="gallery-icon portrait">
                            <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding_2); ?>');"></div>
                            <?php echo cbv_get_image_tag($afbeelding_2); ?>
                          </div>
                        </figure>
                        <?php endif; ?>
                      </div>
                    </div>                      
                  </div>
                </div>
              </div>
              <?php } ?>
              <?php
                endwhile;
                } 
                $vacature_form = get_field('vacatureform', 'options');
                if( $vacature_form ):
               ?>
              <div class="block" id="dfp-form-module">
                <div class="dfp-form-module" id="vacature_url" data-url="<?php the_permalink(); ?>">
                  <div class="vatur-details-con-cntlr">
                    <div class="sec-entry-hdr-des-cntlr text-align-left text-white">
                      <div class="sec-entry-hdr">
                        <h2 class="fl-h6 sec-entry-hdr-sub-title">
                          <?php if( !empty($vacature_form['top_titel']) ) printf('<span>%s</span>', $vacature_form['top_titel']); ?>
                          <i>
                            <svg class="green-2lines" width="28" height="31" viewBox="0 0 28 31" fill="#ffffff">
                              <use xlink:href="#green-2lines"></use> 
                            </svg>
                          </i>
                        </h2>
                        <?php if( !empty($vacature_form['titel']) ) printf('<h3 class="fl-h1 sec-entry-hdr-title">%s</h3>', $vacature_form['titel']); ?>
                      </div>
                      <div class="sec-entry-desc">
                        <?php if( !empty($vacature_form['beschrijving']) ) echo wpautop($vacature_form['beschrijving']); ?>
                      </div>
                    </div>
                    <div class="vatur-details-form-cntlr">
                      <div class="contact-form-wrp clearfix">
                        <div class="wpforms-container">
                          <?php if( !empty($vacature_form['shortcode']) ) echo do_shortcode($vacature_form['shortcode']); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </article>
          </div>
          <?php 
            $ex_lavel = get_field('experience_level', $thisID); 
            $offer = get_field('offer', $thisID); 
          ?>
          <div class="vacature-details-con-rgt hide-sm">
            <div id="customSidebarWrap">
              <div id="customSidebar">
                <div class="vacature-details-con-rgt-inner">
                  <div class="vacature-details-rgt-con-cntlr">
                    <div class="vacature-details-rgt-col">
                      <h6><?php _e('Ervaringsniveau.', 'terrav'); ?></h6>
                      <?php if( !empty($ex_lavel) ) echo wpautop($ex_lavel); ?>
                    </div>
                    <div class="vacature-details-rgt-col">
                      <h6><?php _e('Aanbod.', 'terrav'); ?></h6>
                      <?php if( !empty($offer) ) echo wpautop($offer); ?>
                    </div>
                  </div>
                  <div class="vacature-details-rgt-con-btn-cntlr hide-md">
                    <a href="#" class="vacature-detail-btn rgt-btn scrollto2" data-to="#dfp-form-module">
                      <span><?php _e('solliciteren?', 'terrav'); ?></span>       
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>