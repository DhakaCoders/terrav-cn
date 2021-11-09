<?php 
/*Template Name: Thankyou*/
get_header();
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
                    <h1 class="fl-h1-72 page-bedankt-cntent-title">Bedankt!</h1>
                    <h4 class="fl-h4">We nemen snel contact met je op!</h4>
                <?php 
                    if( !empty($intro['titel']) ) printf( '<h4 class="fl-h4">%s</h4>', $intro['titel'] ); 
                ?>
                </div>
               <div class="page-bedankt-cntent-desc">
                <?php 
                    if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                ?>
               </div>
               <div class="page-bedankt-cntent-menu-cntlr">
                   <ul class="reset-list">
                       <li><a href="#">Home pagina</a></li>
                       <li><a href="#">Onze producten</a></li>
                       <li><a href="#">Onze diensten</a></li>
                   </ul>
               </div>
            </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>