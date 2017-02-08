<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */


$back_to_top_class = mfn_opts_get('back-top-top');

if( $back_to_top_class == 'hide' ){
	$back_to_top_position = false;
} elseif( strpos( $back_to_top_class, 'sticky' ) !== false ){
	$back_to_top_position = 'body';
} elseif( mfn_opts_get('footer-hide') == 1 ){
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}

?>

<?php do_action( 'mfn_hook_content_after' ); ?>


<?php if( is_page( array( 'projetos', 'blog', 'contato' ) ) ) : ?>

<?php else: ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/init.min.js"></script>
<div id="calculator">
    <div class="container">
        <div class="intro-text">
            <h2>Simulador Demape</h2>
            <p>Quer calcular o investimento para instalar um sistema de energia limpa?<br>
            Utilizando nossa calculadora você terá uma estimativa de valor a partir das<br>
            informações da fatura de energia</p>
        </div>
    </div>
    <div class="container">
        <form action="javascript:clique()">
            <div class="input">
                <input type="text" id="consumo" autocomplete="off" placeholder="Consumo médio (kWh/mês)">
            </div>
            <div class="input">
                <select name="tipo" class="browser-default primary-color">
                    <option>Selecione o tipo de sistema...</option>
                    <option value="1">Monofásico</option>
                    <option value="2">Bifásico</option>
                    <option value="3">Trifásico</option>
                </select>
            </div>
                <div class="button">
                    <button type="submit" class="calc-button">calcular</button>             
                </div>
        </form>        
    </div>

    <div class="overlay"></div>
    <div id="result">
        <div class="result-content result">
            <h4>Resultados</h4>
            <table class="grey-text">
                <thead>
                    <tr>
                        <th>Kit Recomendado</th>
                        <th>Valor da Telha Metálica</th>
                        <th>Valor da Telha Cerâmica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span id="kit-recomendado"></span> kWp</td>
                        <td>R$ <span id="telha_metalica"></span></td>
                        <td>R$ <span id="telha_ceramica"></span></td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
				<button type="submit" class="quote-button" onclick="quote()">receba um orçamento agora</button>
            </div>
        </div>
        
        <div class="result-content quote">
        	<h4>Receba um Orçamento Grátis</h4>
        	<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
        </div>        
    </div>        
</div>

<?php endif; ?>

<!-- #Footer -->		
<footer id="Footer" class="clearfix">
	
	<?php if ( $footer_call_to_action = mfn_opts_get('footer-call-to-action') ): ?>
	<div class="footer_action">
		<div class="container">
			<div class="column one column_column">
				<?php echo do_shortcode( $footer_call_to_action ); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php 
		$sidebars_count = 0;
		for( $i = 1; $i <= 5; $i++ ){
			if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
		}
		
		if( $sidebars_count > 0 ){
			
			$footer_style = '';
				
			if( mfn_opts_get( 'footer-padding' ) ){
				$footer_style .= 'padding:'. mfn_opts_get( 'footer-padding' ) .';';
			}
			
			echo '<div class="widgets_wrapper" style="'. $footer_style .'">';
				echo '<div class="container">';
						
					if( $footer_layout = mfn_opts_get( 'footer-layout' ) ){
						// Theme Options

						$footer_layout 	= explode( ';', $footer_layout );
						$footer_cols 	= $footer_layout[0];
		
						for( $i = 1; $i <= $footer_cols; $i++ ){
							if ( is_active_sidebar( 'footer-area-'. $i ) ){
								echo '<div class="column '. $footer_layout[$i] .'">';
									dynamic_sidebar( 'footer-area-'. $i );
								echo '</div>';
							}
						}						
						
					} else {
						// Default - Equal Width
						
						$sidebar_class = '';
						switch( $sidebars_count ){
							case 2: $sidebar_class = 'one-second'; break;
							case 3: $sidebar_class = 'one-third'; break;
							case 4: $sidebar_class = 'one-fourth'; break;
							case 5: $sidebar_class = 'one-fifth'; break;
							default: $sidebar_class = 'one';
						}
						
						for( $i = 1; $i <= 5; $i++ ){
							if ( is_active_sidebar( 'footer-area-'. $i ) ){
								echo '<div class="column '. $sidebar_class .'">';
									dynamic_sidebar( 'footer-area-'. $i );
								echo '</div>';
							}
						}
						
					}
				
				echo '</div>';
			echo '</div>';
		}
	?>


	<?php if( mfn_opts_get('footer-hide') != 1 ): ?>
	
		<div class="footer_copy">
			<div class="container">
				<div class="column one">

					<?php 
						if( $back_to_top_position == 'copyright' ){
							echo '<a id="back_to_top" class="button button_left button_js" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
						}
					?>
					
					<!-- Copyrights -->
					<div class="copyright">
						<?php 
							if( mfn_opts_get('footer-copy') ){
								echo do_shortcode( mfn_opts_get('footer-copy') );
							} else {
								echo '&copy; '. date( 'Y' ) .' '. get_bloginfo( 'name' ) .'. All Rights Reserved. <a target="_blank" rel="nofollow" href="http://muffingroup.com">Muffin group</a>';
							}
						?>
					</div>
					
					<?php 
						if( has_nav_menu( 'social-menu-bottom' ) ){
							mfn_wp_social_menu_bottom();
						} else {
							get_template_part( 'includes/include', 'social' );
						}
					?>
							
				</div>
			</div>
		</div>
	
	<?php endif; ?>
	
	
	<?php 
		if( $back_to_top_position == 'footer' ){
			echo '<a id="back_to_top" class="button button_left button_js in_footer" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
		}
	?>

	
</footer>

</div><!-- #Wrapper -->

<?php 
	// Responsive | Side Slide
	if( mfn_opts_get( 'responsive-mobile-menu' ) ){
		get_template_part( 'includes/header', 'side-slide' );
	}
?>

<?php
	if( $back_to_top_position == 'body' ){
		echo '<a id="back_to_top" class="button button_left button_js '. $back_to_top_class .'" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
	}
?>

<?php if( mfn_opts_get('popup-contact-form') ): ?>
	<div id="popup_contact">
		<a class="button button_js" href="#"><i class="<?php mfn_opts_show( 'popup-contact-form-icon', 'icon-mail-line' ); ?>"></i></a>
		<div class="popup_contact_wrapper">
			<?php echo do_shortcode( mfn_opts_get('popup-contact-form') ); ?>
			<span class="arrow"></span>
		</div>
	</div>
<?php endif; ?>

<?php do_action( 'mfn_hook_bottom' ); ?>
	
<!-- wp_footer() -->
<?php wp_footer(); ?>

</body>
</html>