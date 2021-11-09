<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$mapcode = $intro['map_code'];
$telefoon = get_field('telefoon', 'options');
$email = get_field('emailadres', 'options');
$fax = get_field('fax', 'options');
$adres = get_field('adres', 'options');
$map_url = get_field('map_url', 'options');
$gmaplink = !empty($map_url)?$map_url:'javascript:void()';
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
<section class="contact-form-sec-wrp">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="contact-form-block clearfix">
        <div class="contact-form-lft">
          <div class="contact-form-info-cntlr">
            <div class="contact-form-info">
              <div class="contact-info-details-cntlr">
                <div class="cnt-info-details-inr">
                  <h3 class="contact-form-info-title fl-h2"><?php _e('Contact Info', 'terrav'); ?></h3>
                  <div class="contact-details">
			              <?php 
		                if( !empty($adres) ) printf('<div class="cnt-addrs cnt-details-col"><span class="cnt-addrs-title">%s</span><a href="tel:%s">%s</a></div>', __('Magazijn 50-52', 'terrav'), $gmaplink,  $adres); 
		                if( !empty($telefoon) ) printf('<div class="cnt-tel cnt-details-col"><span>%s : <a href="tel:%s">%s</a></span></div>', __('Tel.', 'terrav'), phone_preg($telefoon),  $telefoon); 
		                if( !empty($fax) ) printf('<div class="cnt-fax cnt-details-col"><span>%s : <a href="fax:%s">%s</a></span></div>', __('Fax', 'terrav'), phone_preg($fax),  $fax); 
		                if( !empty($email) ) printf(' <div class="cnt-mail cnt-details-col"><span>%s : <a href="mailto:%s">%s</a></span></div> ', __('E-mail', 'terrav'), $email, $email);  
			              ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-form-rgt">
          <div class="contact-forn-con-cntlr">
            <div class="contact-form-dsc-wrp">
              <div class="contact-entry-header">
                <?php 
                	if( !empty($intro['titel']) ) printf( '<h2 class="cnt-sec-entry-hdr-title fl-h2 hide-sm">%s</h2>', $intro['titel'] ); 
                	if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                ?>
              </div>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
              	<?php if( !empty($intro['shortcode']) ) echo do_shortcode($intro['shortcode']); ?>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php if( !empty($mapcode) ): ?>
<section class="contact-google-map-sec-wrp">
<div class="contact-google-map-wrp">
  <div class="contact-google-map">
    <?php printf('%s', $mapcode); ?>
  </div> 
</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>