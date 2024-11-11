<?php 
/* Template Name: Booking
*/
?>
<?php get_header();?>
<div class="container">
    <div class="page-wrap">
        


        
        <div class="col-md-12 mb-5">
            <h2 style="text-align:center;"><?php the_field('headline'); ?></h2>

            <?php the_field('widgets'); ?>
            
         
        </div>


    </div>
</div>
<?php get_footer();?>



