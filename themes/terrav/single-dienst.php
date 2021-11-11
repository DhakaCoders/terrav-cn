<?php
get_header();
$thisID = get_the_ID();
$pageID = get_id_by_page_template('page-dienst.php');
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
                <span><?php echo get_the_title($pageID); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="innerpage-con-wrap">
  <article class="default-page-con" id="dienst-details"> 
    <div class="block">
      <div class="dfp-promo-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="dfp-promo-module-des">
                  
                  <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a. Posuere amet vel enim nascetur mus ultricies lacinia. Egestas morbi ut faucibus aenean. Faucibus erat sed volutpat in accumsan. </p>
                  <p>Ac faucibus semper etiam dui dignissim accumsan. Amet, augue risus facilisis suscipit est. Dignissim aliquam elementum et vitae vel augue. Habitasse id urna, massa rutrum egestas ac. </p>
                </div>
              </div>
              <div class="dfp-plate-one-img-bx">
                <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-01.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <p>Posuere amet vel enim nascetur mus ultricies lacinia. Egestas morbi ut faucibus aenean. Faucibus erat sed volutpat in accumsan. Ac faucibus semper etiam dui dignissim accumsan. Amet, augue risus facilisis suscipit est. Dignissim aliquam elementum et vitae vel augue. Habitasse id urna, massa rutrum egestas ac. </p>
                <ul>
                  <li>Posuere amet vel enim nascetur mus ultricies lacinia</li>
                  <li>Egestas morbi ut faucibus aenean.</li>
                  <li>Faucibus erat sed volutpat in accumsan.</li>
                  <li>Ac faucibus semper etiam dui dignissim accumsan.</li>
                </ul>
                <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. In risus quis elementum nunc vestibulum. Viverra tellus varius porta leo non nulla ultrices.</p>
                <div class="gap-60 hide-sm"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="dfp-top-gallery">
        <div class="dfp-gallery-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
                  <div class="gallery-wrap has-inline-bg clearfix">
                    <h3>Aliquet tempor congue elit.</h3>
                    <p>Consectetur feugiat arcu quisque amet vulputate cursus arcu sed. In risus quis elementum nunc vestibulum. Viverra tellus varius porta leo non nulla ultrices.</p>
                    <div class="gallery gallery-columns-2 gallerySlider">
                      <figure class="gallery-item">
                        <div class="gallery-icon portrait">
                          <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-02.jpg');"></div>
                          <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-02.jpg">
                        </div>
                      </figure>

                      <figure class="gallery-item">
                        <div class="gallery-icon portrait">
                          <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-03.jpg');"></div>
                          <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-03.jpg">
                        </div>
                      </figure>
                    </div>
                  </div>                      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <p>Malesuada vel, velit ut nunc, viverra tempus. Senectus orci ut nunc amet, eu praesent in erat a. Elit sit nunc, integer tortor feugiat. Nunc quis ornare sit in auctor maecenas scelerisque. Turpis curabitur massa amet cras pharetra. Posuere fermentum imperdiet fusce mattis sed tellus. Tincidunt duis id sit sed integer. Faucibus leo quam id sollicitudin enim. </p>
                <ol>
                  <li>Posuere amet vel enim nascetur mus ultricies lacinia.</li>
                  <li>Egestas morbi ut faucibus aenean.</li>
                  <li>Faucibus erat sed volutpat in accumsan.</li>
                  <li>Ac faucibus semper etiam dui dignissim accumsan.</li>
                </ol>
                <p>Nunc quis ornare sit in auctor maecenas scelerisque. Turpis curabitur massa amet cras pharetra. Posuere fermentum imperdiet fusce mattis sed tellus. Tincidunt duis id sit sed integer. Faucibus leo quam id sollicitudin enim. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
      </div>
    </div>

    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <h3>Neque cursus odio nec arcu sit.</h3>
                <p>Pulvinar ullamcorper nunc facilisis proin cursus donec. Nunc pellentesque nec, leo orci, semper nullam pharetra. Purus volutpat lectus diam nunc, potenti convallis et rhoncus. Ullamcorper urna commodo duis aliquet turpis. Tincidunt elementum aliquam vitae, tortor, mattis in.</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <div class="dfp-full-img-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-04.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="block">
      <div class="dfp-text-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <p>Diam fames fames pellentesque lorem pellentesque. Arcu purus facilisis ut risus id. Egestas cursus id et orci. Purus netus ipsum amet leo libero risus platea sed ac. Pellentesque dictum sed vitae egestas magna non vitae eget fermentum. </p>
                <p>Commodo leo in sed lectus lobortis fusce non tortor fusce. Vel facilisi nunc tristique non diam sed tincidunt. Commodo augue neque risus est dictum. Et vulputate risus blandit purus urna faucibus amet at turpis. Eget lorem id.</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                      <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a.</p>
                      <strong>Mark S.</strong>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <div class="dfp-gallery-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-wrap has-inline-bg glslider2 clearfix">
                <div class="gallery gallery-columns-3 gallerySlider2">
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-05.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-05.jpg">
                    </div>
                  </figure>

                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-06.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-06.jpg">
                    </div>
                  </figure>
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-07.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-07.jpg">
                    </div>
                  </figure>

                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-08.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-08.jpg">
                    </div>
                  </figure>
                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-09.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-09.jpg">
                    </div>
                  </figure>

                  <figure class="gallery-item">
                    <div class="gallery-icon portrait">
                      <div class="gallery-icon-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/dfp-img-10.jpg');"></div>
                      <img src="<?php echo THEME_URI; ?>/assets/images/dfp-img-10.jpg">
                    </div>
                  </figure>
                </div>
              </div>
              <div class="dienst-details-hr-cntlr">
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block">
      <div class="dfp-professional-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="dienst-details-pro-module-cntlr">
                <div class="dfp-professional-module-cntlr">
                  <div class="strong-professional-sec-cntlr">
                    <div class="professional-title">
                      <h3 class="fl-h4 professional-heading">Verantwoordelijke partner:</h3>
                    </div>
                    <div class="professional-team-logo">
                      <ul class="reset-list">
                        <li>
                          <div class="prfnl-tm-logo">
                            <i>
                              <a href="#">
                                <img src="<?php echo THEME_URI; ?>/assets/images/partner-logo.jpg" alt="">
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
          </div>
        </div>
      </div>
    </div>
<?php 

    $Query = new WP_Query(array(
    'post_type' => 'dienst',
    'posts_per_page'=> 4,
    'post__not_in' => array(get_the_ID()),
    'orderby' => 'date',
    'order'=> 'desc'

  ));
if( $Query->have_posts() ): 
?>
    <div class="block">
      <div class="dfp-grid-module">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="trv-service-con-cntlr">
                <div class="trv-service-intro-cntlr">
                  <div class="sec-entry-hdr-des-cntlr">
                    <div class="sec-entry-hdr">
                      <h2 class="fl-h2 sec-entry-hdr-title"><?php _e('Wij verzorgen elke stap van het proces', 'terrav'); ?></h2>
                    </div>
                    <div class="sec-entry-desc">
                      <p>Blandit volutpat enim rutrum maecenas nunc, consectetur nec a commodo. Pulvinar erat sed a tempus. Sed et purus, eget viverra a. Posuere amet vel enim nascetur mus ultricies lacinia. Egestas morbi ut faucibus aenean.</p>
                    </div>
                  </div>
                </div>  
              </div>
            </div>

            <div class="col-md-12">

              <div class="dfp-grid-module-cntlr">
                <div class="dienst-details-trv-service-grids dienstDetailsSlider">
                  <?php 
                    $i = 1;
                    while($Query->have_posts()): $Query->the_post(); 
                    global $post;
                    $imgID = get_post_thumbnail_id(get_the_ID());
                    $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): dienst_placeholder('tag');
                    $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): dienst_placeholder();
                  ?>
                  <div class="dienst-details-trv-service-grids-item">
                    <div class="trv-service-grid-item-cntlr">
                      <div class="trv-service-grid-item">
                        <div class="trv-service-grid-item-inner">
                          <div class="trv-service-grid-img-cntlr has-inline-bg">
                            <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                            <div class="inline-bg service-grid-img" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                            <?php echo $imgtag; ?>
                          </div>
                          <div class="trv-service-grid-des">
                            <div class="trv-svic-grid-des-top-2line">
                              <i>
                                <svg class="Svic-grid-2line" width="41" height="44" viewBox="0 0 41 44" fill="#E83747">
                                  <use xlink:href="#Svic-grid-2line"></use> 
                                </svg>
                              </i>
                            </div>
                            <h2 class="fl-h6 trv-service-grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <div class="trv-service-grid-btn">
                              <a class="fl-info-btn" href="<?php the_permalink(); ?>">
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
                        <div class="trv-svic-grid-des-btm-cunt-nmbr">
                          <h3 class="fl-h1 svic-grid-cunt-nmbr"><?php echo num_format($i); ?>.</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $i++; endwhile; ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata(); ?>
  </article>
</section>
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>