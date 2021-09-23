function show_product_promotional_banner() {
	global $WCFM, $WCFMmp, $product;	
	if( !$product ) return;
	$product_id = $product->get_id();
	$product_promotion_banner_img = get_post_meta( $product_id, 'product_promotion_banner_img', true );
	if( $product_promotion_banner_img ) {
		echo '<img src="'.$product_promotion_banner_img.'" alt="Cover" class="promotional_img"/>';
	}
};
add_shortcode( 'product_promotion_banner', 'show_product_promotional_banner' );
