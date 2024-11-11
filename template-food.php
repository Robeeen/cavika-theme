<?php 

/* Template Name: Services Food Photography
   Template Post Type: services 
*/
?>
<?php get_header();?>

<div class="container">
    <div class="page-wrap">
        <!-- <h2><?php the_title(); ?></h2> -->
            <div class="col-md-12 mb-5">
                <p>
                       <?php  
                $desc = get_post_meta($post->ID, 'description', true);                
                if ($desc) { ?>                
                <?php echo $desc; ?>           
                <?php                 
                    } else { 
                // do nothing; 
                }            
                ?> 
                </p>
            </div>
    
        <div class="col-md-6 offset-md-3 mb-5">
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="https://cavika.com/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[Best_Wordpress_Gallery id="4"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="https://cavika.com/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[Best_Wordpress_Gallery id="5"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="https://cavika.com/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
		        <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[Best_Wordpress_Gallery id="26"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="https://cavika.com/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
		        <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[Best_Wordpress_Gallery id="27"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="https://cavika.com/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <div class="col-md-12 mb-5">
            <?php echo do_shortcode( '[testimonial_view id="1"]' ) ?>
        </div>

        <div class="col-md-12 mb-5">
            <p>
            <?php  
                $notes = get_post_meta($post->ID, 'mynotes', true);                
                if ($notes) { ?>                
                <?php echo $notes; ?>           
                <?php                 
                    } else { 
                // do nothing; 
                }                
            ?></p>
        </div>
        <div class="col-md-6 offset-md-5 mb-5">
        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        
        </div>



    </div>
</div>

<?php get_footer();?>



