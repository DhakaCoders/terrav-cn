<?php
/*Template Name: Overons*/
get_header();
$thisID = get_the_ID();

?>
<section class="page-banner">
  <span class="pg-bnr-rgt-img hide-sm">
    <img src="<?php echo THEME_URI; ?>/<?php echo THEME_URI; ?>/assets/images/page-bnr-right-img.svg" alt="">
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


<?php
$showhide_intro = get_field('showhide_intro', $thisID );
if($showhide_intro): 
  $introsec = get_field('introsec', $thisID );
  if($introsec):
    $aintrosec_img_src = !empty($introsec['afbeelding'])? cbv_get_image_src( $introsec['afbeelding'] ): '';
?>
<section class="over-ons-intro-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="over-ons-intro-sec-cntlr">
            <div class="over-ons-intro-sec-left">
              <div class="over-ons-intro-des">
                <div class="over-ons-des-cntlr">
                  <?php 
                  if( !empty($introsec['top_titel']) ):  
                  ?>
                  <h3 class="fl-h6 color-green over-ons-des-title">
                    <svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                    <use xlink:href="#equal-icon"></use> 
                    </svg>
                    <?php printf( '%s', $introsec['top_titel'] );  ?>
                  </h3>
                  <?php endif; 
                    if( !empty($introsec['titel']) ) printf( '<h2 class="fl-h1 over-ons-des-heading">%s</h2>', $introsec['titel'] ); 
                    if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] );
                  ?>
                  <div class="over-ons-intro-button">
                    <?php 
                    $introseclink1 = $introsec['knop_1'];
                    $introseclink2 = $introsec['knop_2'];
                    if( is_array( $introseclink1 ) &&  !empty( $introseclink1['url'] ) ){
                        printf('<a class="fl-btn btn-bg-green" href="%s" target="%s">%s</a>', $introseclink1['url'], $introseclink1['target'], $introseclink1['title']); 
                    }
                    if( is_array( $introseclink2 ) &&  !empty( $introseclink2['url'] ) ){
                        printf('<a class="fl-btn" href="%s" target="%s">%s</a>', $introseclink2['url'], $introseclink2['target'], $introseclink2['title']); 
                    }

                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="over-ons-intro-sec-right">
              <div class="over-ons-intro-sec-img">
                <div class="over-ons-img inline-bg" style="background-image: url(<?php echo $aintrosec_img_src; ?>);">
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

<section class="strong-professional-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="strong-professional-sec-cntlr">
          <div class="professional-title">
            <h2 class="fl-h4 professional-heading">Een groep sterke professionals</h2>
          </div>
          <div class="professional-team-logo">
            <ul class="ulc reset-list">
              <li>
                <div class="prfnl-tm-logo">
                  <i>
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/prfnl-logo-1.png" alt="">
                  </a>
                  </i>
                </div>
              </li>
                <li>
                  <div class="prfnl-tm-logo">
                    <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/prfnl-logo-2.png" alt="">
                    </i>
                  </div>
                </li>
                <li>
                  <div class="prfnl-tm-logo">
                    <i>
                      <a href="#">
                        <img src="<?php echo THEME_URI; ?>/assets/images/prfnl-logo-3.png" alt="">
                      </a>
                    </i>
                  </div>
                </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$showhide_afbeelding_beschrijving = get_field('showhide_afbeelding_beschrijving', $thisID );
if($showhide_afbeelding_beschrijving): 
  $afbeelding_beschrijving_sec = get_field('afbeelding_beschrijving_sec', $thisID );
  if($afbeelding_beschrijving_sec):
    $ab_src = !empty($afbeelding_beschrijving_sec['afbeelding'])? cbv_get_image_src( $afbeelding_beschrijving_sec['afbeelding'] ): '';
?>
<section class="over-ons-lftimg-rgtdes-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-lftimg-rgtdes-sec-cntlr">

        <div class="fl-dft-lftimg-rgtdes clearfix">
          <div class="fl-dft-lftimg-rgtdes-lft over-ons-lftimg-rgtdes-sec-lft">
            <div class="inline-bg" style="background-image: url(<?php echo $ab_src; ?>);"></div>
            <?php echo !empty($afbeelding_beschrijving_sec['afbeelding'])? cbv_get_image_tag($afbeelding_beschrijving_sec['afbeelding']):''; ?>
          </div>
          <div class="fl-dft-lftimg-rgtdes-rgt over-ons-lftimg-rgtdes-sec-rgt">
            <?php  
              if( !empty($afbeelding_beschrijving_sec['titel']) ) printf( '<h2 class="fl-h1">%s</h2>', $afbeelding_beschrijving_sec['titel'] ); 
              if( !empty($afbeelding_beschrijving_sec['beschrijving']) ) echo wpautop( $afbeelding_beschrijving_sec['beschrijving'] );
            ?>
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
$showhide_cta = get_field('showhide_cta', $thisID );
if($showhide_cta): 
  $ctasec = get_field('ctasec', $thisID );
  if($ctasec):
?>
<section class="over-ons-cta-module-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-module-ctlr">
          <div class="cta-module">
            <div class="cta-module-inr">
              <div class="cta-module-lft">
                <?php 
                if( !empty($ctasec['top_titel']) ):  
                ?>
                <h4 class="cta-module-sub-title fl-h6">
                  <?php printf( '%s', $ctasec['top_titel'] );  ?>
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/white-2lines.svg"></i>
                </h4>
                <?php endif; 
                  if( !empty($ctasec['titel']) ) printf( '<h2 class="cta-module-title fl-h1">%s</h2>', $ctasec['titel'] ); 
                  if( !empty($ctasec['beschrijving']) ) echo wpautop( $ctasec['beschrijving'] );
                ?>
              </div>
              <div class="cta-module-rgt">
                 <?php 
                    $ctaseclink = $ctasec['knop'];
                    if( is_array( $ctaseclink ) &&  !empty( $ctaseclink['url'] ) ){
                        printf('<div class="cta-module-btn"><a href="%s" target="%s">%s</a></div>', $ctaseclink['url'], $ctaseclink['target'], $ctaseclink['title']); 
                    }
                ?>
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
$showhide_certificaten = get_field('showhide_certificaten', $thisID );
if($showhide_certificaten): 
  $certificaten_sec = get_field('certificaten_sec', $thisID );
  if($certificaten_sec):
?>
<section class="certificates-guarantee-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="certificates-guarantee-cntlr">
          <div class="certificates-guarantee-title">
            <?php  
              if( !empty($certificaten_sec['titel']) ) printf( '<h2 class="fl-h2 certificates-guarantee-heading">%s</h2>', $certificaten_sec['titel'] ); 
            ?>
          </div>
          <?php 
              $certificaten = $certificaten_sec['certificaten'];
              if( $certificaten ):
          ?>
          <div class="certificates-guarantee-grd">
            <ul class="reset-list">
              <?php foreach( $certificaten as $certificate ): ?>
              <li>
                <div class="certificates-guarantee-grd-item">
                  <div class="certificates-guarantee-log">
                    <?php echo !empty($certificate['afbeelding'])? cbv_get_image_tag($certificate['afbeelding']):''; ?>
                  </div>
                  <div class="certificates-guarantee-des">
                    <?php 
                        if( !empty($certificate['titel']) ) printf( '<h3 class="fl-h6 certificates-guarantee-des-title">%s</h3>', $certificate['titel'] );
                        if( !empty($certificate['beschrijving']) ) echo wpautop( $certificate['beschrijving'] );
                    ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php
$showhide_historiek = get_field('showhide_historiek', $thisID );
if($showhide_historiek): 
  $historiek_sec = get_field('historiek_sec', $thisID );
  if($historiek_sec):
    $afbeelding_src = !empty($historiek_sec['afbeelding'])? cbv_get_image_src( $historiek_sec['afbeelding'] ): '';
?>
<section class="over-ons-history-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-history-sec-cntlr">
          <div class="over-ons-intro-sec-left over-ons-history-sec-left">
              <div class="over-ons-intro-des over-ons-history-sec-des">
                <div class="over-ons-des-cntlr over-ons-history-des-cntlr">
                  <?php 
                  if( !empty($historiek_sec['titel']) ):  
                  ?>
                  <h3 class="fl-h6 color-green over-ons-history-des-title over-ons-des-title">
                    <svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                    <use xlink:href="#equal-icon"></use> 
                    </svg>
                    <?php printf( '%s', $historiek_sec['titel'] );  ?>
                  </h3>
                  <?php endif; 
                    if( !empty($historiek_sec['ondertitel']) ) printf( '<h2 class="fl-h2 over-ons-history-des-heading">%s</h2>', $historiek_sec['ondertitel'] );
                    if( !empty($historiek_sec['beschrijving']) ) echo wpautop( $historiek_sec['beschrijving'] );
                  ?>

                  <?php 
                      $historiek = $historiek_sec['historiek'];
                      if( $historiek ):
                  ?>
                  <ul>
                    <?php foreach( $historiek as $historiek ): ?>
                    <li class="wow fadeInUp delay-1" >
                      <?php
                        if( !empty($historiek['jaar']) ) printf( '<span>%s:</span>', $historiek['jaar'] );
                        if( !empty($historiek['titel']) ) printf( '%s', $historiek['titel'] );
                      ?>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="over-ons-intro-sec-right over-ons-history-sec-righ">
              <div class="over-ons-intro-sec-img">
                <div class="over-ons-img inline-bg" style="background-image: url(<?php echo $afbeelding_src; ?>);">
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
<?php get_footer(); ?>