<?php
get_header();
$pageID = get_id_by_page_template('page-product.php');
$prodterms = get_the_terms(get_the_ID(), 'product_cat');
$prodtermName = '';
if( !empty($prodterms) ){
  foreach( $prodterms as $prodterm ){
    $prodtermName = $prodterm->name;
  }
}
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

<section class="over-ons-lftimg-rgtdes-sec prdct-pgni-dtls-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-lftimg-rgtdes-sec-cntlr prdct-pgni-dtls-sec-cntlr">

        <div class="fl-dft-lftimg-rgtdes clearfix">
          <div class="fl-dft-lftimg-rgtdes-lft over-ons-lftimg-rgtdes-sec-lft">
            <div class="inline-bg hide-sm" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/prdct-pagni-dtls-img.jpg);"></div>
            <div class="inline-bg show-sm" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/over-ons-intro-img.jpg);"></div>
            <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-12.jpg">
          </div>
          <div class="fl-dft-lftimg-rgtdes-rgt over-ons-lftimg-rgtdes-sec-rgt">
            <?php if( !empty($prodtermName) ): ?>
            <h3 class="fl-h6 prdct-pgni-dtls-sec-title over-ons-des-title"><svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                  <use xlink:href="#equal-icon"></use> </svg><?php echo $prodtermName; ?></h3>
            <?php endif; ?>
            <h2 class="fl-h1"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>

        </div>  
      </div>
    </div>
  </div>
</section>
<?php $usps = get_field('usps', get_the_ID()); ?>
<section class="trv-service-grid-sec pdct-pgni-trv-service-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="trv-service-grids-cntlr">
          <div class="sec-entry-hdr-des-cntlr text-align-left">
            <div class="sec-entry-hdr">
              <h3 class="fl-h6 sec-entry-hdr-sub-title">
                <span><?php _e('Advantages of', 'terrav'); ?></span>
                <i>
                  <svg class="green-2lines" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                    <use xlink:href="#green-2lines"></use> 
                  </svg>
                </i>
              </h3>
              <h2 class="fl-h1 sec-entry-hdr-title"><?php the_title(); ?></h2>
            </div>
          </div>
          <?php if( $usps ): ?>
          <div class="pdct-pgni-trv-service-grids PdctPgniSlider">

            <?php $i = 1; foreach( $usps as $usp ): ?>
            <div class="pdct-pgni-trv-service-grids-item">
              <div class="trv-service-grid-item-cntlr">
                <div class="trv-service-grid-item">
                  <div class="trv-service-grid-item-inner">
                    <div class="trv-service-grid-img-cntlr has-inline-bg">
                      <div class="inline-bg service-grid-img" style="background-image: url(<?php echo !empty($usp['afbeelding'])? cbv_get_image_src($usp['afbeelding']):''; ?>);"></div>
                      <?php echo !empty($usp['afbeelding'])? cbv_get_image_tag($usp['afbeelding']):''; ?>
                    </div>
                    <div class="trv-service-grid-des">
                      <div class="trv-svic-grid-des-top-2line">
                        <i>
                          <svg class="svic-grid-2line" width="41" height="44" viewBox="0 0 41 44" fill="#E83747">
                            <use xlink:href="#svic-grid-2line"></use> 
                          </svg>
                        </i>
                      </div>
                      <?php 
                        if( !empty($usp['titel']) ) printf('<h4 class="fl-h6 trv-service-grid-title">%s</h4>', $usp['titel']);
                        if( !empty($usp['beschrijving']) ) echo wpautop($usp['beschrijving']);
                      ?>
                    </div>
                  </div>
                  <div class="trv-svic-grid-des-btm-cunt-nmbr">
                    <h3 class="fl-h1 svic-grid-cunt-nmbr"><?php echo num_format($i); ?>.</h3>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $slugs = array();
  if( !empty($prodterms) ){
    foreach( $prodterms as $prodterm ){
      $slugs[] = $prodterm->slug;
    }
    $Query = new WP_Query(array(
    'post_type' => 'product',
    'posts_per_page'=> 3,
    'post__not_in' => array(get_the_ID()),
    'orderby' => 'date',
    'order'=> 'asc',
    'tax_query' => array(
      array(
        'taxonomy' => 'product_cat',
          'field'    => 'slug',
          'terms'    => $slugs,
      )
    )

  ));
if( $Query->have_posts() ): 
$relatedText = get_field('tekst', 'options'); ?>
<section class="related-products-sec product-category">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="related-products-sec-cntlr">
          <div class="related-products-sec-entry-hdr">
            <div class="sec-entry-hdr-des-cntlr">
              <div class="sec-entry-hdr">
              <h2 class="fl-h1 sec-entry-hdr-title hide-sm"><?php _e('Gerelateerde Producten', 'terrav'); ?></h2>
              <h2 class="fl-h1 sec-entry-hdr-title show-sm"><?php _e('Onze sterke merken.', 'terrav'); ?></h2>
              </div>
              <?php if( !empty($relatedText) ): ?>
              <div class="sec-entry-desc">
              <?php echo wpautop( $relatedText ); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="tv-products-cntlr">
            <div class="tv-products-grid FlProductSlider">
              <?php 
                while($Query->have_posts()): $Query->the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): product_placeholder('tag');
              ?>
              <div class="tv-products-grid-item">
                <div class="tv-product-grd">
                  <div class="tv-product-grd-inr">
                    <div class="tv-pro-grd-img-cntlr">
                      <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                      <?php echo $imgtag; ?>
                    </div>
                    <div class="tv-pro-grd-des mHc2">
                      <h3 class="fl-h5 tv-pro-grd-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="fl-pro-grd-btn">
                      <a class="fl-info-btn" href="<?php the_permalink(); ?>">
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
              <?php endwhile; ?>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); } ?>
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>