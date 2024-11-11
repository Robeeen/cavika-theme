<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <?php wp_head( );?>
    </head>
    <body>
        <header style="display:none">
            <div class="container logo-align">
            <?php         
                if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
                }
            ?>
            
            <nav class="primary-menu-wrapper mobile">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} 
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->
                            
                            </div>
        </header>
    <script src="" async defer></script>