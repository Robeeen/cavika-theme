<?php 
/* Template Name: Video-Page
*/
?>
<?php if(is_page('video')){
    get_header('video');}
    else{
        get_header();
    }
   
    ?>
<?php echo do_shortcode( '[layerslider id="1"]' );?>
<div class="container">
    <div class="page-wrap">
        <!-- <h2><?php the_title(); ?></h2> -->
            <div class="col-md-12 mb-5">
                <p>
                <?php  
                    $desc = get_post_meta($post->ID, 'video-page', true);                
                    if ($desc) {                
                         echo $desc;                      
                    } else { 
                        return "Error";
                     }?>
                </p>
            </div>
        <div class="col-md-6 offset-md-3 mb-5">
            <a href="/prices" target="_blank"><button type="button" class="btn btn-warning right-margin">Book Free Consultation</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
        <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[layerslider id="2"]');?>
        </div> 
        
        <div class="row" style="padding-top: 20px;">       
            <div class="col-md-6">
               <?php echo do_shortcode( '[layerslider id="3"]' ); ?>
            </div>
            <div class="col-md-6">
                <div style="padding-bottom: 20px;">
                    <?php the_field('youtube_text'); ?>
                </div>
            </div>
        </div>

        <div class="row">     
            <div class="col-md-6">
                <div style="padding-bottom: 20px;">
                    <?php the_field('brand'); ?>
                </div>
            </div>
             <div class="col-md-6">
               <?php echo do_shortcode( '[layerslider id="7"]' ); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
               <?php echo do_shortcode( '[layerslider id="8"]' ); ?>
            </div>     
            <div class="col-md-6">
                <div style="padding-bottom: 20px;">
                    <?php the_field('sports'); ?>
                </div>
            </div>             
        </div>
        <div class="row">     
            <div class="col-md-6">
                <div style="padding-bottom: 20px">
                    <?php the_field('commercial_product'); ?>
                </div>
            </div>
             <div class="col-md-6">
               <?php echo do_shortcode( '[layerslider id="9"]' ); ?>
            </div>
        </div>
        
    
        <div class="row mb-5">
            <p style="padding: 10px">
            <?php  
                $notes = get_post_meta($post->ID, 'bottom_paragraph', true);                
                if ($notes) { ?>                
                <?php echo $notes; ?>           
                <?php                 
                    } else { 
                // do nothing; 
                }                
            ?></p>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">
            <a href="/prices" target="_blank"><button type="button" class="btn btn-warning right-margin">Book Free Consultation</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>      
        
    </div>
</div>
<?php get_footer();?>



