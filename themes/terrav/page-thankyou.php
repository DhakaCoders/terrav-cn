<?php 
/*Template Name: Thankyou*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
?>
<div class="hdr-btm-bdr"></div>
<section class="page-bedankt-cntent-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="page-bedankt-cntent-cntlr-innr">
                <div class="page-bedankt-cntent-img">
                    <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/mail-sent 1.svg">
                    </i>
                </div>
                <div class="page-bedankt-cntent-heading">
                <?php 
                if( !empty($intro['top_titel']) ) printf( '<h1 class="fl-h1-72 page-bedankt-cntent-title">%s</h1>', $intro['top_titel'] ); 
                if( !empty($intro['titel']) ) printf( '<h4 class="fl-h4">%s</h4>', $intro['titel'] ); 
                ?>
                </div>
               <div class="page-bedankt-cntent-desc">
                <?php 
                    if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                ?>
               </div>
               <?php if( !empty($intro['knops']) ): ?>
               <div class="page-bedankt-cntent-menu-cntlr">
                   <ul class="reset-list">
                    <?php 
                        foreach( $intro['knops'] as $knop ):  
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