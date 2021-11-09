<?php 
  $cta = get_field('cta', 'options'); 
  if( $cta ):
?>
<section class="footer-top-cta-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-cta-cntlr">
          <div class="footer-top-cta-desc-cntlr">
            <div class="desc-entry-sun-hdr">
              <h3 class="fl-h6 footer-top-cta-desc-sub-title entry-sub-title">
                <?php if( !empty($cta['top_titel']) ) printf('<span>%s</span>', $cta['top_titel']); ?>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/white-2lines.svg" alt=""></i>
              </h3>
            </div>
            <?php if( !empty($cta['titel']) ) printf('<h2 class="fl-h1 footer-top-cta-title">%s</h2>', $cta['titel']); ?>
            <div class="footer-top-cta-desc">
              <?php if( !empty($cta['beschrijving']) ) echo wpautop($cta['beschrijving']); ?>
            </div>
          </div>
          <?php 
            $contlink = $cta['knop'];
            if( is_array( $contlink ) &&  !empty( $contlink['url'] ) ){
                printf('<div class="footer-top-cta-btn"><a class="fl-btn" href="%s" target="%s">%s</a></div>', $contlink['url'], $contlink['target'], $contlink['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>