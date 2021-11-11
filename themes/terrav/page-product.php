<?php
/*Template Name: Product*/
get_header();
$thisID = get_the_ID();
$customtitle = get_field('custom_page_titel', $thisID); 
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

<section class="product-page-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-page-entry-hdr-cntlr">
            <?php 
	          $pagetitle = !empty($customtitle)?$customtitle:get_the_title($thisID);
	          printf('<h2 class="product-page-entry-hdr-title fl-h2">%s</h2>', $pagetitle);
	          the_content(); 
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query(array(
    'post_type' => 'product',
    'posts_per_page'=> 1,
    'orderby' => 'date',
    'order'=> 'DESC',
    'paged'=>$paged
  ));
  
?>
<section class="product-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">                           
          <div class="tv-products-cntlr">
          	<?php if($query->have_posts()):?>
            <ul class="products">
            <?php  
              while($query->have_posts()): $query->the_post(); 
              global $post;
              $imgID = get_post_thumbnail_id(get_the_ID());
              $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): product_placeholder();
            ?>
              <li>
                <div class="tv-product-grd mHc">
                  <div class="tv-product-grd-inr">
                    <div class="tv-pro-grd-img-cntlr">
                      <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                      <div class="tv-pro-grd-img inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                    </div>
                    <div class="tv-pro-grd-des mHc1">
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
              </li>
              <?php endwhile; ?>
            </ul>
        	<?php else: ?>
          <div class="col-md-12">
            <div class="notfound"><?php echo no_result_text(); ?></div>
          </div>
        	<?php endif; ?>
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
<?php get_template_part('templates/cta', 'sec'); ?>
<?php get_footer(); ?>