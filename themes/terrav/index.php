<?php 
get_header(); 
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


<section class="vo-sec-devider show-sm  no-sec-devider"></section>
<?php 
  if(have_posts()):
?>
<section class="tv-grids-modl-sec">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="tv-select-cntlr">
          <label class="nov-field-label">Sorteren op:</label>
          <div class="tv-select-inr tv-select-down-icon">
             <select class="xontact-custom-select select-2-cntlr">
                <option selected>meest recente</option>
                <option value="1">01/8/2021</option>
                <option value="1">02/9/2021</option>
                <option value="2">03/10/2021</option>
                <option value="3">04/11/2021</option>
                <option value="4">05/10/2021</option>
                <option value="5">06/10/2021</option>
                <option value="5">07/10/2021</option>
             </select>
            </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="tv-grids-modl-sec-cntlr">
          <ul class="reset-list">
            <?php  
              while(have_posts()): the_post(); 
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

                <div class="gmicnt-cntlr mHc1">
                  <span class="tv-date"><?php echo get_the_date('d/m/Y'); ?></span>
                  <h3 class="fl-h6 gmi-cntnt-tt  mHc2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
      <?php 
      global $query;
      if( $query->max_num_pages > 1 ): ?>
      <div class="col-md-12">
        <div class="fl-pagination-cntlr">
        <?php
          $big = 999999999; // need an unlikely integer
          $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

          echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type'      => 'list',
            'prev_next' => true,
            'prev_text' => __('Terug', 'terrav'),
            'next_text' => __('Volgende', 'terrav'),
            'format'    => '?paged=%#%',
            'current'   => $current,
            'total'     => $query->max_num_pages
          ) );
        ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>