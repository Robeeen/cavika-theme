<div class="container">
    <div class="page-wrap">
        <!-- <h2><?php the_title(); ?></h2> -->
            <div class="col-md-12 mb-5">
                <p>
                       <?php  
                $desc = get_post_meta($post->ID, 'descriptions', true);                
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
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <!-- <div class="col-md-12 mb-5">
            <?php echo do_shortcode('[Best_Wordpress_Gallery id=""]');?>
        </div> -->
       <div class="col-md-12 mb-5 flex">            
            <div class="col-md-6">
                <div class="embed-container">
                    <?php the_field('youtube'); ?>
                </div>
            </div>
            <div class="col-md-6 uploaded_image">
                <?php 
                    $image = get_field('image_');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <div class="col-md-12 mb-5">
             <?php echo do_shortcode('[Best_Wordpress_Gallery id="1"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
		        <div class="col-md-12 mb-5">
             <?php echo do_shortcode('[Best_Wordpress_Gallery id="3"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
		        <div class="col-md-12 mb-5">
             <?php echo do_shortcode('[Best_Wordpress_Gallery id="32"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>
		        <div class="col-md-12 mb-5">
             <?php echo do_shortcode('[Best_Wordpress_Gallery id="33"]');?>
        </div>

        <div class="col-md-6 offset-md-3 mb-5">            
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Prices</button></a>
            <a href="/prices-booking" target="_blank"><button type="button" class="btn btn-warning right-margin">Booking</button></a>
            <a href="/free-quote/" target="_blank"><button type="button" class="btn btn-warning right-margin">Free quote</button></a>
            <a href="https://wa.me/+601126123958" target="_blank"><button type="button" class="btn btn-success right-margin">WhatsApp</button></a>
        </div>

        <div class="col-md-12 mb-5">
            <?php echo do_shortcode( '[testimonial_view id="2"]' ) ?>
        </div>

        <div class="col-md-12 ">
            <p>
            <?php  
                $notes = get_post_meta($post->ID, 'notes', true);                
                if ($notes) { ?>                
                <?php echo $notes; ?>           
                <?php                 
                    } else { 
                // do nothing; 
                }                
            ?>
            </p>
        </div>

        <div class="col-md-12 ">
            <p>
            <?php  
                $tours = get_post_meta($post->ID, 'virtual_tour', true);                
                if ($tours) { ?>                
                <?php echo $tours; ?>           
                <?php                 
                    } else { 
                    echo "not found";
                }                
            ?>
            </p>
        </div>

        
        
        <div class="col-md-6 offset-md-5 mb-5">
        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        
        </div>
        



    </div>
</div>
