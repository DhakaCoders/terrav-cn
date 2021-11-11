<?php
/*Template Name: Dienst*/
get_header();
$thisID = get_the_ID();
$top_titel = get_field('top_titel', $thisID);
$titel = get_field('titel', $thisID);
$beschrijving = get_field('beschrijving', $thisID);
$afbeelding = get_field('afbeelding', $thisID);
$vdoafbeelding = !empty($afbeelding)? cbv_get_image_src( $afbeelding ): '';
$video_url = get_field('video_url', $thisID);
?>

<section class="page-banner">
  <span class="pg-bnr-rgt-img hide-sm">
    <img src="<?php echo THEME_URI; ?>/assets/images/page-bnr-right-img.svg" alt="">
  </span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-banner-cntlr">
          <h1 class="fl-h1 page-banner-title"><?php the_title(); ?></h1>
          <div class="breadcrumb-cntlr hide-sm">
            <ul class="reset-list clearfix">
              <li class="home">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <span class="item"><?php _e('Home', 'terrav'); ?></span>
                </a>
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



<section class="service-sec-cntlr">
  <div class="trv-service-intro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="trv-service-con-cntlr">
            <div class="trv-service-intro-cntlr">
              <div class="sec-entry-hdr-des-cntlr">
                <div class="sec-entry-hdr">
                  <h2 class="fl-h6 sec-entry-hdr-sub-title">
                    <?php if( !empty($top_titel) ) printf( '<span>%s</span>', $top_titel );  ?>
                    <i>
                      <svg class="green-2lines" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                        <use xlink:href="#green-2lines"></use> 
                      </svg>
                    </i>
                  </h2>
                <?php if( !empty($titel) ) printf( '<h3 class="fl-h2 sec-entry-hdr-title">%s</h3>', $titel ); ?>
                </div>
                <div class="sec-entry-desc">
                	<?php if( !empty($beschrijving) ) echo wpautop( $beschrijving ); ?>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
  $dienstobj = get_field('select_dienst', $thisID);
  if( empty($dienstobj) ){
    $dienstobj = get_posts( array(
      'post_type' => 'dienst',
      'posts_per_page'=> 5,
      'orderby' => 'date',
      'order'=> 'desc'
    ) );
  }
  if($dienstobj){ 
?>
  <div class="trv-service-grid-sec">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="trv-service-grids-cntlr">
            <ul class="">
              <?php 
              //delete_metadata( 'dienst', 0, '_inhoud', '', true );
                $i = 1;
                foreach( $dienstobj as $dienst ){ 
                $dienID = get_post_thumbnail_id($dienst->ID);
                $dien_tag = !empty($dienID)? cbv_get_image_tag($dienID): dienst_placeholder('tag');
                $dien_src = !empty($dienID)? cbv_get_image_src($dienID): dienst_placeholder();
              ?>
              <li>
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
                    <div class="trv-svic-grid-des-btm-cunt-nmbr">
                      <h3 class="fl-h1 svic-grid-cunt-nmbr"><?php echo num_format($i); ?>.</h3>
                    </div>
                  </div>
                </div>
              </li>
              <?php $i++; } ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</section>


<?php if( !empty($vdoafbeelding) ): ?>
<section class="trv-service-fancy-video-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="trv-service-fancy-cntlr">
          <div class="fl-fancy-module">
            <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $vdoafbeelding; ?>);"></div>
            <?php if( !empty($video_url) ): ?>
            <a class="overlay-link" data-fancybox="" href="<?php  echo $video_url; ?>"></a>
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
</section>
<?php endif; ?>
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>