<?php
/*Template Name: Vacature*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
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

<?php 
$searchkey = '';
if( isset($_GET['keyword']) && !empty($_GET['keyword']) ){
	$searchkey = $_GET['keyword'];
}
?>
<section class="tv-vo-intro-sec  tv-modl-intro-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tv-intro-modl-sec-cntlr  tv-vo-intro-modl-sec-cntlr">
          <div class="sec-module-col img-lft  order-2">
            <div class="vo-module-img inline-bg has-img" style="background-image: url('<?php echo !empty($intro['afbeelding'])? cbv_get_image_src($intro['afbeelding']):''; ?>');">
              <?php echo !empty($intro['afbeelding'])? cbv_get_image_tag($intro['afbeelding']):''; ?>
            </div>
          </div>
          <div class="sec-module-col cont-rgt  vo-cont-rgt order-1">
			<?php 
				if( !empty($intro['titel']) ) printf( '<h2 class="fl-h4  sec-modl-cont-tt">%s</h2>', $intro['titel'] ); 
			?>
            <div class="des vo-des tv-modl-intro-desc">
            <?php if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] ); ?>
            </div>

            <div class="vtur-ovzt-serch-cntlr">
              <label>
                <form action="" method="get">
					<input type="search" placeholder="Zoeken" name="keyword" value="<?php printf('%s', $searchkey); ?>">
	                <button>
	                  <i>
	                    <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="#F4A301">
	                      <use xlink:href="#search-icon"></use> 
	                    </svg>
	                  </i>
	                </button>
                </form>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query(array(
    'post_type' => 'vacature',
    's' => $searchkey,
    'posts_per_page'=>2,
    'orderby' => 'date',
    'order'=> 'DESC',
    'paged'=>$paged
  ));
  
?>
<section class="tv-grids-modl-sec tv-vo-grids-modl-sec">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="tv-bots-selct-cntlr">
          
        </div>
      </div>

      <div class="col-md-12">
        <div class="tv-grids-modl-sec-cntlr  tv-vo-grids-modl-sec-cntlr">
          <?php if($query->have_posts()): ?>
          <ul class="reset-list">
            <?php  
              while($query->have_posts()): $query->the_post(); 
              global $post;
              $imgID = get_post_thumbnail_id(get_the_ID());
              $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): THEME_URI.'/assets/images/vo-grid-img-inr.png';
              $jobtype = get_field('job_type', get_the_ID());
              $adres = get_field('adres', get_the_ID());
            ?>
            <li>
              <div class="tv-grid-modl-item">
                <div class="gmi-img-cntlr  vo-gmi-img-cntlr has-img">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="gmi-inline-bg  vo-gmi-inline-bg  inline-bg" style="background-image: url('<?php echo $imgsrc; ?>');"></div>
                </div>

                <div class="gmicnt-cntlr mHc1  vo-gmicnt-cntlr">
                  <span class="tv-date"><?php echo get_the_date('d/m/Y'); ?></span>
                  <h3 class="fl-h6 gmi-cntnt-tt  vo-gmi-cntnt-tt  mHc2"><a href="#"><?php the_title(); ?></a></h3>
                  <?php if( !empty($jobtype) || !empty($adres) ){ ?>
                  <span class="full-time" ><?php printf('%s', $jobtype); printf(' / %s', $adres); ?></span>
              	<?php } ?>
                  <div class="gmicnt-btn  hide-sm">
                      <a class="fl-info-btn  no-fl-info-btn  vo-fl-info-btn" href="<?php the_permalink(); ?>">
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
            <div class="notfound"><?php _e( 'Geen resultaat', 'terrav' ); ?>.</div>
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