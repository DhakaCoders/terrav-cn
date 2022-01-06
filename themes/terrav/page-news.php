<?php 
/*Template Name: Nieuws*/
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
  $obrderby = 'date';
  $order = 'DESC';
  $sort = '';
  if( isset($_GET['sort']) && !empty($_GET['sort'])){
    $sort = $_GET['sort'];
    if( $_GET['sort'] == 'asc' ){
      $order = 'ASC';
    }elseif($_GET['sort'] == 'a-z'){
      $obrderby = 'title';
      $order = 'ASC';
    }elseif($_GET['sort'] == 'z-a'){
      $obrderby = 'title';
      $order = 'DESC';
    }
  }
?>
<section class="tv-modl-intro-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tv-intro-modl-sec-cntlr  tv-no-intro-modl-sec-cntlr">
          <?php 
              $single_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> 1,
                'orderby' => 'date',
                'order'=> 'desc'
              ));
              $topnewsID = '';
              if($single_query->have_posts()):
              while($single_query->have_posts()): $single_query->the_post(); 
              global $post;
              $imgID = get_post_thumbnail_id(get_the_ID());
              $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): news_placeholder();
              $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): news_placeholder('tag');
              $topnewsID = get_the_ID();
          ?>
          <div class="sec-module-col img-lft">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <div class="vo-module-img inline-bg has-img" style="background-image: url('<?php echo $imgsrc; ?>');">
              <?php echo $imgtag; ?>
            </div>
            <div class="two-line show-sm">
              <i>
                <svg class="Svic-grid-2line" width="41" height="44" viewBox="0 0 41 44" fill="#E83747">
                  <use xlink:href="#Svic-grid-2line"></use> 
                </svg>
              </i>
          </div>
          </div>
          <div class="sec-module-col cont-rgt">
            <span class="tv-date"><?php the_date('d/m/Y'); ?></span>
            <h2 class="fl-h6  sec-modl-cont-tt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="des nov-des">
              <?php the_excerpt(); ?>
            </div>
            <div class="gmicnt-btn">
              <a class="fl-info-btn  no-fl-info-btn" href="<?php the_permalink(); ?>">
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
        <?php endwhile; wp_reset_postdata();?>
        <?php else: ?>
          <div class="col-md-12">
            <div class="notfound"><?php echo no_result_text(); ?></div>
          </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=> 14,
    'post__not_in' => array($topnewsID),
    'orderby' => $obrderby,
    'order'=> $order,
    'paged'=>$paged
  ));
  if($query->have_posts()):
?>
<section class="tv-grids-modl-sec">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="tv-select-cntlr">
          <label class="nov-field-label">Sorteren op:</label>
          <div class="tv-select-inr tv-select-down-icon">
            <form action="" method="get">
              <select class="xontact-custom-select select-2-cntlr" name="sort" onchange="javascript:this.form.submit()">
                <option value="desc" <?php echo $sort == 'desc'? 'selected':''; ?>><?php _e('meest recente', 'terrav'); ?></option>
                <option value="asc" <?php echo $sort == 'asc'? 'selected':''; ?>><?php _e('oldest', 'terrav'); ?></option>
                <option value="a-z" <?php echo $sort == 'a-z'? 'selected':''; ?>>A-Z</option>
                <option value="z-a" <?php echo $sort == 'z-a'? 'selected':''; ?>>Z-A</option>
              </select>
            </form>
            </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="tv-grids-modl-sec-cntlr">
          <ul class="reset-list">
            <?php  
              while($query->have_posts()): $query->the_post(); 
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
      <?php if( $query->max_num_pages > 1 ): ?>
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