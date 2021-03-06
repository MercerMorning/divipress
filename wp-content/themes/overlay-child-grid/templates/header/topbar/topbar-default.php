<div class="site-bar overlay-topbar-default <?php echo ( get_theme_mod( 'overlay-topbar-switch', customizer_library_get_default( 'overlay-topbar-switch' ) ) ) ? sanitize_html_class( 'site-topbar-switch' ) : ''; ?> <?php echo ( 'stick-onlytbar' == get_theme_mod( 'overlay-stick-header-element', customizer_library_get_default( 'overlay-stick-header-element' ) ) ) ? sanitize_html_class( 'stick-header' ) : ''; ?>">
    <div class="site-container">

        <div class="site-bar-inner">
            <div class="site-bar-left">

                <?php if ( !get_theme_mod( 'overlay-header-remove-number', customizer_library_get_default( 'overlay-header-remove-number' ) ) ) : ?>
					<span class="site-bar-text"><?php echo ( get_theme_mod( 'overlay-edit-text-phone-icon', customizer_library_get_default( 'overlay-edit-text-phone-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-phone-icon', customizer_library_get_default( 'overlay-edit-text-phone-icon' ) ) ) . '"></i>' : '<i class="fas fa-phone"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-phone', customizer_library_get_default( 'overlay-edit-text-phone' ) ) ) ?></span>
				<?php endif; ?>
                
            </div>
            <div class="site-bar-right">

                <?php if ( !get_theme_mod( 'overlay-header-remove-address', customizer_library_get_default( 'overlay-header-remove-address' ) ) ) : ?>
					<span class="site-bar-text"><?php echo ( get_theme_mod( 'overlay-edit-text-address-icon', customizer_library_get_default( 'overlay-edit-text-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-address-icon', customizer_library_get_default( 'overlay-edit-text-address-icon' ) ) ) . '"></i>' : '<i class="fas fa-map-marker-alt"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-address', customizer_library_get_default( 'overlay-edit-text-address' ) ) ) ?></span>
				<?php endif; ?>

                <?php wp_nav_menu( array( 'theme_location' => 'overlay-topbar-menu', 'menu_id' => 'overlay-topbar-menu', 'fallback_cb' => false ) ); ?>

            </div>
        </div><!-- .site-topbar-inner -->

        <?php if ( !get_theme_mod( 'overlay-remove-header-search', customizer_library_get_default( 'overlay-remove-header-search' ) ) ) : ?>
            <?php if ( 'overlay-search-slide' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) || 'overlay-search-fade' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) || 'overlay-search-full' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) || 'overlay-search-full-txt' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) ) : ?>
                <div class="header-search-block">
                    <?php get_search_form(); ?>
                </div>
                <?php if ( 'overlay-search-full' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) || 'overlay-search-full-txt' == get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) ) : ?>
                    <div class="header-search-overlay"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

    </div><!-- .site-container -->
</div>