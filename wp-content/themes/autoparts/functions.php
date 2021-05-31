<?php

if ( ! function_exists( 'storefront_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 * @since  1.0.0
	 */
	function storefront_cart_link() {
		if ( ! storefront_woo_cart_available() ) {
			return;
		}
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Посмотрите, что лежит в вашей корзине', 'storefront' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d запчасть', '%d запчасти', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) ); ?></span>
			</a>
		<?php
	}
}


if ( ! function_exists( 'storefront_sticky_single_add_to_cart' ) ) {
    /**
     * Sticky Add to Cart
     *
     * @since 2.3.0
     */
    function storefront_sticky_single_add_to_cart() {
        global $product;

        if ( class_exists( 'Storefront_Sticky_Add_to_Cart' ) || true !== get_theme_mod( 'storefront_sticky_add_to_cart' ) ) {
            return;
        }

        if ( ! is_product() ) {
            return;
        }

        $show = false;

        if ( $product->is_purchasable() && $product->is_in_stock() ) {
            $show = true;
        } elseif ( $product->is_type( 'external' ) ) {
            $show = true;
        }

        if ( ! $show ) {
            return;
        }

        $params = apply_filters(
            'storefront_sticky_add_to_cart_params',
            array(
                'trigger_class' => 'entry-summary',
            )
        );

        wp_localize_script( 'storefront-sticky-add-to-cart', 'storefront_sticky_add_to_cart_params', $params );

        wp_enqueue_script( 'storefront-sticky-add-to-cart' );
        ?>
        <section class="storefront-sticky-add-to-cart">
            <div class="col-full">
                <div class="storefront-sticky-add-to-cart__content">
                    <?php echo wp_kses_post( woocommerce_get_product_thumbnail() ); ?>
                    <div class="storefront-sticky-add-to-cart__content-product-info">
                        <span class="storefront-sticky-add-to-cart__content-title"><?php esc_html_e( 'Вы смотрите:', 'storefront' ); ?> <strong><?php the_title(); ?></strong></span>
                        <span class="storefront-sticky-add-to-cart__content-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
                        <?php echo wp_kses_post( wc_get_rating_html( $product->get_average_rating() ) ); ?>
                    </div>
                    <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="storefront-sticky-add-to-cart__content-button button alt" rel="nofollow">
                        <?php echo esc_attr( $product->add_to_cart_text() ); ?>
                    </a>
                </div>
            </div>
        </section><!-- .storefront-sticky-add-to-cart -->
        <?php
    }
}

if ( ! function_exists( 'storefront_site_title_or_logo' ) ) {
    /**
     * Display the site title or logo
     *
     * @since 2.1.0
     * @param bool $echo Echo the string or return it.
     * @return string
     */
    function storefront_site_title_or_logo( $echo = true ) {
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            $logo = get_custom_logo();
            $tag  = is_home() ? 'h1' : 'div';
            $html = is_home() ? '<h1 class="logo">' . $logo . '</h1>' : $logo;


            $html .= '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a> <p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p></' . esc_attr( $tag ) . '>';
            //$html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';

        } else {
            $tag = is_home() ? 'h1' : 'div';

            $html = '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';

            if ( '' !== get_bloginfo( 'description' ) ) {
                $html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p></' . esc_attr( $tag ) . '>';
            }
        }

        if ( ! $echo ) {
            return $html;
        }

        echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

?>
