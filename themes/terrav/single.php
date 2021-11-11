<?php
get_header();
$thisID = get_the_ID();
$pageID = get_id_by_page_template('page-news.php');
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
              <li>
                <a href="<?php echo get_the_permalink($pageID); ?>"><span><?php echo get_the_title($pageID); ?></span></a>
              </li>
              <li class="active">
                <span><?php the_title(); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="innerpage-con-wrap">
  <article class="default-page-con" id="nieuws-details"> 
    <div class="block">
      <div class="dfp-promo-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-promo-module-des-ctlr">
                  <div class="dfp-date-module">
                    <span>
                      <?php echo get_the_date('d/m/Y'); ?>
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/calender.svg">
                      </i>
                    </span>
                  </div>
                  <div class="dfp-promo-module-des">
                    <strong class="dfp-promo-module-title fl-h2"><?php the_title(); ?></strong>
                  </div>
                  <div class="dfp-social-media-module">
                    <span><?php _e('Delen op', 'terrav'); ?>:</span>
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
        </div>
      </div>
    </div>
    <?php while ( have_rows('inhoud') ) : the_row(); ?>
    <?php 
      if( get_row_layout() == 'introductietekst' ){ 
      $fc_tekst = get_sub_field('fc_tekst');
    ?>
    <div class="block">
      <div class="dfp-promo-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-promo-module-des">
                  <?php echo wpautop($fc_tekst); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      }elseif( get_row_layout() == 'full_afbeelding' ){ 
      $fcafbeelding = get_sub_field('fc_afbeelding');
      $affbeelding_tag = !empty($fcafbeelding)?cbv_get_image_tag($fcafbeelding):'';
    ?>
    <div class="block">
      <div class="dfp-promo-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php if( !empty($affbeelding_tag) ): ?>
              <div class="dfp-plate-one-img-bx">
                <?php echo $affbeelding_tag; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    }elseif( get_row_layout() == 'teksteditor' ){ 
    $fc_tekst = get_sub_field('fc_teksteditor');
    ?>
    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                  <?php echo wpautop($fc_tekst); ?>
              </div>
            </div>
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
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
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
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'cta' ){ 
      $fc_top_titel = get_sub_field('fc_top_titel');
      $fc_titel = get_sub_field('fc_titel');
      $fc_tekst = get_sub_field('fc_tekst');
      $fc_knop = get_sub_field('fc_knop');
    ?>
    <div class="block">
      <div class="dfp-cta-module-cntlr">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="cta-module-ctlr">
                <div class="cta-module">
                  <div class="cta-module-inr">
                    <div class="cta-module-lft">
                      <h4 class="cta-module-sub-title fl-h6">
                        <?php if( !empty($fc_top_titel) ) printf('%s', $fc_top_titel);  ?>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/cta-icon.png"></i>
                      </h4>
                      <?php 
                      if( !empty($fc_titel) ) printf('<h2 class="cta-module-title fl-h1">%s</h2>', $fc_titel); 
                      if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
                      ?>
                    </div>
                    <?php 
                      if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                        printf('<div class="cta-module-rgt"><div class="cta-module-btn"><a href="%s" target="%s">%s</a></div></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'blok_afbeelding' ){ 
      $afbeeldingen = get_sub_field('fc_afbeelding');
      $affbeelding_tag = !empty($afbeeldingen)?cbv_get_image_tag($afbeeldingen):'';
    ?>
    <div class="block">
      <div class="dfp-full-img-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                 <?php echo $affbeelding_tag; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'dienst' ){ 
        $dienstobj = get_sub_field('select_dienst');
        if( empty($dienstobj) ){
            $dienstobj = get_posts( array(
              'post_type' => 'dienst',
              'posts_per_page'=> 2,
              'orderby' => 'date',
              'order'=> 'desc',

            ) );
            
        }
    ?>
    <div class="block">
      <div class="dfp-grid-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-grid-module-cntlr">
                  <div class="pdct-pgni-trv-service-grids PdctPgniSlider2">
                   <?php 
                    foreach( $dienstobj as $dienst ):
                      $dienID = get_post_thumbnail_id($dienst->ID);
                      $dien_tag = !empty($dienID)? cbv_get_image_tag($dienID): dienst_placeholder('tag');
                      $dien_src = !empty($dienID)? cbv_get_image_src($dienID): dienst_placeholder();
                    ?>
                    <div class="pdct-pgni-trv-service-grids-item">
                      <div class="trv-service-grid-item-cntlr">
                        <div class="trv-service-grid-item">
                          <div class="trv-service-grid-item-inner">
                            <div class="trv-service-grid-img-cntlr has-inline-bg">
                              <a class="overlay-link" href="<?php echo get_the_permalink($dienst->ID); ?>"></a>
                              <div class="inline-bg service-grid-img" style="background-image: url(<?php echo $dien_src; ?>);"></div>
                              <?php echo $dien_tag; ?>
                            </div>
                            <div class="trv-service-grid-des">
                              <h2 class="fl-h6 trv-service-grid-title"><a href="<?php echo get_the_permalink($dienst->ID); ?>"><?php echo get_the_title($dienst->ID); ?></a></h2>
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
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'brand' ){ 
        $fc_titel = get_sub_field('titel');
        $brandobj = get_sub_field('select_brand');
        if( empty($brandobj) ){
            $brandobj = get_posts( array(
              'post_type' => 'brand',
              'posts_per_page'=> 3,
              'orderby' => 'date',
              'order'=> 'desc',

            ) );
            
        }

    ?>
    <div class="block">
      <div class="dfp-professional-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-professional-module-cntlr">
                  <div class="strong-professional-sec-cntlr">
                    <div class="professional-title">
                      <?php if( !empty($fc_titel) ) printf('<h3 class="fl-h4 professional-heading">%s</h3>', $fc_titel); ?>
                    </div>
                    <div class="professional-team-logo">
                      <ul class="reset-list">
                        <?php 
                        foreach( $brandobj as $brand ):
                          $brandID = get_post_thumbnail_id($brand->ID);
                          $brand_tag = !empty($brandID)? cbv_get_image_tag($brandID): '';
                        ?>
                        <li>
                          <div class="prfnl-tm-logo">
                            <i>
                                <?php echo $brand_tag; ?>
                            </i>
                          </div>
                        </li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'galerij' ){ 
      $galleries = get_sub_field('fc_afbeeldingen');
      $lightbox = get_sub_field('lightbox');
      $kolom = get_sub_field('kolom');
      if($galleries): 
    ?>
    <div class="block">
      <div class="dfp-gallery-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-wrap has-inline-bg glslider2 clearfix">
                <div class="gallery gallery-columns-3 gallerySlider2">
                  <?php foreach( $galleries as $image ): ?>
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                        <?php 
                          $imgsrc = cbv_get_image_src( $image);
                          if( $lightbox ){
                            echo "<a data-fancybox='gallery' href='{$imgsrc}'>";
                            echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                            echo cbv_get_image_tag( $image);
                            echo "</a>";
                          }else{
                            echo '<div class="gallery-icon-img inline-bg" style="background: url('.$imgsrc.');"></div>';
                            echo cbv_get_image_tag( $image);
                          }
                        ?>
                    </div>
                  </figure>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php }elseif( get_row_layout() == 'certificates_guarantee' ){ 
      $fc_titel = get_sub_field('fc_titel');
      $certificates = get_sub_field('certificates');
    ?>
    <div class="block">
      <div class="dfp-certificates-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-certificates-module-cntlr">
                <div class="certificates-guarantee-cntlr">
                  <div class="certificates-guarantee-title">
                    <?php if( !empty($fc_titel) ) printf('<h3 class="fl-h2 certificates-guarantee-heading">%s</h3>', $fc_titel); ?>
                  </div>
                  <?php if( $certificates ): ?>
                  <div class="certificates-guarantee-grd">
                    <ul class="reset-list">
                      <?php foreach( $certificates as $certif ): ?>
                      <li>
                        <div class="certificates-guarantee-grd-item">
                          <div class="certificates-guarantee-log">
                            <?php echo !empty($certif['icon'])?cbv_get_image_tag($certif['icon']):'<img src="'.THEME_URI.'/assets/images/certificates-guarantee-logo.png" alt="'.$certif['titel'].'">' ?>
                          </div>
                          <div class="certificates-guarantee-des">
                            <?php 
                            if( !empty($certif['titel']) ) printf('<h4 class="fl-h6 certificates-guarantee-des-title">%s</h4>', $certif['titel']);
                            if( !empty($certif['tekst']) ) echo wpautop($certif['tekst']); 
                            ?>
                          </div>
                        </div>
                      </li>
                    <?php endforeach;?>
                    </ul>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
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
          </div>
        </div>
      </div>
    </div>
    <?php 
    }elseif( get_row_layout() == 'volledige_afbeelding_tekst' ){ 
    $fc_afbeelding = get_sub_field('fc_afbeelding');
    $imgsrc = cbv_get_image_src($fc_afbeelding);
    $imgtag = cbv_get_image_tag($fc_afbeelding);
    $fc_tekst = get_sub_field('fc_tekst');
    $positie_afbeelding = get_sub_field('positie_afbeelding');
    $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
    ?>
    <div class="block">
      <div class="dfp-btm-lftimg-rgtdes">
        <div class="fl-dft-overflow-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
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
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'vacature' ){ 
        $vacobj = get_sub_field('select_vacature');
        if( empty($vacobj) ){
            $vacobj = get_posts( array(
              'post_type' => 'vacature',
              'posts_per_page'=> 2,
              'orderby' => 'date',
              'order'=> 'desc',
            ) );
            
        }

    ?>
    <div class="block">
      <div class="dfp-tv-grids-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-tv-grids-module-cntlr">
                  <div class="tv-grids-modl-sec-cntlr  tv-vo-grids-modl-sec-cntlr">
                    <ul class="reset-list">
                      <?php
                        foreach( $vacobj as $vac ): 
                          $vacID = get_post_thumbnail_id($vac->ID);
                          $vac_src = !empty($vacID)? cbv_get_image_src($vacID): THEME_URI.'/assets/images/vo-grid-img-inr.png';
                          $jobtype = get_field('job_type', get_the_ID());
                          $adres = get_field('adres', get_the_ID());
                      ?>
                      <li>
                        <div class="tv-grid-modl-item">
                          <div class="gmi-img-cntlr  vo-gmi-img-cntlr has-img">
                            <a href="<?php echo get_the_permalink($vac->ID); ?>" class="overlay-link"></a>
                            <div class="gmi-inline-bg  vo-gmi-inline-bg  inline-bg" style="background-image: url('<?php echo $vac_src; ?>');"></div>
                          </div>

                          <div class="gmicnt-cntlr mHc1  vo-gmicnt-cntlr">
                            <span class="tv-date"><?php echo get_the_date('d/m/Y', $vac->ID); ?></span>
                            <h3 class="fl-h6 gmi-cntnt-tt  vo-gmi-cntnt-tt  mHc2"><a href="<?php echo get_the_permalink($vac->ID); ?>"><?php echo get_the_title($vac->ID); ?></a></h3>
                            <?php if( !empty($jobtype) || !empty($adres) ){ ?>
                            <span class="full-time" ><?php printf('%s', $jobtype); printf(' / %s', $adres); ?></span>
                            <?php } ?>
                            <div class="gmicnt-btn  hide-sm">
                                <a class="fl-info-btn  no-fl-info-btn  vo-fl-info-btn" href="<?php echo get_the_permalink($vac->ID); ?>">
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
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'poster' ){     
    $poster = get_sub_field('fc_afbeeldingen');
    $video_url = get_sub_field('video_url');
    $postersrc = !empty($poster)? cbv_get_image_src($poster): '';
    ?> 
    <div class="block">
      <div class="dfp-fancy-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="fl-fancy-module" >
                <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
                <?php if( $video_url ): ?>
                <a class="overlay-link" data-fancybox href="<?php echo $video_url; ?>"></a>
                <span class="fl-video-play-cntlr">
                  <i>
                    <svg class="play-icon-svg" width="85" height="85" viewBox="0 0 85 85" fill="#fff">
                      <use xlink:href="#play-icon-svg"></use> 
                    </svg>
                  </i>
                </span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'nieuws' ){ 
        $newsobj = get_sub_field('fc_nieuws');
        if( empty($newsobj) ){
            $newsobj = get_posts( array(
              'post_type' => 'post',
              'posts_per_page'=> 2,
              'orderby' => 'date',
              'order'=> 'desc',

            ) );
            
        }

    ?>
    <div class="block">
      <div class="dfp-tv-grids-module2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-tv-grids-module2-cntlr">
                  <div class="tv-grids-modl-sec-cntlr">
                    <ul class="reset-list">
                      <?php
                        foreach( $newsobj as $news ): 
                          $newsID = get_post_thumbnail_id($news->ID);
                          $news_src = !empty($newsID)? cbv_get_image_src($newsID): news_placeholder();
                      ?>
                      <li>
                        <div class="tv-grid-modl-item">
                          <div class="gmi-img-cntlr  nov-gmi-img-cntlr has-img">
                            <a href="<?php echo get_the_permalink($news->ID); ?>" class="overlay-link"></a>
                            <div class="gmi-inline-bg  no-gmi-inline-bg inline-bg" style="background-image: url('<?php echo $news_src; ?>');"></div>
                          </div>

                          <div class="gmicnt-cntlr mHc1" style="height: 105px;">
                            <span class="tv-date"><?php echo get_the_date('d/m/Y', $news->ID); ?></span>
                            <h3 class="fl-h6 gmi-cntnt-tt  mHc2" style="height: 48px;"><a href="<?php echo get_the_permalink($news->ID); ?>"><?php echo get_the_title($news->ID); ?></a></h3>
                            <div class="gmicnt-btn hide-sm">
                                <a class="fl-info-btn" href="<?php echo get_the_permalink($news->ID); ?>">
                                  <span><?php _e('Lees meer', 'terrav'); ?></span>
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
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    }elseif( get_row_layout() == 'quote' ){ 
    $blockquote = get_sub_field('fc_tekst');
    $fc_naam = get_sub_field('fc_naam');
    ?>
    <div class="block">
      <div class="dfp-blockqoute-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-blockqoute-ctlr">
                <div class="dfp-blockqoute">
                  <blockquote>
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/blockquote-icon.png"></i>
                    <div class="dfp-blockqoute-des">
                      <?php 
                        if( !empty( $blockquote ) ) echo wpautop($blockquote); 
                        if( !empty( $fc_naam ) ) printf('<strong>%s</strong>', $fc_naam);
                      ?>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'table' ){
    $fc_table = get_sub_field('fc_tafel');
    $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
    ?>
    <div class="block">
      <div class="dfp-table-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
              <?php cbv_table($fc_table, $fc_titel); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php }elseif( get_row_layout() == 'fcknop' ){
      $fc_knop = get_sub_field('knop');
      $bg_kleur = get_sub_field('background_kleur');
      $tekst_kleur = get_sub_field('tekst_kleur');
      $border_kleur = get_sub_field('border_kleur');
      ?> 
    <div class="block">
      <div class="dfp-btn-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dfp-btn-module-inr">
                <ul class="reset-list">
                  <li>
                  <?php
                    if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                      printf('<a class="dft-fl-btn" href="%s" target="%s" data-color="%s" data-bg="%s" data-border="%s">%s</a>', $fc_knop['url'], $fc_knop['target'], $tekst_kleur, $bg_kleur, $border_kleur, $fc_knop['title']); 
                    }
                  ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'gap' ){
      $fc_gap = get_sub_field('fc_gap');
      $hide_mobile = get_sub_field('hide_mobile');
      $hide_class = $hide_mobile?' hide-sm':'';
    ?>
      <div class="gap-<?php echo $fc_gap; echo $hide_class; ?>"></div>
    <?php 
      }elseif( get_row_layout() == 'horizontal_line' ){ 
        ?>
        <div class="block">
          <div class="dfp-hr-module">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="dfp-hr-module-cntlr">
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
    <?php endwhile; ?>
    <div class="block">
      <div class="dfp-btm-social-media">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-social-media-module">
                  <span><?php _e('Delen op', 'terrav'); ?>:</span>
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
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php 
  $newsterms = get_the_terms(get_the_ID(), 'category');
  $slugs = array();
  if( !empty($newsterms) ){
    foreach( $newsterms as $newsdterm ){
      $slugs[] = $newsdterm->slug;
    }
    $Query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=> 4,
    'post__not_in' => array(get_the_ID()),
    'orderby' => 'date',
    'order'=> 'asc',
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
          'field'    => 'slug',
          'terms'    => $slugs,
      )
    )

  ));
if( $Query->have_posts() ): 
?>
    <div class="block">
      <div class="dfp-btm-grid-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3><?php _e('Gerelateerd Nieuwz', 'terrav'); ?></h3>
              <div class="tv-grids-modl-sec-cntlr">
                <ul class="reset-list">
                  <?php 
                    while($Query->have_posts()): $Query->the_post(); 
                    global $post;
                    $imgID = get_post_thumbnail_id(get_the_ID());
                    $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): news_placeholder();
                  ?>
                  <li>
                    <div class="tv-grid-modl-item">
                      <div class="gmi-img-cntlr  nov-gmi-img-cntlr has-img">
                        <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        <div class="gmi-inline-bg  no-gmi-inline-bg inline-bg" style="background-image: url('<?php echo $imgsrc; ?>');"></div>
                      </div>

                      <div class="gmicnt-cntlr mHc1" style="height: 105px;">
                        <span class="tv-date"><?php the_date('d/m/Y'); ?></span>
                        <h3 class="fl-h6 gmi-cntnt-tt  mHc2" style="height: 48px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="gmicnt-btn hide-sm">
                            <a class="fl-info-btn" href="<?php the_permalink(); ?>">
                              <span><?php _e('Lees meer', 'terrav'); ?></span>
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
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endif; wp_reset_postdata(); } ?>
  </article>
</section>
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>