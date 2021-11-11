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


<section class="over-ons-intro-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="over-ons-intro-sec-cntlr">
            <div class="over-ons-intro-sec-left">
              <div class="over-ons-intro-des">
                <div class="over-ons-des-cntlr">
                  <h3 class="fl-h6 color-green over-ons-des-title"><svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                  <use xlink:href="#equal-icon"></use> </svg>LOREM IPSUM</h3>
                  <h2 class="fl-h1 over-ons-des-heading">Terra Verde</h2>
                  <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a. Posuere amet vel enim nascetur mus ultricies lacinia. Egestas morbi ut faucibus aenean. Faucibus erat sed volutpat in accumsan.</p>
                  <p>Ac faucibus semper etiam dui dignissim accumsan. Amet, augue risus facilisis suscipit est. Dignissim aliquam elementum et vitae vel augue. Habitasse id urna, massa rutrum egestas ac. </p>
                  <div class="over-ons-intro-button">
                    <a href="#" class="fl-btn btn-bg-green">OVER ONS</a><a href="#" class="fl-btn">Producten</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="over-ons-intro-sec-right">
              <div class="over-ons-intro-sec-img">
                <div class="over-ons-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/over-ons-intro-img.jpg);">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>

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

<section class="over-ons-lftimg-rgtdes-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-lftimg-rgtdes-sec-cntlr">

        <div class="fl-dft-lftimg-rgtdes clearfix">
          <div class="fl-dft-lftimg-rgtdes-lft over-ons-lftimg-rgtdes-sec-lft">
            <div class="inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/product-img.jpg);"></div>
            <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-12.jpg">
          </div>
          <div class="fl-dft-lftimg-rgtdes-rgt over-ons-lftimg-rgtdes-sec-rgt">
            <h2 class="fl-h1">Ut lacus amet tellus morbi varius in blandit. </h2>
            <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a. Posuere amet vel enim nascetur mus ultricies lacinia. Egestas morbi ut faucibus aenean. Faucibus erat sed volutpat in accumsan.</p>
            <p>Ac faucibus semper etiam dui dignissim accumsan. Amet, augue risus facilisis suscipit est. Dignissim aliquam elementum et vitae vel augue. Habitasse id urna, massa rutrum egestas ac. </p>
          </div>
        </div>

        </div>  
      </div>
    </div>
  </div>
</section>

<section class="over-ons-cta-module-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="cta-module-ctlr">
          <div class="cta-module">
            <div class="cta-module-inr">
              <div class="cta-module-lft">
                <h4 class="cta-module-sub-title fl-h6">
                  Contact
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/cta-icon.png"></i>
                </h4>
                <h2 class="cta-module-title fl-h1">Facilisi duis aliquet.</h2>
                <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a. </p>
              </div>
              <div class="cta-module-rgt">
                <div class="cta-module-btn">
                  <a href="#">contacteer ons</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="certificates-guarantee-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="certificates-guarantee-cntlr">
          <div class="certificates-guarantee-title">
            <h2 class="fl-h2 certificates-guarantee-heading">Deze certificaten garanderen onze kwaliteit:</h2>
          </div>
          <div class="certificates-guarantee-grd">
            <ul class="reset-list">
              <li>
                <div class="certificates-guarantee-grd-item">
                  <div class="certificates-guarantee-log">
                    <img src="<?php echo THEME_URI; ?>/assets/images/certificates-guarantee-logo.png" alt="">
                  </div>
                  <div class="certificates-guarantee-des">
                    <h3 class="fl-h6 certificates-guarantee-des-title">Certificaten</h3>
                    <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="certificates-guarantee-grd-item">
                  <div class="certificates-guarantee-log">
                    <img src="<?php echo THEME_URI; ?>/assets/images/certificates-guarantee-logo.png" alt="">
                  </div>
                  <div class="certificates-guarantee-des">
                    <h3 class="fl-h6 certificates-guarantee-des-title">Certificaten</h3>
                    <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="certificates-guarantee-grd-item">
                  <div class="certificates-guarantee-log">
                    <img src="<?php echo THEME_URI; ?>/assets/images/certificates-guarantee-logo.png" alt="">
                  </div>
                  <div class="certificates-guarantee-des">
                    <h3 class="fl-h6 certificates-guarantee-des-title">Certificaten</h3>
                    <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. </p>
                  </div>
                </div>
              </li>

              <li>
                <div class="certificates-guarantee-grd-item">
                  <div class="certificates-guarantee-log">
                    <img src="<?php echo THEME_URI; ?>/assets/images/certificates-guarantee-logo.png" alt="">
                  </div>
                  <div class="certificates-guarantee-des">
                    <h3 class="fl-h6 certificates-guarantee-des-title">Certificaten</h3>
                    <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="over-ons-history-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-history-sec-cntlr">



          <div class="over-ons-intro-sec-left over-ons-history-sec-left">
              <div class="over-ons-intro-des over-ons-history-sec-des">
                <div class="over-ons-des-cntlr over-ons-history-des-cntlr">
                  <h3 class="fl-h6 color-green over-ons-history-des-title over-ons-des-title"><svg class="over-ons-title-icon" width="28" height="31" viewBox="0 0 28 31" fill="#4F7F35">
                  <use xlink:href="#equal-icon"></use> </svg>Historiek</h3>
                  <h2 class="fl-h2 over-ons-history-des-heading">Nunc ac duis ut nulla.</h2>
                  <p>Amet, augue risus facilisis suscipit est. Dignissim aliquam elementum et vitae vel augue. Habitasse id urna, massa rutrum egestas ac. </p>
                  <ul>
                    <li class="wow fadeInUp delay-1" ><span>1950:</span>De Roeck</li>
                    <li class="wow fadeInUp delay-2"><span>1974:</span>Jacques Remy</li>
                    <li class="wow fadeInUp delay-3"><span>1975:</span>De Boelpaep</li>
                    <li class="wow fadeInUp delay-4"><span>2005:</span>De Boelpaep wordt DBS</li>
                    <li class="wow fadeInUp delay-5"><span>2012:</span>Compra</li>
                    <li class="wow fadeInUp delay-6"><span>2013:</span> Fruitpackers</li>
                    <li class="wow fadeInUp delay-7"><span>2016:</span>Terra Verde </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="over-ons-intro-sec-right over-ons-history-sec-righ">
              <div class="over-ons-intro-sec-img">
                <div class="over-ons-img inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/history-sec-img.jpg);">
                </div>
              </div>
            </div>



        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>