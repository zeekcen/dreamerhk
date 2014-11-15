<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package fluxus
 * @since fluxus 1.0
 */
?>

    <div id="footer-push"></div>
</div><!-- #page-wrapper -->

<footer id="footer">
    <div class="footer-inner clearfix">
        <?php do_action( 'footer_social' ); ?>
        <div class="footer-links"><?php

            // Show menu, if it has been assigned.
            if ( has_nav_menu( 'footer_primary' ) ): ?>
                <nav class="footer-navigation"><?php
                    @wp_nav_menu( array( 'theme_location' => 'footer_primary', 'walker' => new Intheme_Menu_Walker() ) ); ?>
                </nav><?php
            endif;

            $copyright = of_get_option( 'fluxus_copyright_text' );
            if ( !empty( $copyright ) ) : ?>
                <div class="credits"><?php echo $copyright; ?></div><?php
            endif;

            ?>
        </div>
        <div class="nav-tip">
            <?php //printf( __( 'Use arrows %s for navigation', 'fluxus' ), '<a href="#" class="button-minimal icon-left-open-mini" id="key-left"></a><a href="#" class="button-minimal icon-right-open-mini" id="key-right"></a>' ); ?>
            <?php printf( __( '%s', 'fluxus' ), '<a href="#" class="button-minimal icon-left-open-mini" id="key-left"></a><a href="#" class="button-minimal icon-right-open-mini" id="key-right"></a>' ); ?>
        </div>
        <?php do_action( 'footer_links' ); ?>
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style_24x24">
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1395042767457418" charset="utf-8"></script>
<!-- JiaThis Button END -->
    </div>
</footer>
<?php

wp_footer();

?>
</body>
</html>
