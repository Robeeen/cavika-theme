<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="description" content="">
		<title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-RFENMJMS3N"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-RFENMJMS3N');
		</script>
        <?php wp_head( );?>
		
    </head>
    <body>
        <header>
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
			<!-- Google tag (gtag.js) --> 
			<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11049540861"></script>
			<script> 						
				window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11049540861'); 
			</script>
        </header>
    <script src="" async defer></script>