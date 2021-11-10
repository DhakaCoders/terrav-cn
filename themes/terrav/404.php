<?php 
get_header();
$desc = get_field('page_404', 'options'); 
?>
<div class="hdr-btm-bdr"></div>
<section class="page-bedankt-cntent-cntlr page-404-cntent-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="page-bedankt-cntent-cntlr-innr">
                <div class="page-bedankt-cntent-img">
                    <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/error-404 1.svg">
                    </i>
                </div>
                <div class="page-bedankt-cntent-heading">
                    <h1 class="fl-h1-72 page-bedankt-cntent-title">404!</h1>
                    <?php if( !empty($desc['titel']) ) printf('<h4 class="fl-h4">%s</h4>', $desc['titel']); ?>
                </div>
               <div class="page-bedankt-cntent-desc">
                   <?php if( !empty($desc['beschrijving']) ) echo wpautop($desc['beschrijving']); ?>
               </div>
               <?php if( !empty($desc['knops']) ): ?>
               <div class="page-bedankt-cntent-menu-cntlr">
                   <ul class="reset-list">
                      <?php 
                        foreach( $desc['knops'] as $knop ):  
                        $knopp = $knop['knop'];
                        if( is_array( $knopp ) &&  !empty( $knopp['url'] ) ){
                            printf('<li><a href="%s" target="%s">%s</a></li>', $knopp['url'], $knopp['target'], $knopp['title']); 
                        }
                        endforeach; 
                     ?>
                   </ul>
               </div>
               <?php endif; ?>
            </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>